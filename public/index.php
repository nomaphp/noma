<?php

use Noma\Core\Kernel;

ignore_user_abort(true);

require_once __DIR__ . '/../vendor/autoload.php';

// Init Kernel
$noma = (new Kernel());

// Serve HTTP (as Classic PHP)
$noma->serveHttp();

// Serve HTTP (as FrankenPHP worker)
//$noma->serveHttpWith(new \Noma\Core\Runners\FrankenPhpWorker());
