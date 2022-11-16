<?php

namespace PlaceOrderAfter\Mymodule1\Model\ResourceModel;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Hello extends AbstractDb
{
    /**
     * @var FieldName
     */
    protected $_idFieldName = 'id';

    /**
     * Initialize table name and id
     */

    protected function _construct()
    {
        $this->_init('placeafter', 'id');
    }
}
