<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'time' => 
  array (
    'diff.ago.year' => '1 year ago|%count% years ago',
    'diff.ago.month' => '1 month ago|%count% months ago',
    'diff.ago.day' => '1 day ago|%count% days ago',
    'diff.ago.hour' => '1 hour ago|%count% hours ago',
    'diff.ago.minute' => '1 minute ago|%count% minutes ago',
    'diff.ago.second' => '1 second ago|%count% seconds ago',
    'diff.empty' => 'now',
    'diff.in.second' => 'in 1 second|in %count% seconds',
    'diff.in.hour' => 'in 1 hour|in %count% hours',
    'diff.in.minute' => 'in 1 minute|in %count% minutes',
    'diff.in.day' => 'in 1 day|in %count% days',
    'diff.in.month' => 'in 1 month|in %count% months',
    'diff.in.year' => 'in 1 year|in %count% years',
  ),
  'SchebTwoFactorBundle' => 
  array (
    'auth_code' => 'Authentication Code',
    'choose_provider' => 'Switch authentication method',
    'login' => 'Login',
    'code_invalid' => 'The verification code is not valid.',
    'trusted' => 'I\'m on a trusted computer',
    'cancel' => 'Cancel',
  ),
  'maintenance' => 
  array (
    'lexik_maintenance.success_unlock' => 'Server is online.',
    'lexik_maintenance.not_success_unlock' => 'Impossible to do this action.',
    'lexik_maintenance.not_success_lock' => 'Server is already locking.',
    'lexik_maintenance.success_lock_database' => 'Server is under maintenance with driver database.',
    'lexik_maintenance.success_lock_file' => 'Server is under maintenance with driver file.',
    'lexik_maintenance.success_lock_memc' => 'Server is under maintenance with memcache.',
    'lexik_maintenance.success_lock_shm' => 'Server is under maintenance with shm.',
  ),
  'ContaoInstallationBundle' => 
  array (
    'install_tool' => 'Contao install tool',
    'an_error_occurred' => 'An error occurred',
    'locked_headline' => 'The install tool has been locked!',
    'locked_explanation' => 'For security reasons, the install tool has been locked after a wrong password had been entered more than three times in a row. To unlock it, run <code>vendor/bin/contao-console contao:install:unlock</code> on the command line.',
    'file_permissions_headline' => 'PHP is not allowed to write files!',
    'file_permissions_explanation' => 'Your server does not support file access via PHP; most likely PHP runs as Apache module under a different user. Please contact your server administrator and ask him to fix the problem.',
    'file_permissions_warning' => '<strong>Do not attempt to fix this yourself by making files and folders writable for everyone!</strong>',
    'accept_license' => 'Accept license',
    'set_password' => 'Install tool password',
    'set_password_hint' => 'Please enter a password to prevent unauthorized access.',
    'password' => 'Password',
    'confirmation' => 'Confirmation',
    'save_password' => 'Save password',
    'password_confirmation_mismatch' => 'The password does not match the confirmation!',
    'password_too_short' => 'The password should be at least %d characters long!',
    'login' => 'Login',
    'login_explanation' => 'Please enter the install tool password. The install tool password is not the same as the Contao back end password.',
    'allow_cookies' => 'You have to allow cookies to use Contao.',
    'invalid_password' => 'Invalid password!',
    'database_connection' => 'Database connection',
    'database_connected' => 'Database connection established.',
    'database_dot_in_dbname' => 'The database name must not contain dots!',
    'database_could_not_connect' => 'Could not connect to the database!',
    'database_connection_explain' => 'Please enter your database connection parameters.',
    'database_host' => 'Host',
    'database_port' => 'Port number',
    'database_user' => 'Username',
    'database_password' => 'Password',
    'database_name' => 'Database name',
    'save_settings' => 'Save settings',
    'update_tables' => 'Update the database',
    'update_tables_explain' => 'Please note that the update assistant only handles tables starting with <code>tl_</code>.',
    'update_tables_confirm' => 'The database is up to date.',
    'update_save' => 'Update database',
    'CREATE' => 'Create tables',
    'ALTER_TABLE' => 'Change tables',
    'ALTER_ADD' => 'Add columns',
    'ALTER_CHANGE' => 'Change columns',
    'ALTER_DROP' => 'Drop columns',
    'DROP' => 'Drop tables',
    'select_all' => 'Select all',
    'template_import' => 'Import a template',
    'template_import_explain' => 'Here you can import an <code>.sql</code> file from the <code>templates</code> directory. Any existing data will be deleted! If you only want to import a theme, please use the theme manager in the Contao back end instead.',
    'import_exception' => 'The import failed! Is the database up to date and is the template file compatible with your Contao version?',
    'import_empty_source' => 'Please choose a template file!',
    'import_data_will_be_deleted' => 'Any existing data will be deleted!',
    'imported_on' => 'Template imported on %s.',
    'templates' => 'Templates',
    'do_not_truncate' => 'Do not truncate the tables',
    'import_confirm' => 'Any existing data will be deleted! Do you really want to continue?',
    'template_save' => 'Import template',
    'admin_create' => 'Create an admin user',
    'admin_create_explain' => 'Here you can create an admin user to log into the Contao back end.',
    'admin_confirm' => 'An admin user has been created.',
    'admin_username' => 'Username',
    'admin_name' => 'Name',
    'admin_email' => 'E-mail',
    'admin_save' => 'Create admin user',
    'admin_error_extnd' => 'For security reasons you can not use the following characters here: #<>()\\=',
    'admin_error_no_space' => 'The username must not contain any whitespace characters!',
    'admin_error_email' => 'Please enter a valid e-mail address!',
    'admin_error_password_match' => 'The passwords did not match!',
    'admin_error_password_user' => 'Your username and password must not be the same!',
    'admin_error' => 'Please fill in all fields to create an admin user!',
    'congratulations' => 'Congratulations!',
    'congratulations_explain' => 'You have successfully installed Contao.',
    'installation_complete' => 'Installation complete',
    'installation_complete_explain' => 'Now please go to the Contao back end and check the system settings.',
    'back_end' => 'Contao back end',
    'old_database' => 'The database is too old!',
    'old_database_explanation' => 'You need at least Contao 3.2 to upgrade to Contao 4.',
    'console_explanation' => 'A post installation task could not be completed!',
    'duplicate_subscriptions' => 'Duplicate newsletter subscriptions found:',
    'duplicates_purged' => 'The duplicate entries have been purged automatically. A backup of the original subscriptions has been stored in <code>tl_newsletter_recipients_backup</code>.',
    'unsupported_version' => 'Your database version is not supported!',
    'unsupported_version_explain' => 'Contao requires at least MySQL 5.1.0 but you have version %s. Please update your database version.',
    'unsupported_collation' => 'The configured collation is not supported!',
    'unsupported_collation_explain' => 'The configured collation <code>%s</code> is not available on your server. Please install it (recommended) or configure a different character set and collation in the <code>config/config.yml</code> file.',
    'unsupported_engine' => 'The configured database engine is not supported!',
    'unsupported_engine_explain' => 'The configured database engine <code>%s</code> is not available on your server. Please install it (recommended) or configure a different database engine in the <code>config/config.yml</code> file.',
    'engine_mismatch' => 'Invalid combination of database engine and collation!',
    'engine_mismatch_explain' => 'The configured database engine <code>%s</code> does not support utf8mb4. Please use InnoDB instead (recommended) or configure a different character set and collation in the <code>config/config.yml</code> file.',
    'innodb_large_prefix' => 'The innodb_large_prefix option is not enabled!',
    'innodb_large_prefix_explain' => 'The <code>innodb_large_prefix</code> option is not enabled on your server. Please enable it (recommended) or configure a different character set and collation in the <code>config/config.yml</code> file.',
    'innodb_additional' => 'InnoDB is not configured properly!',
    'innodb_additional_explain' => 'Using large prefixes in MySQL versions prior to 5.7.7 and MariaDB versions prior to 10.2 requires the Barracuda file format and the <code>innodb_file_per_table</code> option.',
    'misconfigured_database_url_explain' => 'Could not connect to the database using the connection URL found in the <code>DATABASE_URL</code> environment variable.',
  ),
  'ContaoManagerBundle' => 
  array (
    'debug_mode' => 'Debug mode',
  ),
));


return $catalogue;
