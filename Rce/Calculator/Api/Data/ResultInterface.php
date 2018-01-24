<?php

/**
 * Copyright 2015 Magento. All rights reserved.
 */

namespace Rce\Calculator\Api\Data;


/**
 * Defines the implementation class of the calculator service contract.
 */
interface ResultInterface
{

    /**
     * Get the status.
     *
     * @api
     * @return string status.
     */
    public function getStatus();

    /**
     * Set status
     *
     * @api
     * @param $value float The new status
     * @return null
     */
    public function setStatus($value);

    /**
     * Get the result.
     *
     * @api
     * @return float result.
     */
    public function getResult();

    /**
     * Set the result.
     *
     * @api
     * @param $value float The new result.
     * @return null
     */
    public function setResult($value);
}