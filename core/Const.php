<?php

define('BASEPATH', __DIR__ . '/..');

function buildAppSettingsToDefine(){
	require BASEPATH . '/settings.php';
	$appSettings = array(
		'BASEDOMAIN' => $settings['domain'],
		'DEFAULT_ERROR_PAGE' => $settings['e404_path'],
		'DEFAULT_KICK_PAGE' => $settings['unauthorized_path'],
		'DEFAULT_VIEW_ASSETS_URL' => $settings['asset_path'],
		'DEFAULT_VIEW_VENDOR_URL' => $settings['vendor_path']
	);

	foreach(['production_mode', 'db_host', 'db_user', 'db_pass', 'db_name'] as $key){
		$appSettings[strtoupper($key)] = $settings[$key];
	}

	for($i=0; $i<count($settings['user_level']); $i++){
		$appSettings['USER_LEVEL_' . strtoupper($settings['user_level'])] = $i;
	}
}

foreach(buildAppSettingsToDefine() as $key => $value){
	define($key, $value);
}
