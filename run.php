<?php

include_once __DIR__ . '/vendor/autoload.php';

use mic2100\benchmark\benchmarker;
use mic2100\benchmark\tests\absNegativeToPositiveWithMultipleIterations;
use mic2100\benchmark\tests\lTrimNegativeToPositiveWithMultipleIterations;
use mic2100\benchmark\tests\operatorsNegativeToPositiveWithMultipleIterations;
use mic2100\benchmark\tests\strReplaceNegativeToPositiveWithMultipleIterations;

$benchmark = new benchmarker;

$benchmark->add(new absNegativeToPositiveWithMultipleIterations)
          ->add(new lTrimNegativeToPositiveWithMultipleIterations)
          ->add(new operatorsNegativeToPositiveWithMultipleIterations)
          ->add(new strReplaceNegativeToPositiveWithMultipleIterations);

$benchmark->execute()->report();
