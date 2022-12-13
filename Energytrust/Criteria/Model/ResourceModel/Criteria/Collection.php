<?php

namespace Energytrust\Criteria\Model\ResourceModel\Criteria;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Energytrust\Criteria\Model\Criteria as CriteriaModel;
use Energytrust\Criteria\Model\ResourceModel\Criteria as CriteriaResourceModel;

class Collection extends AbstractCollection
{
    /**
     * To Filter and fetch table Data
     */
    
    protected function _construct()
    {
        $this->_init(CriteriaModel::class, CriteriaResourceModel::class);
    }
}