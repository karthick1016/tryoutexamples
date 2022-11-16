<?php

namespace Energytrust\Criteria\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Criteria extends AbstractDb
{
    /**
     * To Pass Parameter of Table and primary key
     */
    protected function _construct()
    {
        $this->_init('criteria', 'id');
    }
}
