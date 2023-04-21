<?php declare(strict_types=1);

define("VIEW_PATH", __DIR__ . "/../views");
define("STORAGE_PATH",__DIR__ . "/storage");

function view($path, $attr=[])
{
    extract($attr);
    require VIEW_PATH . "/$path.php";
}

require_once __DIR__ . "/../vendor/autoload.php";

//Error Handling File (Using filp/whoops)
require_once __DIR__ . "/config/error_handling.php";

//Http Components With slim/Psr
require_once __DIR__ . "/Http/config.php";

//Router With slim/slim
require_once __DIR__ . "/config/router.php";

