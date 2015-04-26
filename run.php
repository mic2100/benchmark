<?php

include_once __DIR__ . '/vendor/autoload.php';

use Mic2100\Benchmark\Benchmarker;
use Mic2100\Benchmark\Tests;

$benchmark = new Benchmarker;

/**
 * (float) vs FloatVal
 */
$benchmark->add(new Tests\Casting\UsingFloatCastCheckWithMultipleIterations)
          ->add(new Tests\Casting\UsingFloatValCheckWithMultipleIterations);

$benchmark->execute()->report('(float) vs FloatVal');

/**
 * (int) vs IntVal
 */
$benchmark->reset()
          ->add(new Tests\Casting\UsingIntCastCheckWithMultipleIterations)
          ->add(new Tests\Casting\UsingIntValCheckWithMultipleIterations);

$benchmark->execute()->report('(int) vs IntVal');

/**
 * ArrayKeyExists vs Isset
 */
$benchmark->reset()
          ->add(new Tests\ArrayKeyChecks\ArraykeyexistsArrayCheckWithMultipleIterations)
          ->add(new Tests\ArrayKeyChecks\IssetArrayCheckWithMultipleIterations);

$benchmark->execute()->report('ArrayKeyExists vs Isset');

/**
 * Conditional Check - Bool vs is_null check
 */
$benchmark->reset()
          ->add(new Tests\ConditionalChecks\IfBooleanCheckWithMultipleIterations)
          ->add(new Tests\ConditionalChecks\IfEmptyCheckWithMultipleIterations)
          ->add(new Tests\ConditionalChecks\IfIsNullCheckWithMultipleIterations);

$benchmark->execute()->report('Conditional Check - bool vs is_null check');

/**
 * Convert number from negative to positive
 */
$benchmark->reset()
          ->add(new Tests\InvertNumbers\AbsNegativeToPositiveWithMultipleIterations)
          ->add(new Tests\InvertNumbers\LTrimNegativeToPositiveWithMultipleIterations)
          ->add(new Tests\InvertNumbers\StrReplaceNegativeToPositiveWithMultipleIterations)
          ->add(new Tests\InvertNumbers\OperatorsNegativeToPositiveWithMultipleIterations);

$benchmark->execute()->report('Convert number from negative to positive');

