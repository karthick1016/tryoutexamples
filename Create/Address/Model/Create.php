<?php


namespace Create\Address\Model;

use Create\Address\Api\Data\CreateInterface;
use Magento\Framework\Model\AbstractModel;

class Create extends AbstractModel implements CreateInterface
{
    const CACHE_TAG = 'address';

    protected $_cacheTag = self::CACHE_TAG;

    protected function _construct()
    {
        $this->_init('Create\Address\Model\ResourceModel\Create');
    }

    public function getCreateId()
    {
        return $this->getData(self::CREATE_ID);
    }

    public function setCreateId($createId)
    {
        return $this->setData(self::CREATE_ID,$createId);
    }

    public function getType()
    {
        return $this->getData(self::TYPE);
    }

    public function setType($type)
    {
        return $this->setData(self::TYPE,$type);
    }

    public function getValue()
    {
        return $this->getData(self::TYPE);
    }

    public function setValue($value)
    {
        return $this->setData(self::TYPE,$value);
    }

    public function getPlace()
    {
        return $this->getData(self::TYPE);
    }

    public function setPlace($place)
    {
        return $this->setData(self::TYPE,$place);
    }

    public function getSortOrder()
    {
        return $this->getData(self::TYPE);
    }

    public function setSortOrder($sortOrder)
    {
        return $this->setData(self::TYPE,$sortOrder);
    }
}