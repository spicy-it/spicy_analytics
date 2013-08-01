<?php

    # Side panel
	echo $HTML->side_panel_start();

	echo $HTML->para('This page gives you an overview of your Google Analytics data.');
	
	echo $HTML->side_panel_end();
	
	# Main panel
	echo $HTML->main_panel_start();
	
	include('_subnav.php');
	
	# Title panel
    echo $HTML->heading1('Google Analytics data');
	
?>

	<div id="dashboard" class="dash ui-sortable">
	
		<div class="widget">
			<h2><?php echo $Lang->get('Visitors'); ?></h2>
			<div class="bd">
				<ul class="ga">
					<li>Unique Visitors: <span data-oochart='metric' data-oochart-metric='ga:newVisits' data-oochart-start-date='30d' data-oochart-profile='<?php echo $Settings->get('spicy_analytics_gaid')->settingValue(); ?>'></span></li>
					<li>Page Views: <span data-oochart='metric' data-oochart-metric='ga:pageviews' data-oochart-start-date='30d' data-oochart-profile='<?php echo $Settings->get('spicy_analytics_gaid')->settingValue(); ?>'></span></li>
				</ul>
				<div data-oochart='timeline' data-oochart-start-date='30d' data-oochart-metrics='ga:visits,Visits,ga:pageviews,Page views' data-oochart-profile='<?php echo $Settings->get('spicy_analytics_gaid')->settingValue(); ?>'></div>
			</div>
		</div>
		
		<div class="widget">
			<h2><?php echo $Lang->get('Visitor information'); ?></h2>
			<div class="bd">
				<div class="sa_left">
					<h3>New vs Returning visitors</h3>
					<div data-oochart='pie' data-oochart-start-date='30d' data-oochart-metric='ga:visits,Visits' data-oochart-dimension='ga:visitorType' data-oochart-profile='<?php echo $Settings->get('spicy_analytics_gaid')->settingValue(); ?>'></div>
				</div>
				<div class="sa_right">
					<h3>Traffic sources</h3>
					<div data-oochart='pie' data-oochart-start-date='30d' data-oochart-metric='ga:visits,Visits' data-oochart-dimension='ga:source' data-oochart-profile='<?php echo $Settings->get('spicy_analytics_gaid')->settingValue(); ?>'></div>
				</div>
			</div>
		</div>
		
		<div class="widget">
			<h2><?php echo $Lang->get('Top content'); ?></h2>
			<div data-oochart='table' data-oochart-start-date='30d' data-oochart-metrics='ga:uniquePageviews,Page views' data-oochart-dimensions='ga:pagePath,Page' data-oochart-profile='<?php echo $Settings->get('spicy_analytics_gaid')->settingValue(); ?>'></div>
		</div>
		
		<div class="widget">
			<h2><?php echo $Lang->get('Search keywords'); ?></h2>
			<div data-oochart='table' data-oochart-start-date='30d' data-oochart-metrics='ga:visits,Visits' data-oochart-dimensions='ga:keyword,Keyword' data-oochart-profile='<?php echo $Settings->get('spicy_analytics_gaid')->settingValue(); ?>'></div>
		</div>
		
	</div>
	
	<script src="<?php echo PERCH_LOGINPATH.'/addons/apps/spicy_analytics/assets/js/oocharts.js';?>" type="text/javascript"></script>
	<script type="text/javascript">
		window.onload = function(){
			oo.setAPIKey("<?php echo $Settings->get('spicy_analytics_ooapi')->settingValue(); ?>");
			oo.setTableDefaults({
				cssClassNames: {
					headerRow: 'sa_thead',
					tableRow: 'sa_',
					oddTableRow: 'sa_',
					selectedTableRow: 'sa_',
					hoverTableRow: 'sa_',
					headerCell: 'sa_',
					tableCell: 'sa_',
					rowNumberCell: 'sa_'
				},
				sortColumn: 1, sortAscending: false
			});
			oo.setTimelineDefaults({ colors : ['#3498db', '#2ecc71', '#9b59b6', '#e67e22', '#e74c3c'], curveType: 'function' });
			oo.setPieDefaults({ colors : ['#3498db', '#2ecc71', '#9b59b6', '#e67e22', '#e74c3c'] });
			oo.load(function(){
		
			});
		};
	</script>
	
<?php	
	echo $HTML->main_panel_end();
?>