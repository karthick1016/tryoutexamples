<?php

namespace Create\Address\Controller\Adminhtml\Create;

class Edit extends \Create\Address\Controller\Adminhtml\Create
{
    /**
     *
     * @var ResultPageFactory
     */

    protected $resultPageFactory;
    /**
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
     * To Edit the Form
     */
    
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $model = $this->_objectManager->create(\Create\Address\Model\Create::class)->load($id);
        if (!$model->getId() && $id) {
            $this->messageManager->addErrorMessage(__('This Create no longer exists'));
            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/');
        }
        $this->_coreRegistry->register('createaddress_create', $model);
        $resultPage = $this->resultPageFactory->create();
        $this->initPage($resultPage)->addBreadcrumb(
            $id ? __('Edit Page') : __('New Page'),
            $id ? __('Edit Page') : __('New Page')
        );

        $resultPage->getConfig()->getTitle()->prepend(__('Create'));
        $resultPage->getConfig()->getTitle()->prepend($model->getId() ?
        __('Edit Page %1', $model->getId()) : __('New Page'));
        return $resultPage;
    }
}
