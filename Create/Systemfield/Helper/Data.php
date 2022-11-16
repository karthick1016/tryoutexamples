<?php

namespace Create\Systemfield\Helper;

use Magento\Framework\App\Helper\ScopeConfigInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const CUSTOMER_DROPDOWN = 'customer/startup/customer_dropdown_custom';

    /**
     * @var ScopeConfig
     */
    protected $scopeConfig;

    /**
     * Dependency Injection
     *
     * @param Context $context
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
    }

    /**
     * To return data from configuration
     *
     * @return array
     */
    public function customerDropdown()
    {
        $customerDropdown = $this->scopeConfig->getValue(self::CUSTOMER_DROPDOWN, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);

        return $customerDropdown;
    }
}
