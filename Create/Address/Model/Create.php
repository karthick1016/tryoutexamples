<?php


namespace Create\Address\Model;

use Create\Address\Api\Data\CreateInterface;
use Magento\Framework\Model\AbstractModel;

class Create extends AbstractModel implements CreateInterface
{
    public const CACHE_TAG = 'address';

    /**
     * @var CacheTag
     */

    protected $_cacheTag = self::CACHE_TAG;

    /**
     * To call ResourceModel
     */

    protected function _construct()
    {
        $this->_init('Create\Address\Model\ResourceModel\Create');
    }

    /**
     * To return Id
     */

    public function getCreateId()
    {
        return $this->getData(self::CREATE_ID);
    }

    /**
     * To set Id
     *
     * @param int $createId
     * @return $this
     */

    public function setCreateId($createId)
    {
        return $this->setData(self::CREATE_ID, $createId);
    }

    /**
     * To return Type
     */

    public function getType()
    {
        return $this->getData(self::TYPE);
    }

    /**
     * To set Type
     *
     * @param string $type
     * @return $this
     */

    public function setType($type)
    {
        return $this->setData(self::TYPE, $type);
    }

    /**
     * To return Value
     */

    public function getValue()
    {
        return $this->getData(self::VALUE);
    }

    /**
     * To set Value
     *
     * @param string $value
     * @return $this
     */

    public function setValue($value)
    {
        return $this->setData(self::VALUE, $value);
    }
    
    /**
     * To return Place
     */
    
    public function getPlace()
    {
        return $this->getData(self::PLACE);
    }

    /**
     * To set Place
     *
     * @param string $place
     * @return $this
     */

    public function setPlace($place)
    {
        return $this->setData(self::PLACE, $place);
    }

    /**
     * To return sortOrder
     */

    public function getSortOrder()
    {
        return $this->getData(self::SORT_ORDER);
    }

    /**
     * To set SortOrder
     *
     * @param int $sortOrder
     * @return $this
     */

    public function setSortOrder($sortOrder)
    {
        return $this->setData(self::SORT_ORDER, $sortOrder);
    }
    
    /**
     * To return Regex
     */
    
    public function getRegex()
    {
        return $this->getData(self::REGEX);
    }

    /**
     * To set Regex
     * 
     * @param int $regex
     * @return $this
     */
    
    public function setRegex($regex)
    {
        return $this->setData(self::REGEX,$regex);
    }
}
