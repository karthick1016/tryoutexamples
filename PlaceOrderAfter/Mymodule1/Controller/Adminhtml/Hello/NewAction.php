<?php

namespace PlaceOrderAfter\Mymodule1\Controller\Adminhtml\Hello;

class NewAction extends \PlaceOrderAfter\Mymodule1\Controller\Adminhtml\Hello
{
    /**
     * @var ForwardFactory
     */
    protected $resultForwardFactory;
    /**
     * Dependency Injection
     *
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
     * Give authorisation
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('PlaceOrderAfter_Mymodule1::save');
    }
    /**
     * Execute function for edit
     */
    public function execute()
    {
        $resultForward = $this->resultForwardFactory->create();
        //$resultForward->getConfig()->getTitle()->prepend(__('Details of Place Order After'));
        return $resultForward->forward('edit');
    }
}
