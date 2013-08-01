<?php
	$Lang = $API->get('Lang');
	$Settings = $API->get('Settings');
?>
<div class="widget">
	<h2><?php echo $Lang->get('Google Analytics'); ?></h2>
	<div class="bd">
		<ul class="ga">
			<li>Unique Visitors: <span data-oochart='metric' data-oochart-metric='ga:newVisits' data-oochart-start-date='30d' data-oochart-profile='<?php echo $Settings->get('spicy_analytics_gaid')->settingValue(); ?>'></span></li>
			<li>Page Views: <span data-oochart='metric' data-oochart-metric='ga:pageviews' data-oochart-start-date='30d' data-oochart-profile='<?php echo $Settings->get('spicy_analytics_gaid')->settingValue(); ?>'></span></li>
		</ul>
		<div data-oochart='timeline' data-oochart-start-date='30d' data-oochart-metrics='ga:visits,Visits,ga:pageviews,Page views' data-oochart-profile='<?php echo $Settings->get('spicy_analytics_gaid')->settingValue(); ?>'></div>
	</div>
</div>
<script src="<?php echo PERCH_LOGINPATH.'/addons/apps/spicy_analytics/assets/js/oocharts.js';?>" type="text/javascript"></script>
<script type="text/javascript">
	window.onload = function(){
		oo.setAPIKey("<?php echo $Settings->get('spicy_analytics_ooapi')->settingValue(); ?>");
		oo.setTimelineDefaults({ colors : ['#3498db', '#2ecc71', '#9b59b6', '#e67e22', '#e74c3c'], curveType: 'function' });
		oo.load(function(){
		});
	};
</script>