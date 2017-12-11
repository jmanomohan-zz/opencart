<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8888/upload/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:8888/upload/');

// DIR
define('DIR_APPLICATION', '/Users/JIM/Documents/telystory/opencart/upload/catalog/');
define('DIR_SYSTEM', '/Users/JIM/Documents/telystory/opencart/upload/system/');
define('DIR_IMAGE', '/Users/JIM/Documents/telystory/opencart/upload/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'store');
define('DB_PORT', '8889');
define('DB_PREFIX', 'oc_');