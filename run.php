<?php

include_once __DIR__ . '/vendor/autoload.php';

use mic2100\benchmark\benchmarker;
use mic2100\benchmark\tests;

$benchmark = new benchmarker;

$benchmark->add(new tests\usingIntCastCheckWithMultipleIterations)
          ->add(new tests\usingIntValCheckWithMultipleIterations);

$benchmark->execute()->report();
