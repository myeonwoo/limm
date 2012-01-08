<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>
		
		
		<!-- 1. Add these JavaScript inclusions in the head of your page -->
		<!-- script type="text/javascript" src="/js/mootools.js"></script -->
		<script type="text/javascript" src="<?=base_url(); ?>js/main/jquery-1.3.2.min.js"></script>

		<script type="text/javascript">
			//jQuery.noConflict();
		</script>
		<script type="text/javascript" src="<?=base_url(); ?>js/highchart/highcharts.src.js"></script>
		<!--[if IE]>
			<script type="text/javascript" src="../js/excanvas.compiled.js"></script>
		<![endif]-->
		
		<!--script type='text/javascript' 
        src='http://getfirebug.com/releases/lite/1.2/firebug-lite-compressed.js'></script>
		<script type="text/javascript">
			firebug.env.height = 200;
		</script-->
		
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
			
			
		var chart;
		var data1 = [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4];
		function check(name){
				if(name=='main'){
	    			alert(chart.series[0].data.length);
	    			item = chart.get('qty1');
	    			alert(item.data.length);
	    	}
				else if(name=='second'){
					alert(chart.series[0].data.length);
	    			item = chart.get('qty2');
	    			alert(item.data.length);
    		}
    }
		$(document).ready(function() {
		//window.addEvent('domready', function() {
			chart = new Highcharts.Chart({
				chart: {
					renderTo: 'container',
					plotBorderWidth: 1,
					defaultSeriesType: 'line',
					inverted: false,
					margin: [50, 250, 60, 80],
					events: {
						click: function(e) { // docs
							// Add a point to the first series
							var x = e.xAxis[0].value,
								series = chart.series[0],
								pointInterval = series.options.pointInterval,
								i = 0;
								
							if (window.console) console.log(
								Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', e.xAxis[0].value), 
								e.yAxis[0].value
							);
							
							// Get the nearest x value in accordance with pointInterval
							x = Math.round(x / pointInterval) * pointInterval; 
							
							
							// get axis index
							for (i; i < e.yAxis.length; i++) { 
								if (e.yAxis[i].axis == series.yAxis) {
									break;
								}
							}
							
							// Add it
							series.addPoint([x, e.yAxis[i].value]);
						},
						addSeries: function(e) {
							if (window.console && window.console.dir) console.dir(e);
						}
					},
					zoomType: 'xy',
					borderWidth: 1
				},
				title: {
					text: 'This is a prerelease version of Highcharts - no guarantees!',
					style: {
						margin: '10px 100px 0 0' // center it
					}
				},
				xAxis: {
					//categories: Highcharts.setOptions().lang.months,
					events: {
						setExtremes: function(event) {
							//console.log('setExtremes', event.min, event.min);
						}
					},
					title: {
						text: 'Month'
					},
					type: 'datetime',
					//maxZoom: 14 * 24 * 3600 * 1000,
					minPadding: 0.05,
					maxPadding: 0.05,
					showLastLabel : true
				},
				yAxis: [{ // primary
					allowDecimals: false,				
					title: {
						text: 'Temperature (�C)'
					}
					
				}, { // secondary
					id: 'axis-id',
					title: {
						text: 'Rainfall',
						margin: 80,
						style: {
							color: '#4572A7'
						}
					},
					labels: {
						formatter: function() {
							return this.value +' mm';
						},
						style: {
							color: '#4572A7'
						}
					},
					opposite: true
				}],
				tooltip: {
					formatter: function() {
			                return '<b>'+ this.series.name +'</b><br/>' +
							Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +
							'<br/>'+ 
							Highcharts.numberFormat(this.y, 1) +
							'�C';
					}
				},
				legend: {
					layout: 'vertical',
					borderWidth: 1,
					shadow: false,
					style: {
						left: 'auto',
						bottom: 'auto',
						right: '10px',
						top: '100px'
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
				series: [{
					name: 'Rainfall',
					id: 'qty1',
 					data: data1,
					type: 'column',
					stacking: 'normal',
					yAxis: 1
				}, {
					name: 'Temperature',
					id: 'qty2',
					data: [3.9, 4.2, 5.7, { id: 'point-id', y: 8.5 }, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8],
					selected: true
				}]
			});
			
			
		});
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
			
			
		</div>
		
		<button id="discrete-button2" onclick="javascript:check('main');">check main Chart</button>
	<button id="discrete-button2" onclick="javascript:check('second');">check 2nd chart</button>
		
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
