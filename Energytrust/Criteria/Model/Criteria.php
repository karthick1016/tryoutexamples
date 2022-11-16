<?php

namespace Energytrust\Criteria\Model;

use Magento\Framework\Model\AbstractModel;
use Energytrust\Criteria\Model\ResourceModel\Criteria as CriteriaResourceModel;

class Criteria extends AbstractModel
{
    /**
     * To get from Resourcemodel
     */
    protected function _construct()
    {
        $this->_init(CriteriaResourceModel::class);
    }
}
