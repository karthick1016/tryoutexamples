<?php

namespace Create\Address\Controller\Adminhtml\Create;

class NewAction extends \Create\Address\Controller\Adminhtml\Create
{
    /**
     * @var ResultForwardFactory
     */

    protected $resultForwardFactory;

    /**
     * @param Context $context
     * @param Registry $coreRegistry
     * @param ForwardFactory $resultForwardFactory
     */

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
    ) {
        $this->resultForwardFactory = $resultForwardFactory;
        parent::__construct($context, $coreRegistry);
    }

    /**
     * To give Authorization
     */

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Create_Address::save');
    }

    /**
     * To Forward the Edit Page
     */

    public function execute()
    {
        $resultForward = $this->resultForwardFactory->create();
        return $resultForward->forward('edit');
    }
}
