<?php

/**
 * Copyright 2015 Magento. All rights reserved.
 */

namespace Rce\Calculator\Model;

use Rce\Calculator\Api\CalculatorInterface;
use Rce\Calculator\Api\Data\ResultInterface;
use Rce\Calculator\Api\Data\ResultInterfaceFactory;
use Rce\Calculator\Api\Data\Result;


/**
 * Defines the implementation class of the calculator service contract.
 */
class Calculator implements CalculatorInterface
{

    /**
     * @var $resultFactory
     * Factory for creating new result instances. This code will be automatically
     * generated because the type ends in "Factory".
     */
    private $resultFactory;

    public function __construct(
        ResultInterfaceFactory $resultFactory
    ) {
        $this->resultFactory = $resultFactory;
    }

    /**
     * Return result of calculation.
     *
     * @param float $left Left hand operand.
     * @param float $right Right hand operand.
     * @param string $operator operator identification.
     * @param int $precision precision of result.
     * @return Rce\Calculator\Api\Data\ResultInterface $r
     */
    public function calculator($left, $right, $operator, $precision) {
        $r = $this->resultFactory->create();
        $result = null;
        switch ($operator) {
            case 'add':
                $result = $left + $right;
                $r->setStatus('Ok.');
                $r->setResult(number_format($result, $precision));
                break;
            default:
                $r->setStatus('Error. Operation not found');

        }
        return $r;
    }
}