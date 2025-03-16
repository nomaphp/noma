<?php

use Noma\Core\Kernel;

require_once __DIR__ . '/../vendor/autoload.php';

// Init Kernel
$noma = (new Kernel());

// Serve commands
$noma->serveCli();
