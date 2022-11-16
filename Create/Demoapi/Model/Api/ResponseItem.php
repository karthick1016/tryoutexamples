<?php

namespace Create\Demoapi\Model\Api;
use Create\Demoapi\Api\ResponseItemInterface;
use Magento\Framework\DataObject;

class ResponseItem extends DataObject implements ResponseItemInterface
{
    public function getId()
    {
        return $this->_getData(self::DATA_ID);
    }

    public function getSku()
    {
        return $this->_getData(self::DATA_SKU);
    }

    public function getName()
    {
        return $this->_getData(self::DATA_NAME);
    }

    public function getDescription()
    {
        return $this->_getData(self::DATA_DESCRIPTION);
    }

    public function setId(int $id)
    {
        return $this->setData(self::DATA_ID,$id);
    }

    public function setSku(string $sku)
    {
        return $this->setData(self::DATA_SKU,$sku);
    }

    public function setName(string $name)
    {
        return $this->setData(self::DATA_NAME,$name);
    }

    public function setDescription(string $description)
    {
        return $this->setData(self::DATA_DESCRIPTION,$description);
    }
}

?>