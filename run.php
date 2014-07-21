<?php

include_once __DIR__ . '/vendor/autoload.php';

use mic2100\benchmark\benchmarker;
use mic2100\benchmark\tests\arraykeyexistsArrayCheckWithMultipleIterations;
use mic2100\benchmark\tests\issetArrayCheckWithMultipleIterations;

$benchmark = new benchmarker;

$benchmark->add(new arraykeyexistsArrayCheckWithMultipleIterations);
$benchmark->add(new issetArrayCheckWithMultipleIterations);

$benchmark->execute()->report();
