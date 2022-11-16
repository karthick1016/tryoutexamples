<?php

namespace NewTable\Declarative\Model;

use Magento\Framework\Model\AbstractModel;
use NewTable\Declarative\Model\ResourceModel\HelloWorld as ResourceModel;

class HelloWorld extends AbstractModel
{
    /**
     * To initialize Resourcemodel
     */
    protected function _construct()
    {
        $this->init(ResourceModel::class);
    }
}
