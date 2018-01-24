<?php

/**
 * Copyright 2015 Magento. All rights reserved.
 */

namespace Rce\Calculator\Model;

use Rce\Calculator\Api\Data\ResultInterface;

/**
 * Defines the implementation class of the calculator service contract.
 */
class Result implements ResultInterface
{

    private $status;
    private $result;

    /**
     * Get the status.
     *
     * @api
     * @return string status.
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set status
     *
     * @api
     * @param $value float The new status
     * @return null
     */
    public function setStatus($value) {
        $this->status = $value;
    }

    /**
     * Get the result.
     *
     * @api
     * @return float result.
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set the result.
     *
     * @api
     * @param $value float The new result.
     * @return null
     */
    public function setResult($value) {
        $this->result = $value;
    }
}