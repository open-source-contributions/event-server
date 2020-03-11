<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Spatie\EventServer\Container;
use Spatie\EventServer\Tests\Fakes\TestConfig;

$container = Container::init(new TestConfig());

$container->server()->run();
