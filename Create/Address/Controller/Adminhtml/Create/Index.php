<?php

namespace Create\Address\Controller\Adminhtml\Create;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var ResultPageFactory
     */

    protected $resultPageFactory = false;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Create\Address\Model\CreateFactory $createFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->createFactory = $createFactory;
    }

    /**
     * To create a new Page
     */

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Demo Menu'));
        return $resultPage;
    }

    /**
     * To Give Authorization
     */
    
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Address_CreateMenuBackend::menu');
    }
}
