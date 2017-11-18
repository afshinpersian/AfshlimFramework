<?php

$APPROOT = __APP_ROOT__;
$env = new \Core\Helpers\Env();


defined('DS') || define('DS', DIRECTORY_SEPARATOR);
$config = [
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false,
        'determineRouteBeforeAppMiddleware' => true,
        'debug'=>true,
        'logger' => [
            'name' => 'afshFramework',
            'level' => Monolog\Logger::DEBUG,
            'path' => __DIR__ . '/../logs/app.log',
        ],
        'db' => [
            'driver'    => $env($APPROOT,'DB_DRIVER', 'mysql'),
            'host'      => $env($APPROOT,'DB_HOST', 'localhost'),
            'database'  => $env($APPROOT,'DB_NAME', 'cafesaba'),
            'username'  => $env($APPROOT,'DB_USERNAME', 'root'),
            'password'  => $env($APPROOT,'DB_PASS', 'root'),
            'charset'   => $env($APPROOT,'DB_CHARSET', 'utf8'),
            'collation' => $env($APPROOT,'DB_COLLATION', 'utf8_unicode_ci'),
            'prefix'    => $env($APPROOT,'DB_PREFIX', ''),
            'port'      => $env($APPROOT,'DB_PORT', 3306),
        ],
        'view' => [
            'path' 	 => '../app/View',
        ],
        // Renderer settings
        'view' => [
            'blade_template_path' => '../app/View/', // String or array of multiple paths
            'blade_cache_path'    => '../app/View/cache', // Mandatory by default, though could probably turn caching off for development
            'template'    => 'blade', // template name
        ],

        /* Tracy debuger*/
        'tracy' => [
            'showPhpInfoPanel' => 1,
            'showSlimRouterPanel' => 1,
            'showSlimEnvironmentPanel' => 1,
            'showSlimRequestPanel' => 1,
            'showSlimResponsePanel' => 1,
            'showSlimContainer' =>1 ,
            'showEloquentORMPanel' => 1,
            'showTwigPanel' => 0,
            'showIdiormPanel' => 0,// > 0 mean you enable logging
            // but show or not panel you decide in browser in panel selector
            'showDoctrinePanel' => 'em',// here also enable logging and you must enter your Doctrine container name
            // and also as above show or not panel you decide in browser in panel selector
            'showProfilerPanel' => 0,
            'showVendorVersionsPanel' => 0,
            'showXDebugHelper' => 0,
            'showIncludedFiles' => 0,
            'showConsolePanel' => 0,
            'configs' => [
                // XDebugger IDE key
                'XDebugHelperIDEKey' => 'PHPSTORM',
                // Disable login (don't ask for credentials, be careful) values( 1 || 0 )
                'ConsoleNoLogin' => 0,
                // Multi-user credentials values( ['user1' => 'password1', 'user2' => 'password2'] )
                'ConsoleAccounts' => [
                    'dev' => '34c6fceca75e456f25e7e99531e2425c6c1de443'// = sha1('dev')
                ],
                // Password hash algorithm (password must be hashed) values('md5', 'sha256' ...)
                'ConsoleHashAlgorithm' => 'sha1',
                // Home directory (multi-user mode supported) values ( var || array )
                // '' || '/tmp' || ['user1' => '/home/user1', 'user2' => '/home/user2']
                'ConsoleHomeDirectory' => __APP_ROOT__,
                // terminal.js full URI
                'ConsoleTerminalJs' => '/assets/js/jquery.terminal.min.js',
                // terminal.css full URI
                'ConsoleTerminalCss' => '/assets/css/jquery.terminal.min.css',
                'ProfilerPanel' => [
                    // Memory usage 'primaryValue' set as Profiler::enable() or Profiler::enable(1)
//                    'primaryValue' =>                   'effective',    // or 'absolute'
                    'show' => [
                        'memoryUsageChart' => 1, // or false
                        'shortProfiles' => true, // or false
                        'timeLines' => true // or false
                    ]
                ]
            ]
        ]
    ],

];

return $config;
?>
