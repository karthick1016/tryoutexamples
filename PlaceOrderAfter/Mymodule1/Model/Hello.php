<?php

namespace PlaceOrderAfter\Mymodule1\Model;

use PlaceOrderAfter\Mymodule1\Api\Data\HelloInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Model\AbstractModel;

class Hello extends AbstractModel implements HelloInterface
{
    public const CACHE_TAG = 'placeafter';
    /**
     * @var Tag
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Call ResourceModel
     */
    protected function _construct()
    {
        $this->_init('PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello');
    }

    /**
     * To return Id
     *
     * @return int
     */
    public function getHelloId()
    {
        return $this->getData(self::HELLO_ID);
    }

    /**
     * To set Id
     *
     * @param int $helloId
     * @return $this
     */
    public function setHelloId($helloId)
    {
        return $this->setData(self::HELLO_ID, $helloId);
    }

    /**
     * To return FirstName
     *
     * @return string
     */

    public function getFirstName()
    {
        return $this->getData(self::FIRSTNAME);
    }

    /**
     * To set FirstName
     *
     * @param string $firstName
     * @return $this
     */

    public function setFirstName($firstName)
    {
        return $this->getData(self::FIRSTNAME, $firstName);
    }

    /**
     * To return Lastname
     *
     * @return string
     */

    public function getLastName()
    {
        return $this->getData(self::LASTNAME);
    }

    /**
     * To set LastName
     *
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        return $this->setData(self::LASTNAME, $lastName);
    }

    /**
     * To return Method
     *
     * @return string
     */

    public function getMethod()
    {
        return $this->getData(self::METHOD);
    }

    /**
     * To set Method
     *
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        return $this->setData(self::METHOD, $method);
    }
}
