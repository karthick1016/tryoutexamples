<?php

namespace Create\Address\Model\ResourceModel;

use Magento\Framework\Model\AbstractModel;

class Create extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('address','id');
    }
}