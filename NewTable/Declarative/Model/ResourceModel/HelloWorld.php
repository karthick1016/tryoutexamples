<?php

namespace NewTable\Declarative\Model\ResoruceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class HelloWorld extends AbstractDb
{
    /**
     * To initialize Table name and Primary key
     */
    protected function _construct()
    {
        $this->_init('quote_item_file','id');
    }
}

?>