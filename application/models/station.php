<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Station extends Model //PortalBase 
{
    public $selector;

    function Station()
    {
        parent::Model(); 
        $this->selector = $this->setupselector();
    }
    
    function getSample($stationid){
		$sql = "select L.datetime, sum(L.volume) as volume
from arterial.arterial_detectors D, arterial.arterial_stations S, (select detectorid, date_trunc('hour', timestamp) as datetime, volume from arterial.detector_archive ) L
where D.stationid=$stationid and D.stationid=S.stationid and D.detectorid=L.detectorid and L.datetime>='2010-07-04 00:00:00' and L.datetime<'2010-07-05 00:00:00' 
group by D.stationid, L.datetime
order by D.stationid, L.datetime";
		
		#$sql = "select detectorid from stations where stationid=$stationid";
		$q = $this->db->query($sql);
		if($q->num_rows() > 0) {
			$rows = array();
			foreach ( $q->result() as $row ){
				$rows[] = $row;
			}
			return json_encode($rows);
		} else 
			return "";
      
		return "";
    }
    
	function getjson($stationid){
		$sql = "select cast(to_char(datetime,'YYYY') as int) as year,
cast(to_char(datetime,'MM') as int) as month,
cast(to_char(datetime,'DD') as int) as day,
cast(to_char(datetime,'HH24') as int) as hour,
sum(L.volume) as volume
from arterial.arterial_detectors D, arterial.arterial_stations S, (select detectorid, cast(date_trunc('hour', timestamp) as timestamp without time zone ) as datetime, volume from arterial.detector_archive ) L
where D.stationid=$stationid and D.stationid=S.stationid and D.detectorid=L.detectorid and L.datetime>='2010-07-04 00:00:00' and L.datetime<'2010-07-05 00:00:00' 
group by D.stationid, L.datetime
order by D.stationid, L.datetime";
		
		#$sql = "select detectorid from stations where stationid=$stationid";
		$q = $this->db->query($sql);
		$rows = array();
		if($q->num_rows() > 0) {
			
			foreach ( $q->result() as $row ){
				$arrIn = array();
				
				// mktime(hour,min,sec,month,day,year)
				$arrIn[] = mktime($row->hour, 0, 0,$row->month,$row->day,$row->year)*1000;
				
				$arrIn[] = intval($row->volume);
				$rows[] = $arrIn;
			}
			return $rows;
		} else 
			return $rows;
      
		return "";
    }
    //
    // Private function to setup selectors.
    //
    function setupselector($select = 0)
    {
        $db_ref =& $this->db;
        $db_ref->select("c.latlon[0] as lat, c.latlon[1] as long," .
                        "a.stationid, b.highwayname," .
                        "b.direction, locationtext, a.highwayid," . 
                        "c.station_milepost", FALSE);
        $db_ref->from("stations a");
        $db_ref->join('highways b', 'a.highwayid = b.highwayid');
        $db_ref->join('stations_mileposts c', 'a.stationid = c.stationid');
        $db_ref->orderby("a.highwayid");
        $db_ref->orderby("c.station_milepost");
        $query = $db_ref->get();
        $data['stationselect'][0] = "Select....";

        foreach($query->result() AS $row)
            if(! empty($row->lat)) {
                $data['stations'][$row->stationid]['lat'] = $row->lat;
                $data['stations'][$row->stationid]['long'] = $row->long;
                $data['stations'][$row->stationid]['locationtext'] = $row->locationtext;
                $data['stations'][$row->stationid]['highwayid'] = $row->highwayid;
                $data['stations'][$row->stationid]['highwayname'] = $row->highwayname;
                $data['stations'][$row->stationid]['direction'] = $row->direction;
                $data['stationselect'][$row->stationid] = $row->highwayname . ' ' . $row->direction . ' at ' . $row->locationtext;
            }
        $data['stationselected'] = $select;
        return $data;
    }


    //
    // Get Station
    //
    function get($id)
    {
        $db_ref =& $this->db;
        $data = array();

        $db_ref->select("a.stationid, highwayname, direction");
        $db_ref->select("locationtext, milepost");
        $db_ref->select("a.latlon[0] as lat", False);
        $db_ref->select("a.latlon[1] as lon", False);
        $db_ref->select("numberlanes, length_mid");
        $db_ref->from("stations_mileposts a");
        $db_ref->join("highways b", "a.highwayid = b.highwayid");
        $db_ref->join("stations c", "a.stationid = c.stationid");
        $db_ref->where("locationtext NOT LIKE '%DELETED%'");

        if ($id != "all") {
            $db_ref->where("a.stationid", $id);
        }

        $result = $this->db->get();
        $n_rows = $result->num_rows();

        if ($n_rows == 1) {
      $data = $result->row_array();
        }
        else if ($n_rows > 1) {
            $data = $result->result_array();
        }

    return $data;
    }

    //
    // Returns an array of timestamp qty1, qty2
    // Passed in array keys (id, res, start, stop, qty1, qty2, lane, dateformat)
    // KT 6-4-11 They keys should be: (id, res, startdate,
    //         starttime, stopdate, stoptime, qty1, qty2, lane, dateformat)
    // works for 7 standard quantities (speed, volume,
    // occupancy, vmt, vht, traveltime, delay)


  // KT 6-4-11 This is the main function to return loopdata
  // for stations. Have commented out the function below as I believe it is no longer used

    function MultiQty($id, $startdate, $stopdate, $starttime, $endtime, $dow,
            $qtylist, $res, $lane, $grouped) 
    {
        
        $db_ref =& $this->db;
        
        if($grouped == 'no')
          $grouped = False;
        else
          $grouped = True;      

        if($res == '20sec') {
          // 20 sec res uses different tables and must be done
          // separately
          // TODO: how do I throw an error?
        }

        // KT - short-term split start and stop into startdate
        // stopdate starttime stoptime 
        // update usage of start/stop

//         list($startdate, $starttime) = explode(" ", $start);
//         list($stopdate, $stoptime) = explode(" ", $stop);

        $hovpred = $this->portalsql->getHOVPredDetectorSql();

        $aggs = array();
        if($lane == 'all') {
           foreach($qtylist as $qty) {
               if(!$grouped) {
                   $aggs[$qty] = $this->portalsql->getAggregationSql($qty, $res,
                                                     true,
                                                     false,
                                                     false,
                                                     false)
                       . " as " . $qty;
                   
               } else {
                   // grouped
                   $aggs[$qty] = $this->portalsql->getAggregationSql($qty, $res,
                                                     true, false, true, false)
                       . " as " . $qty;
               }
           }
          $lanepred = '';
        } else {
           foreach($qtylist as $qty) {
              $aggs[$qty] = $qty;  
           }
           $lanepred = "lanenumber = $lane";
        }

        $sellist = "";
        if(!$grouped)
            $sellist .= "l.starttime";
        else
            $sellist .= "extract(hour from l.starttime) as hour,
            extract(minute from l.starttime) as min";

        foreach($aggs as $agg) {
            $sellist .= ", $agg";
        }
        
        $query = "SELECT $sellist ";
        $query .= "FROM loopdata_" . $res . "_raw l, detectors d, stations s ";
        $query .= "WHERE l.detectorid = d.detectorid ";
        $query .= "AND d.stationid = s.stationid "; 
       
        // constrain date
        $query .= "AND starttime >= '$startdate' ";
        //if ($start == $stop) {
        $query .= "AND starttime < date '$stopdate' + interval '1 day' ";            
        //} else {
        //  $query .= "AND starttime <= '$stop' ";
        //}

        // add time of day constraint
        $query .= "AND cast(starttime as time) between '$starttime' and '$endtime' ";


        $query .= "AND d.stationid = $id ";

        // query: where extract(dow from starttime) in (2,3,4,5)
        // dow comes in as (1,2,3,4)
        // need to convert (1,2,3,4) to a php array
        $query .= "AND extract(dow from starttime) in ($dow) ";

        $query .= "AND $hovpred ";
        
        if(!empty($lanepred)) {
          $query .= "AND $lanepred";
        }
        
        if($grouped) {
            $query .= "GROUP by hour, min, s.length_mid ";
        } else {
          if(empty($lanepred)) {
            $query .= "GROUP by starttime, s.length_mid ";
          }
        }

        if(!$grouped) {
          $query = $this->portalsql->add_series($query, 'starttime',
                $qtylist, $startdate, $stopdate, $res);
        }
        $result = $this->db->query($query); 

        $data = array();
        foreach($result->result() AS $row) {
          // create array of quantity results

          $resrow = array();
          if($grouped) {
            $resrow["starttime"] = date(("n/j/Y g:i a"), 
                    mktime("$row->hour", "$row->min"));
          } else {
            $resrow["starttime"] = date(("n/j/Y g:i a"), strtotime("$row->starttime"));
          }

          foreach($qtylist as $qty) {
            $resrow[$qty] = $row->$qty;
          }
          $data[] = $resrow;
        }

        return $data;
    
    } 

    //
    // Returns an array of timestamp qty1, qty2
    // Passed in array keys (id, res, start, stop, qty1, qty2, lane, dateformat)
    //
/* KT 6-4-11 don't think this function is used
    function TwoQtyUngroupedSimpleRange($id, $start, $stop, $qty1,
                                             $qty2, $lane, $res, $dateformat) 
    {
        $data = array();
        $db_ref =& $this->db;
        
        // verify output type is xml
        $hovpred = $this->portalsql->getHOVPredDetectorSql();

        if($lane == 'all') {
            $q1 = $this->portalsql->getAggregationSql($qty1, $res,
                                                      true, false, false, false);
            $q2 = $this->portalsql->getAggregationSql($qty2, $res,
                                                      true, false, false, false);
            $lanepred = '';
        } else {
            //if($lane != '1' || $lane != '2' || $lane != '3' || $lane != '4')
            //    trigger_error('Invalid lane value');
            $q1 = $qty1; // TODO: vol vs volume !!!!!!!!
            $q2 = $qty2;
            $lanepred = "lanenumber = $lane";
        }

        $db_ref->select("l.starttime, $q1 as quantity1, $q2 as quantity2");
        $db_ref->from("loopdata_" . $res . "_raw l");
        $db_ref->join("detectors d", "l.detectorid = d.detectorid");
        $db_ref->where("starttime >=", $start);

        if ($start == $stop) {
            $db_ref->where("starttime < date '$stop' + interval '1 day'");            
        } 
        else {
            $db_ref->where("starttime <=", $stop);
        }

        $db_ref->where("d.stationid", $id);
        $db_ref->where($hovpred);

        if(!empty($lanepred)) {
            $db_ref->where($lanepred);
        }

        if(empty($lanepred)) {
            $db_ref->group_by("starttime");
        }

        $db_ref->order_by("starttime");  // groups over lanes cause only one station

        $result = $this->db->get();
        
        foreach($result->result() AS $row) {
                if(empty($row->quantity1)) $row->quantity1 = 0;
                if(empty($row->quantity2)) $row->quantity2 = 0;
                $data[] = array("starttime" => date("n/j/Y g:i a",
                                                    strtotime("$row->starttime")),
                                $qty1 => $row->quantity1,
                                $qty2 => $row->quantity2);
        }

        return $data;
    }  */
    
    //
    
    //
    // Returns an array of "hour, volume, congestion percentage"
    //
    // Passed in array keys (id, start, stop)
    //
    // TODO - combine into MultiQty
    function VolumeCongestion($id, $start, $stop)
    {
        $i = 0;
        $data = array();

        $db_ref =& $this->db;
        
        $db_ref->select("starttime," .
                        "round2((count(*)*1.0/(date '$stop' - date '$start' + 1))*100) as pctcong");
        $db_ref->from("loopdata_1hr_raw_bystation L");
        // TODO - HELP need to see the debug from this query
        //$db_ref->join("ff_speed_and_tt FF", "FF.stationid = L.stationid");
        $db_ref->where("starttime >=", $start);

        if ($start == $stop) {
            $db_ref->where("starttime < date '$stop' + interval '1 day'");            
        } 
        else {
            $db_ref->where("starttime <=", $stop);
        }

        $db_ref->where("stationid", $id);
        $db_ref->where("traveltime > 2.6"); 
        //$db_ref->where("traveltime > FF.traveltime"); 
        $db_ref->group_by("starttime");
        $db_ref->order_by("starttime");

        $congresult = $this->db->get();
        
        $db_ref->select("starttime");
        $db_ref->select("round(avg(volume)) as volume");
        $db_ref->from("loopdata_1hr_raw_bystation");
        $db_ref->where("starttime >=", $start);

        if ($start == $stop) {
            $db_ref->where("starttime < date '$stop' + interval '1 day'");            
        } 
        else {
            $db_ref->where("starttime <=", $stop);
        }

        $db_ref->where("stationid",$id);
        $db_ref->group_by("starttime");
        $db_ref->order_by("starttime");

        $volresult = $this->db->get();
        
        foreach($volresult->result() AS $volrow) {           
            $congrow = $congresult->row($i);

            // verify starttimes are the same for both
            if(!$congrow || ($congrow->starttime > $volrow->starttime)) {
                $data[] = array("starttime" => date("n/j/Y g:i a",
                                                    strtotime("$volrow->starttime")), 
                                "volume" => $volrow->volume,
                                "congestion" => 0);
            }
            else {
                $data[] = array("starttime" => date("n/j/Y g:i a",
                                                    strtotime("$volrow->starttime")), 
                                "volume" => $volrow->volume,
                                "congestion" => $congrow->pctcong);
                if($i >= $congresult->num_rows())
                    $congrow = 0;
                $i++;
            }
        }

        return $data;
    }
  


}
?>
