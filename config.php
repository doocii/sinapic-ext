<?php
/**
 * config it
 */
function get_config($key = null){
	
	$config = [
		'VERSION' => '1.1.4',
		'DES_URL' => 'http://inn-studio.com/sinapic-ext',
		'HOME_URL' => 'http://spe.inn-studio.com',
		//'HOME_URL' => 'http://localhost/sinapic-ext',
		'AKEY' => '4103217221',
		'SKEY' => '4b4055df319fcdbdf3b9a69fc336b639',
		
	];
	$config['CB_URL'] = $config['HOME_URL'] . '/action.php?action=set-auth';





	
	if($key)
		return isset($config[$key]) ? $config[$key] : false;
	return $config;
	
}
