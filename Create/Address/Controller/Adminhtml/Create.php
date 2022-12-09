<?php

namespace Create\Address\Controller\Adminhtml;

abstract class Create extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Create_Address::top_level';

    protected $_coreRegistry;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    public function initPage($resultPage)
    {
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE)
            ->addBreadcrumb(__('Address'), __('Address'))
            ->addBreadcrumb(__('Create'), __('Create'));
        return $resultPage;
    }
}