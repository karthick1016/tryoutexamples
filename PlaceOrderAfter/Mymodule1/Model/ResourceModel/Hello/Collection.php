<?php

namespace PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use PlaceOrderAfter\Mymodule1\Model\Hello as Model;
use PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @var FieldName
     */
    protected $_idFieldName = 'id';

    // protected $_eventPrefix = 'grid_placeafter_collection';

    // protected $_eventObject = 'placeafter_collection';

    /**
     * Initialize Model and ResourceModel class
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
