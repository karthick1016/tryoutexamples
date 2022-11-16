<?php

namespace NewTable\Declarative\Model\ResoruceModel\HelloWorld;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use NewTable\Declarative\Model\HelloWorld as Model;
use NewTable\Declarative\Model\ResourceModel\HelloWorld as ResourceModel;

class HelloWorld extends AbstractCollection
{
    /**
     * To initialize Model and Resourcemodel
     */
    protected function _construct()
    {
        $this->_init(Model::class,ResourceModel::class);
    }
}


?>