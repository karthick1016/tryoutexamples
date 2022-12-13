<?php

namespace Create\Address\Controller\Adminhtml;

abstract class Create extends \Magento\Backend\App\Action
{
    public const ADMIN_RESOURCE = 'Create_Address::top_level';
    /**
     * @var CoreRegistry
     */

    protected $_coreRegistry;

    /**
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
     * To Add BreadCrumb
     *
     * @param string $resultPage
     */
    
    public function initPage($resultPage)
    {
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE)
            ->addBreadcrumb(__('Address'), __('Address'))
            ->addBreadcrumb(__('Create'), __('Create'));
        return $resultPage;
    }
}
