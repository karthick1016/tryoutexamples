<?php

// echo "hlo";
namespace Create\Systemfield\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Create\Systemfield\Helper\Data;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Display extends Template
{
    /**
     * @var Helper
     */
    protected $helper;
    /**
     * @var ScopeConfig
     */
    protected $scopeConfig;

    /**
     * Dependency Injection
     *
     * @param Context $context
     * @param Data $helper
     * @param ScopeConfigInterface $scopeConfig
     * @param Data $data
     */
    public function __construct(
        Context $context,
        Data $helper,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->helper = $helper;
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    /**
     * To return the helper Data
     *
     * @return array
     */

    public function customerDropdown()
    {
        return $this->helper->customerDropdown();
    }
    /**
     * To return message
     *
     * @return string
     */
    public function sayConfig()
    {
        return __("Hello World");
    }
}
