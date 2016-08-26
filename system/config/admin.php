<?php
// Site
$_['site_base']         = HTTP_SERVER;
$_['site_ssl']          = HTTPS_SERVER;

// Database
$_['db_autostart']      = true;
$_['db_type']              = 'postgre'; // mpdo, mssql, mysql, mysqli or postgre
$_['db_hostname']          = 'ec2-54-235-246-220.compute-1.amazonaws.com';
$_['db_username']          = 'hjdwomoegvsuuk';
$_['db_password']          = 'jjoVyNmio8SktG0GqFKebv_xdN';
$_['db_database']          = 'dakpdgh828jlp5';
$_['db_port']              = 5432;

// Session
$_['session_autostart'] = true;

// Actions
$_['action_pre_action'] = array(
	'startup/startup',
	'startup/error',
	'startup/event',
	'startup/sass',
	'startup/login',
	'startup/permission'
);

// Actions
$_['action_default'] = 'common/dashboard';

// Action Events
$_['action_event'] = array(
    'view/*/before'                           => 'event/theme',
	'controller/extension/analytics/*/before' => 'event/compatibility/controller',
	'controller/extension/captcha/*/before'   => 'event/compatibility/controller',
	'controller/extension/feed/*/before'      => 'event/compatibility/controller',
	'controller/extension/fraud/*/before'     => 'event/compatibility/controller',
	'controller/extension/module/*/before'    => 'event/compatibility/controller',
	'controller/extension/payment/*/before'   => 'event/compatibility/controller',
	'controller/extension/recurring/*/before' => 'event/compatibility/controller',
	'controller/extension/shipping/*/before'  => 'event/compatibility/controller',
	'controller/extension/theme/*/before'     => 'event/compatibility/controller',
	'controller/extension/total/*/before'     => 'event/compatibility/controller',
	'view/analytics/*/before'                 => 'event/compatibility/view',
	'view/captcha/*/before'                   => 'event/compatibility/view',
	'view/feed/*/before'                      => 'event/compatibility/view',
	'view/fraud/*/before'                     => 'event/compatibility/view',
	'view/module/*/before'                    => 'event/compatibility/view',
	'view/payment/*/before'                   => 'event/compatibility/view',
	'view/recurring/*/before'                 => 'event/compatibility/view',
	'view/shipping/*/before'                  => 'event/compatibility/view',
	'view/theme/*/before'                     => 'event/compatibility/view',
	'view/total/*/before'                     => 'event/compatibility/view',
	'language/extension/analytics/*/before'   => 'event/compatibility/language',
	'language/extension/captcha/*/before'     => 'event/compatibility/language',
	'language/extension/feed/*/before'        => 'event/compatibility/language',
	'language/extension/fraud/*/before'       => 'event/compatibility/language',
	'language/extension/module/*/before'      => 'event/compatibility/language',
	'language/extension/payment/*/before'     => 'event/compatibility/language',
	'language/extension/recurring/*/before'   => 'event/compatibility/language',
	'language/extension/shipping/*/before'    => 'event/compatibility/language',
	'language/extension/theme/*/before'       => 'event/compatibility/language',
	'language/extension/total/*/before'       => 'event/compatibility/language'
);
