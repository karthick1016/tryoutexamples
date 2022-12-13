<?php

namespace Create\Address\Model\ResourceModel\Create;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * To initialize the Model and ResourceModel
     */
    
    protected function _construct()
    {
        $this->_init('Create\Address\Model\Create', 'Create\Address\Model\ResourceModel\Create');
    }
}
