<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.3.min.js"></script>
		
		<script type="text/javascript">
			//jQuery.noConflict();
		</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/highcharts/highcharts.src.js"></script>
		
		<style type="text/css">
			ul.buttons li {
				font-family: Arial, Verdana, sans-serif;
				font-size: 9pt;
				display: block;
				border: 1px solid gray;
				float: left;
				list-style: none;
				margin: 2px 5px;
				padding: 2px;
				background-color: #EFEAB3;
				-moz-border-radius: 5px;
			}
			ul.buttons li:hover {
				background-color: white;
			}
		</style>
		
		<!-- 2. Add the JavaScript to initialize the chart on document ready -->
		<script type="text/javascript">
			
			
		var chart, chart2;
		$(document).ready(function() {
			d = new Date(1315094400000);
			d2 = new Date(1315098000000);
			//var d = new Date(0, 1, 1, 1, 1, 1);
			/*
			alert('year:' +d.getUTCFullYear());
			alert('month:' + d.getUTCMonth());
			alert('day:' +d.getUTCDay());
			alert('hour:' +d.getUTCHours());
			alert('min:' +d.getUTCMinutes());
			alert('second:' +d.getUTCSeconds());

			alert('year:' +d.getFullYear());
			alert('month:' + d.getMonth());
			alert('day:' +d.getDay());
			alert('hour:' +d.getHours());
			alert('min:' +d.getMinutes());
			alert('second:' +d.getSeconds());
			*/
			//dd = new Date(d1);

			alert('hi');
			
		//window.addEvent('domready', function() {
			chart = new Highcharts.Chart({
				chart: {
					renderTo: 'container',
					plotBorderWidth: 1,
					defaultSeriesType: 'line',
					inverted: false,
					margin: [50, 250, 60, 80],
					zoomType: 'xy',
					borderWidth: 1
				},
				title: {
					text: 'another plot!',
					style: {
						margin: '10px 100px 0 0'}},
				xAxis: {
					type: 'datetime',
					//maxZoom: 14 * 24 * 3600 * 1000,
					minPadding: 0.05,
					maxPadding: 0.05,
					showLastLabel : true
				},
				yAxis: [{ // primary
					allowDecimals: false,				
					title: {text: 'speed'}
					
				}, { // secondary
					id: 'axis-id',
					title: {
						text: 'Volume',
						margin: 80,
						style: {color: '#4572A7'}
					},
					opposite: true
				}],
				tooltip: {
					formatter: function() {
			                return '<b>'+ this.series.name +'</b><br/>' +
							Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +
							'<br/>'+ 
							Highcharts.numberFormat(this.y, 1) +
							'°C';
					}
				},

				plotOptions: {
					series: { // docs + change examples
						allowPointSelect: true,
						showCheckbox: true,
						//cursor: 'pointer',
						events: {
							click: function() {
								//this.update(this.y + 1)
								//this.select();
							},
							checkboxClick: function(event) { // docs
								if (window.console) console.log(event);
							}
						},
						pointStart: Date.UTC(2010, 0, 1, 0, 0, 0),
						pointInterval: 24 * 3600 * 1000,
						point: {
							events: {
								select: function(event) { // docs
									if (window.console) console.log('select', this, event);
								},
								unselect: function(event) { // docs
									if (window.console) console.log(this, event);
								},
								remove: function(event) { // docs
									if (window.console) console.log(this, event); 
									//return false;
								},
								update: function(event) { // docs
									if (window.console) console.log(this, event); 
									//return false;
								}
							}
						}
						
					}
				},
				series: [{"name":"1day","data":[[1315094400000,63],[1315098000000,65],[1315101600000,34],[1315105200000,29],[1315108800000,39],[1315112400000,40],[1315116000000,66],[1315119600000,85],[1315123200000,124],[1315126800000,195],[1315130400000,238],[1315134000000,275],[1315137600000,299],[1315141200000,314],[1315144800000,318],[1315148400000,328],[1315152000000,290],[1315155600000,305],[1315159200000,304],[1315162800000,232],[1315166400000,194],[1315170000000,159],[1315173600000,91],[1315177200000,70]]}]
			});

			//chart2 = chart.clone();
			//chart2.container = $('#container2').get();
			
		});
		/** End ready **/
		
		
		
		function appendPoint(shift) {
			
			var selectedSeries = chart.getSelectedSeries();
			
			if (!selectedSeries.length) alert('No series selected. Use the checkboxes '+
				'next to the legend items to select one or more series.');
			
			jQuery.each(selectedSeries, function(i, series) {
				series.addPoint(series.data[0].y + 2, false, shift);
			});
			
			chart.redraw();
		}
		
		function appendPointDelayed() {
			
			chart.showLoading();
			
			setTimeout(function() {
				appendPoint(true);
				chart.hideLoading();
			}, 2000)
			
		}
		
		var addPointY = 13;
		function addPoint() {
			var series = chart.series[0],
				point = series.data[Math.floor(series.data.length/2)];
			series.addPoint([point.x + 12 * 3600 * 1000, addPointY--]);
		}
		
		function removePoint() {
			var points = chart.getSelectedPoints();
			
			if (!points.length) alert ('No points selected. Click a point to select it. Control click to select multiple points');
			
			jQuery.each(points, function(i, point) {
				point.remove(false);
			});
			
			chart.redraw();
		}
		
		function updatePoint(add) {
			var points = chart.getSelectedPoints();
			
			if (!points.length) alert ('No points selected. Click a point to select it. Control click to select multiple points');
			
			jQuery.each(points, function(i, point) {
				point.update(point.y + add, false);
			});
			chart.redraw();
		}
		
		function removeSeries() {
			var selectedSeries = chart.getSelectedSeries();
			
			if (!selectedSeries.length) alert('No series selected. Use the checkboxes '+
				'next to the legend items to select one or more series.');
				
			jQuery.each(selectedSeries, function(i, series) {
				series.remove(false);
			});
			
			chart.redraw();
		}
		
		function setData() {
			var selectedSeries = chart.getSelectedSeries();
			
			if (!selectedSeries.length) alert('No series selected. Use the checkboxes '+
				'next to the legend items to select one or more series.');
				
			jQuery.each(selectedSeries, function(i, series) {
				series.setData([ 0, 1, 2, 3, 4, 5, 4, 3, 2, 1, 0], false);
			});
			
			chart.redraw();

		}
		

		function addSeries(type, stacking, line) {
			var i = chart.series.length;
			var options = {
				type: type,
				stacking: stacking,
				yAxis: /(bar|column)/.test(type) ? 1 : 0,
				dataLabels: {
					enabled: type == 'pie'
				},
				data: [
					-0.9 + i, 
					0.6 + i, 
					3.5 + i, 
					8.4 + i, 
					13.5 + i, 
					17.0 + i, 
					18.6 + i, 
					17.9 + i, 
					14.3 + i, 
					9.0 + i, 
					3.9 + i, 
					1.0 + i
				]
			};
			
			if (type == 'scatter' && line) {
				options.lineWidth = 1;
			}
			
			chart.addSeries(options, false);
			
			chart.redraw();
		}
		
		useNarrowExtremes = true;
		function setExtremes() {
			var xAxis = chart.series[0].xAxis,
				extremes = xAxis.getExtremes(),
				span = extremes.max - extremes.min,
				center = (extremes.min + extremes.max) / 2,
				newMin = center - span / 4,
				newMax = center + span / 4;
				
			if (useNarrowExtremes) xAxis.setExtremes(newMin, newMax);
			else xAxis.setExtremes();
			
			useNarrowExtremes = !useNarrowExtremes;
			
		}
		
		function get(id) {
			var item = chart.get(id);
			
			if (window.console) {
				console.log(item);
			} 
			else alert (item);
			
			if (item && item.id == 'point-id') item.select(); 

			item = chart.get("temp");
			alert(new Date(item.data[0].x));
			alert(item.data[0].y);
/*
		comment
		alert(item.data[0].x);
		alert(item.data[0].y);
		
		for( v in item.data ){
			alert(v);
		}
		
str='';
for(prop in item)
{
	str+=prop + " value :"+ item[prop]+"\n";
}
alert(str);
*/
		}
		
		function addPlotBand() {
			chart.xAxis[0].addPlotBand({
				from: Date.UTC(2010, 0, 3),
				to: Date.UTC(2010, 0, 4),
				color: 'rgba(0, 255, 255, 0.5)',
				id: 'plotband1'
			});
		}
		
		function removePlotBand() {
			chart.xAxis[0].removePlotBand('plotband1');
		}
		function addPlotLine() {
			chart.yAxis[0].addPlotLine({
				value: 11,
				color: 'rgb(0, 0, 0)',
				width: 3,
				id: 'plotline1'
			});
		}
		function removePlotLine() {
			chart.yAxis[0].removePlotLine('plotline1');
		}
		
		</script>

		
	</head>
	<body>
		
		<div id="wrapper" style="width: 800px; margin: 0 auto;  ">
			<!-- 3. Add the container -->			
			<div id="container" style="height: 400px; width: 800px; margin-bottom: 1em;"></div>
			<div id="container2" style="height: 400px; width: 800px; margin-bottom: 1em;"></div>
			
			
		</div>
		<ul class="buttons">
			
		
			<li><a href="javascript:appendPoint();">Add point to selected series</a></li>
		
			<li><a href="javascript:appendPointDelayed();">Add point with delay</a></li>

		
			<li><a href="javascript:appendPoint(1);">Advance selected series</a></li>
		
			<li><a href="javascript:addPoint();">Add point at X position</a></li>
		
			<li><a href="javascript:removePoint();">Remove selected points</a></li>
		
			<li><a href="javascript:updatePoint(1);">Update point (+1)</a></li>
		
			<li><a href="javascript:updatePoint(-1);">Update point (-1)</a></li>
		
			<li><a href="javascript:removeSeries();">Remove selected series</a></li>

			
			<li><a href="javascript:setData();">Set new data to selected series</a></li>
			
			<li><a href="javascript:setExtremes();">Set x axis extremes</a></li>
			
			<li><a href="javascript:addPlotBand();">Add plot band</a></li>
			
			<li><a href="javascript:removePlotBand('plotband1');">Remove plot band</a></li>
			
			<li><a href="javascript:addPlotLine();">Add plot line</a></li>
			
			<li><a href="javascript:removePlotLine('plotline1');">Remove plot line</a></li>

			
			<li>Add <a href="javascript:addSeries('area');">area</a>,
				<a href="javascript:addSeries('areaspline');">areaspline</a>,
				<a href="javascript:addSeries('bar');">bar</a>,
				<a href="javascript:addSeries('column');">column</a>,
				<a href="javascript:addSeries('column', 'normal');">stacked column</a>,
				<a href="javascript:addSeries('line');">line</a>,
				<a href="javascript:addSeries('pie');">pie</a>,
				<a href="javascript:addSeries('scatter');">scatter</a>,
				<a href="javascript:addSeries('scatter', null, true);">scatter / line</a>,
				<a href="javascript:addSeries('spline');">spline</a>.
				
			<li>Get item by id: 
				<a href="javascript:get('axis-id')">axis</a>, 
				<a href="javascript:get('series-id')">series</a>, 
				<a href="javascript:get('point-id')">point</a>.</li>

			<!-- li>Click and drag a point to change its value.</li -->
			<li>Click anywhere in the plot area to add a point to the first series.</li>
			
		</ul>
	</body>
</html>
