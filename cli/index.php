<?php

use Noma\Core\Kernel;

ignore_user_abort(true);

require_once __DIR__ . '/../vendor/autoload.php';

// Init Kernel
$noma = (new Kernel());

// Serve commands
$noma->serveCli();
