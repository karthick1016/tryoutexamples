<?php

namespace Create\Address\Block;

use Magento\Framework\View\Element\Template;
use Create\Address\Model\ResourceModel\Create\CollectionFactory;

class Test extends Template
{
    /**
     * @var CollectionFactory
     */

    protected $_collectionFactory;

    /**
     * @param Context $context
     * @param Collection $collectionFactory
     */

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        CollectionFactory $collectionFactory
    ) {
        $this->_collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    /**
     * To get DataType
     *
     * @return void
     */
    
    public function firstName()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach ($data as $item) {
            $firstName = $item->getData('type');
        }
        return $firstName;
    }
}
