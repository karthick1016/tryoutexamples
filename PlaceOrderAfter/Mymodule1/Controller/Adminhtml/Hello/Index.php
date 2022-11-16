<?php


namespace PlaceOrderAfter\Mymodule1\Controller\Adminhtml\Hello;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var HelloFactory
     */
    protected $helloFactory;
    /**
     * @var PageFactory
     */
    protected $_resultPageFactory ;
    /**
     * Dependency Injection
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param HelloFactory $helloFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \PlaceOrderAfter\Mymodule1\Model\HelloFactory $helloFactory
    ) {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
        $this->helloFactory = $helloFactory;
    }

    /**
     * To execute
     */
    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        $hello = $this->helloFactory->create();
        $helloCollection = $hello->getCollection();

        // echo '<pre>';
        // print_r($helloCollection->getData());
        // echo '</pre>';
        $resultPage->setActiveMenu('PlaceOrderAfter_Mymodule1::menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Details of Place Order After'));
        return $resultPage;
    }

    // protected function _isAllowed()
    // {
    //     return $this->_authorization->isAllowed('PlaceOrderAfter_Mymodule1::menu');
    // }
}
