<?php

namespace Create\Address\Helper;
use \Magento\Framework\App\Helper\Context;
use Create\Address\Model\ResourceModel\Create\CollectionFactory;

class Helper extends \Magento\Framework\App\Helper\AbstractHelper

{
    protected $_createFactory;
    
    public function __construct(
        Context $context,
        CollectionFactory $createFactory,
        array $data = []
    )
    {
        $this->_createFactory = $createFactory;
        parent::__construct($context,$data);
    }

    public function getCollectionData()
    {
        return $this->_createFactory->create();
    }

}
