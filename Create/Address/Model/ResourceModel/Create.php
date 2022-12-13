<?php

namespace Create\Address\Model\ResourceModel;

use Magento\Framework\Model\AbstractModel;

class Create extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * To initialize the table name and primary key
     */
    
    public function _construct()
    {
        $this->_init('addresss', 'id');
    }
}
