<?php

namespace PlaceOrderAfter\Mymodule1\Controller\Adminhtml\Hello;

class Edit extends \PlaceOrderAfter\Mymodule1\Controller\Adminhtml\Hello
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Dependency Injection
     *
     * @param Context $context
     * @param Registry $coreRegistry
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context, $coreRegistry);
    }

    /**
     * To execute function
     */

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create(\PlaceOrderAfter\Mymodule1\Model\Hello::class);

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This Hello no longer exists'));
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
        }
        $this->_coreRegistry->register('createmenubackend_hello', $model);
        $resultPage = $this->resultPageFactory->create();
        $this->initPage($resultPage)->addBreadcrumb(
            $id ? __('Edit Page') : __('New Page'),
            $id ? __('Edit Page') : __('New Page')
        );

        $resultPage->getConfig()->getTitle()->prepend(__('Hellos'));
        $resultPage->getConfig()->getTitle()->prepend($model->getId() ?
        __('Edit Page %1', $model->getId()) : __('New Page'));
        return $resultPage;
    }
}
