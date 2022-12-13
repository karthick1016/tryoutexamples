<?php

namespace Energytrust\Criteria\Block;

use Magento\Framework\View\Element\Template;
use Energytrust\Criteria\Model\ResourceModel\Criteria\CollectionFactory;

class Index extends Template
{
    /**
     * @var Helper
     *  */  
    
    protected $helper;

    protected $_collectionFactory;

    /**
     * @param Context $context
     * 
     * @param Helper $helper
     */

    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
    CollectionFactory $collectionFactory)
    {
        $this->_collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    public function firstName()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $firstName = $item->getData('firstname');
        }
        return $firstName;
    }
    public function lastName()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $lastName = $item->getData('lastname');
        }
        return $lastName;
    }
    
    public function lastEmail()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $email = $item->getData('email');
        }
        return $email;
    }

    public function lastNumber()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $number = $item->getData('number');
        }
        return $number;
    }

    public function lastAddress()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $address = $item->getData('address');
        }
        return $address;
    }

    public function lastCity()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $city = $item->getData('city');
        }
        return $city;
    }

    public function lastState()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $state = $item->getData('state');
        }
        return $state;
    }

    public function lastZipCode()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $zipcode = $item->getData('zipcode');
        }
        return $zipcode;
    }

    public function lastCooling()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $cooling_system_type = $item->getData('cooling_system_type');
        }
        return $cooling_system_type;
    }

    public function lastHeating()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $heating_system_type = $item->getData('heating_system_type');
        }
        return $heating_system_type;
    }

    public function lastFamily()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $family_type = $item->getData('family_type');
        }
        return $family_type;
    }

    public function lastWifi()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $wifi = $item->getData('wifi');
        }
        return $wifi;
    }

    public function lastThermostat()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $thermostat = $item->getData('thermostat');
        }
        return $thermostat;
    }

    public function lastLocation()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $location = $item->getData('location');
        }
        return $location;
    }

    public function lastTotal()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $total = $item->getData('total');
        }
        return $total;
    }

    public function lastHomeType()
    {
        $model = $this->_collectionFactory->create();
        $data = $model->load();
        foreach($data as $item)
        {
            $home_type = $item->getData('home_type');
        }
        return $home_type;
    }
}