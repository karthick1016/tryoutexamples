<?php

namespace Create\Address\Model\ResourceModel\Create;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Create\Address\Model\Create','Create\Address\Model\ResourceModel\Create');
    }
}
