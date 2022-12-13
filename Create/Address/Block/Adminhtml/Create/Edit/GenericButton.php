<?php


namespace Create\Address\Block\Adminhtml\Create\Edit;

use Magento\Backend\Block\Widget\Context;

abstract class GenericButton
{
    /**
     * @var Context
     */
    
    protected $context;

    /**
     * @param Context $context
     */
    
    public function __construct(Context $context)
    {
        $this->context = $context;
    }
    
    /**
     * To return id
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
