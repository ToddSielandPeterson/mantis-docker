<?php
$g_hostname = getenv('DB_HOST');
$g_db_username = getenv('DB_USERNAME)';
$g_db_password = getenv('DB_PASSWORD');
$g_database_name = getenv('DB_NAME');

$g_webmaster_email = 'mantisbt@cursor.education';
$g_administrator_email = 'mantisbt@cursor.education';
$g_from_email = 'mantisbt@cursor.education';
$g_return_path_email = 'mantisbt@cursor.education';

require_once 'config_inc_smtp.php';

$g_phpMailer_method = PHPMAILER_METHOD_SMTP;
$g_smtp_connection_mode = 'tls';
$g_smtp_port = 587;
$g_smtp_host = getenv('SMTP_HOST');

$g_log_level = LOG_EMAIL | LOG_EMAIL_RECIPIENT | LOG_FILTERING | LOG_AJAX;
$g_log_destination = 'file:/shared/logs/mantisbt.log';
?>