<?php

namespace Create\Address\Controller\Adminhtml\Create;

class NewAction extends \Create\Address\Controller\Adminhtml\Create
{
    protected $resultForwardFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
    ) {
        $this->resultForwardFactory = $resultForwardFactory;
        parent::__construct($context, $coreRegistry);
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Create_Address::save');
    }

    public function execute()
    {
        $resultForward = $this->resultForwardFactory->create();
        //$resultForward->getConfig()->getTitle()->prepend(__('Details of Place Order After'));
        return $resultForward->forward('edit');
    }
}
