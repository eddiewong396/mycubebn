<?php
// Site
$_['site_base']        = HTTP_SERVER;
$_['site_ssl']         = HTTPS_SERVER;

// Url
$_['url_autostart']    = false;

// Database
$_['db_autostart']     = true;
$_['db_type']              = 'postgre'; // mpdo, mssql, mysql, mysqli or postgre
$_['db_hostname']          = 'ec2-54-235-246-220.compute-1.amazonaws.com';
$_['db_username']          = 'hjdwomoegvsuuk';
$_['db_password']          = 'jjoVyNmio8SktG0GqFKebv_xdN';
$_['db_database']          = 'dakpdgh828jlp5';
$_['db_port']              = 5432;

// Session
$_['session_autostart'] = false;

// Autoload Libraries
$_['library_autoload'] = array(
	'openbay'
);

// Actions
$_['action_pre_action'] = array(
	'startup/session',
	'startup/startup',
	'startup/error',
	'startup/event',
	'startup/maintenance',
	'startup/seo_url'
);

// Action Events
$_['action_event'] = array(
	'view/*/before'                         => 'event/theme',
	
	'model/extension/analytics/*/before'    => 'event/compatibility/beforeModel',
	'model/extension/captcha/*/before'      => 'event/compatibility/beforeModel',
	'model/extension/credit_card/*/before'  => 'event/compatibility/beforeModel',
	'model/extension/feed/*/before'         => 'event/compatibility/beforeModel',
	'model/extension/fraud/*/before'        => 'event/compatibility/beforeModel',
	'model/extension/module/*/before'       => 'event/compatibility/beforeModel',
	'model/extension/payment/*/before'      => 'event/compatibility/beforeModel',
	'model/extension/recurring/*/before'    => 'event/compatibility/beforeModel',
	'model/extension/shipping/*/before'     => 'event/compatibility/beforeModel',
	'model/extension/theme/*/before'        => 'event/compatibility/beforeModel',
	'model/extension/total/*/before'        => 'event/compatibility/beforeModel',
	 	
	'model/analytics/*/after'               => 'event/compatibility/afterModel',
	'model/captcha/*/after'                 => 'event/compatibility/afterModel',
	'model/credit_card/*/after'             => 'event/compatibility/afterModel',
	'model/feed/*/after'                    => 'event/compatibility/afterModel',
	'model/fraud/*/after'                   => 'event/compatibility/afterModel',
	'model/module/*/after'                  => 'event/compatibility/afterModel',
	'model/payment/*/after'                 => 'event/compatibility/afterModel',
	'model/recurring/*/after'               => 'event/compatibility/afterModel',
	'model/shipping/*/after'                => 'event/compatibility/afterModel',
	'model/theme/*/after'                   => 'event/compatibility/afterModel',
	'model/total/*/after'                   => 'event/compatibility/afterModel',
	
	//'language/extension/*/before'         => 'event/translation',
	'language/extension/analytics/*/before' => 'event/compatibility/language',
	'language/extension/captcha/*/before'   => 'event/compatibility/language',
	'language/extension/feed/*/before'      => 'event/compatibility/language',
	'language/extension/fraud/*/before'     => 'event/compatibility/language',
	'language/extension/module/*/before'    => 'event/compatibility/language',
	'language/extension/payment/*/before'   => 'event/compatibility/language',
	'language/extension/recurring/*/before' => 'event/compatibility/language',
	'language/extension/shipping/*/before'  => 'event/compatibility/language',
	'language/extension/theme/*/before'     => 'event/compatibility/language',
	'language/extension/total/*/before'     => 'event/compatibility/language'	
	
	//'controller/*/before'                 => 'event/debug/before',
	//'controller/*/after'                  => 'event/debug/after'
);