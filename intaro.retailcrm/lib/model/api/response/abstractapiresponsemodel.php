<?php
/**
 * PHP version 7.1
 *
 * @category Integration
 * @package  Intaro\RetailCrm\Model\Api
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  MIT
 * @link     http://retailcrm.ru
 * @see      http://retailcrm.ru/docs
 */
namespace Intaro\RetailCrm\Model\Api\Response;

use Intaro\RetailCrm\Model\Api\AbstractApiModel;

/**
 * Class AbstractApiResponseModel
 *
 * @package Intaro\RetailCrm\Model\Api
 */
class AbstractApiResponseModel extends AbstractApiModel
{
    /**
     * @var string
     *
     * @Mapping\Type("string")
     * @Mapping\SerializedName("errorMsg")
     */
    public $errorMsg;
    
    /**
     * @var array
     *
     * @Mapping\Type("array")
     * @Mapping\SerializedName("errors")
     */
    public $errors;
}
