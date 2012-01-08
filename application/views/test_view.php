<?php
$maphelp = 'Stations map - Current staion is listed in header information. Map will be updated to highlight selected station.';
$speedvol = 'Speed vs. Volume for so far today for this station.';
$speedcong = 'Volume vs. Congestion for so far today for this station. Congestion information currently unavailable';

$day = mktime(0, 0, 0, date("m"), date("d")+1, date("y"));

echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
?>

<h1> <?php echo $dataset; ?> </h1>
<h1> <?php echo $stationid; ?> </h1>

<script type="text/javascript" src="<?=base_url() . 'static/javascript/twoqty_charts.js'?>"></script>
<script type="text/javascript" src="<?=base_url() . 'static/javascript/maps.js'?>"></script>

<script type="text/javascript">

  var chart;
  jQuery(document).ready(function() {
  
	//attach a jQuery live event to the button
	var msg = '';
	$.getJSON('http://web.cecs.pdx.edu/~limm/invite/index.php/test/myjson2/id/<?php echo $stationid; ?>', function(data) {
		//alert(data); //uncomment this for debug
		//alert (data.item1+" "+data.item2+" "+data.item3); //further debug
		//msg = "<p>item1="+data.item1+" item2="+data.item2+" item3="+data.item3+"</p>";
		
	
		
		data_contents = [{
			name: '54',
			data: [
			  [Date.UTC(2011, 11,  5, 0), 162 ],
			  [Date.UTC(2011, 11,  5, 1), 106 ],
			  [Date.UTC(2011, 11,  5, 2), 87 ],
			  [Date.UTC(2011, 11,  5, 3), 98 ],
			  [Date.UTC(2011, 11,  5, 4), 67 ],
			  [Date.UTC(2011, 11,  5, 5), 89 ],
			  [Date.UTC(2011, 11,  5, 6), 90 ],
			  [Date.UTC(2011, 11,  5, 7), 98 ],
			  [Date.UTC(2011, 11,  5, 8), 99 ]
			]
		  }];
		tmp = [{name:2}];
		alert(tmp[0].name);
		msg = data;
		data_contents = [{name:'Volume for station <?php echo $stationid; ?>', data:msg}];

		chart = new Highcharts.Chart({
		  chart: {
			renderTo: 'container',
			type: 'spline'
		  },
		  title: {
			text: 'Arterial Data at Portland'
		  },
		  subtitle: {
			text: 'An example of station <?php echo $stationid; ?>'  
		  },
		  xAxis: {
			type: 'datetime',
			dateTimeLabelFormats: { // don't display the dummy year
			  month: '%e. %b',
			  year: '%b'
			}
		  },
		  yAxis: {
			title: {
			  text: 'volume'
			},
			min: 0
		  },
		  tooltip: {
			formatter: function() {
				return '<b>'+ this.series.name +'</b><br/>'+
				Highcharts.dateFormat('%e. %b', this.x) +': '+ this.y +' m';
			}
		  },
		  series: data_contents
		});
	});
	
  });
</script>


<div id="container" class="highcharts-container" style="height:410px; margin: 0 2em; clear:both; min-width: 600px">
  </div>