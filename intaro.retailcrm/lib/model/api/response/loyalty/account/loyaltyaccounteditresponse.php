<?php
/**
 * PHP version 7.1
 *
 * @category Integration
 * @package  Intaro\RetailCrm\Model\Api\Response\Loyalty\Account
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  MIT
 * @link     http://retailcrm.ru
 * @see      http://retailcrm.ru/docs
 */
namespace Intaro\RetailCrm\Model\Api\Response\Loyalty\Account;

use Intaro\RetailCrm\Component\Json\Mapping;
use Intaro\RetailCrm\Model\Api\Response\AbstractApiResponseModel;

/**
 * Class LoyaltyAccountEditResponse
 *
 * @package Intaro\RetailCrm\Model\Api\Response\Loyalty\Account
 */
class LoyaltyAccountEditResponse extends AbstractApiResponseModel
{
    /**
     * Результат запроса (успешный/неуспешный)
     *
     * @var boolean $success
     *
     * @Mapping\Type("boolean")
     * @Mapping\SerializedName("success")
     */
    public $success;
    
    /**
     * @var \Intaro\RetailCrm\Model\Api\LoyaltyAccount
     *
     * @Mapping\Type("\Intaro\RetailCrm\Model\Api\LoyaltyAccount")
     * @Mapping\SerializedName("loyalty_account")
     */
    public $loyaltyAccount;
    
    /**
     * @var array $warnings
     *
     * @Mapping\Type("array")
     * @Mapping\SerializedName("warnings")
     */
    public $warnings;
}
