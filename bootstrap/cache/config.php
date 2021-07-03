<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'developer',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'Asia/Shanghai',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:ULE1QEW3VNP2D4slA8LvT99rGo6ZGcmMkT0zyXEhxwU=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      1 => 'Illuminate\\Bus\\BusServiceProvider',
      2 => 'Illuminate\\Cache\\CacheServiceProvider',
      3 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      4 => 'Illuminate\\Cookie\\CookieServiceProvider',
      5 => 'Illuminate\\Database\\DatabaseServiceProvider',
      6 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      7 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      8 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      9 => 'Illuminate\\Hashing\\HashServiceProvider',
      10 => 'Illuminate\\Mail\\MailServiceProvider',
      11 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      12 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      13 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      14 => 'Illuminate\\Queue\\QueueServiceProvider',
      15 => 'Illuminate\\Redis\\RedisServiceProvider',
      16 => 'Illuminate\\Session\\SessionServiceProvider',
      17 => 'Illuminate\\Translation\\TranslationServiceProvider',
      18 => 'Illuminate\\Validation\\ValidationServiceProvider',
      19 => 'Illuminate\\View\\ViewServiceProvider',
      20 => 'App\\Providers\\AppServiceProvider',
      21 => 'App\\Providers\\BroadcastServiceProvider',
      22 => 'App\\Providers\\EventServiceProvider',
      23 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
    'data_access_open' => true,
    'server_name' => 'sdk-middle',
    'gateway_name' => 'ssp-monitor',
    'gateway_register_uri' => '/api/requestUri/submit',
    'request_stat_start' => true,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'qsm',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'qsm',
        'username' => 'root',
        'password' => 'cjh',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'qsm',
        'username' => 'root',
        'password' => 'cjh',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'qsm',
        'username' => 'root',
        'password' => 'cjh',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'predis',
        'prefix' => '{laravel}',
      ),
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => '',
        'port' => '6379',
        'database' => '0',
        'read_write_timeout' => '3',
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => '',
        'port' => '6379',
        'database' => '0',
        'read_write_timeout' => '3',
      ),
      'redis-session' => 
      array (
        'host' => '127.0.0.1',
        'password' => '',
        'port' => '6379',
        'database' => '0',
      ),
    ),
    'fetch' => 2,
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 500,
      'pre_calculate_formulas' => false,
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
      'csv' => 
      array (
        'delimiter' => ',',
        'enclosure' => '"',
        'escape_character' => '\\',
        'contiguous' => false,
        'input_encoding' => 'UTF-8',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'transactions' => 
    array (
      'handler' => 'db',
    ),
    'temporary_files' => 
    array (
      'local_path' => 'C:\\Users\\86182\\AppData\\Local\\Temp',
      'remote_disk' => NULL,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'sql' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\works\\phpStudy\\PHPTutorial\\WWW\\qs-manager\\storage\\logs/sql.log',
        'level' => 'debug',
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\works\\phpStudy\\PHPTutorial\\WWW\\qs-manager\\storage\\logs/laravel.log',
        'level' => 'error',
      ),
      'task' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\works\\phpStudy\\PHPTutorial\\WWW\\qs-manager\\storage\\logs/laravel_task.log',
        'level' => 'error',
      ),
      'cmd' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\works\\phpStudy\\PHPTutorial\\WWW\\qs-manager\\storage\\logs/laravel_cmd.log',
        'level' => 'error',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'D:\\works\\phpStudy\\PHPTutorial\\WWW\\qs-manager\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'trace_log' => 
  array (
    'server_trace_id' => NULL,
    'sys_app_id' => 0,
    'operate_uid' => NULL,
    'operate_type' => '',
    'operate_name' => NULL,
    'start_ms_stamp' => 0,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'D:\\works\\phpStudy\\PHPTutorial\\WWW\\qs-manager\\resources\\views',
    ),
    'compiled' => false,
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
    ),
  ),
);
