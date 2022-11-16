<?php

namespace PlaceOrderAfter\Mymodule1\Block\Adminhtml\Hello\Edit;

use Magento\Backend\Block\Widget\Context;

abstract class GenericButton
{
    /**
     * @var Context
     */
    protected $context;
    
    /**
     * Dependency Injection
     *
     * @param Context $context
     */

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    /**
     * To get Id
     *
     * @return int
     */
    public function getModelId()
    {
        return $this->context->getRequest()->getParam('id');
    }

    /**
     * To get Url
     *
     * @param string $route
     * @param array $params
     *
     * @return Url
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
