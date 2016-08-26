<?php
// Site
$_['site_base']            = '';
$_['site_ssl']             = false;

// Url
$_['url_autostart']        = true;

// Language
$_['language_default']     = 'en-gb';
$_['language_autoload']    = array('en-gb');

// Database
$_['db_autostart']         = false;
$_['db_type']              = 'postgre'; // mpdo, mssql, mysql, mysqli or postgre
$_['db_hostname']          = 'ec2-54-235-246-220.compute-1.amazonaws.com';
$_['db_username']          = 'hjdwomoegvsuuk';
$_['db_password']          = 'jjoVyNmio8SktG0GqFKebv_xdN';
$_['db_database']          = 'dakpdgh828jlp5';
$_['db_port']              = 5432;

// Mail
$_['mail_protocol']        = 'mail'; // mail or smtp
$_['mail_from']            = ''; // Your E-Mail
$_['mail_sender']          = ''; // Your name or company name
$_['mail_reply_to']        = ''; // Reply to E-Mail
$_['mail_smtp_hostname']   = '';
$_['mail_smtp_username']   = '';
$_['mail_smtp_password']   = '';
$_['mail_smtp_port']       = 25;
$_['mail_smtp_timeout']    = 5;
$_['mail_verp']            = false;
$_['mail_parameter']       = '';

// Cache
$_['cache_type']           = 'file'; // apc, file or mem
$_['cache_expire']         = 3600;

// Session
$_['session_autostart']    = true;
$_['session_name']         = 'PHPSESSID';

// Template
$_['template_type']        = 'php';

// Error
$_['config_error_display'] = true;
$_['config_error_log']     = true;
$_['config_error_filename'] = 'error.log';

// Reponse
$_['response_header']      = array('Content-Type: text/html; charset=utf-8');
$_['response_compression'] = 0;

// Autoload Configs
$_['config_autoload']      = array();

// Autoload Libraries
$_['library_autoload']     = array();

// Autoload Libraries
$_['model_autoload']       = array();

// Actions
$_['action_default']       = 'common/home';
$_['action_router']        = 'startup/router';
$_['action_error']         = 'error/not_found';
$_['action_pre_action']    = array();
$_['action_event']         = array();
