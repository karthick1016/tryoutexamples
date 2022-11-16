<?php

namespace PlaceOrderAfter\Mymodule1\Controller\Adminhtml;

abstract class Hello extends \Magento\Backend\App\Action
{
    public const ADMIN_RESOURCE = 'PlaceOrderAfter_Mymodule1::top_level';
    /**
     * @var CoreRegistry
     */
    protected $_coreRegistry;

    /**
     * Dependecy Injection
     *
     * @param Context $context
     * @param Registry $coreRegistry
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    /**
     * Add BreadCrumb
     *
     * @param string $resultPage
     */

    public function initPage($resultPage)
    {
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE)
            ->addBreadcrumb(__('PlaceOrderAfter'), __('PlaceOrderAfter'))
            ->addBreadcrumb(__('Hello'), __('Hello'));
        return $resultPage;
    }
}
