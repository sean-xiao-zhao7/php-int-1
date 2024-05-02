<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

define('LOCAL_FILES_PATH', __DIR__ . '/../../local_files/');

session_start();

$app = new \Xi\Php\App();
$app->register_route('/', function () {
    echo 'Home';
});

$title = 'Home';
$child_path = '_index.php';

require_once 'components/layout/layout.php';
