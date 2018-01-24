<?php

/**
* Copyright 2018 Magento. All rights reserved.
*/

namespace Rce\Calculator\Api;

use Rce\Calculator\Api\Data\ResultInterface;

/**
* Defines the service contract for some simple calculation.
*/
interface CalculatorInterface
{
    /**
    * Return result of calculation.
    *
    * @api
    * @param float $left Left hand operand.
    * @param float $right Right hand operand.
    * @param string $operator Operator identification.
    * @param int $precision precision of result.
    * @return Rce\Calculator\Api\Data\ResultInterface $result result of operation.
    */
    public function calculator($left, $right, $operator, $precision);
}