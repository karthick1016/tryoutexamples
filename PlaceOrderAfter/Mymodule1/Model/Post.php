<?php


namespace PlaceOrderAfter\Mymodule1\Model;

use PlaceOrderAfter\Mymodule1\Model\HelloFactory;

// use PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello;

class Post
{
    /**
     * @var Factory
     */
    private $helloFactory;
    /**
     * @var $resource
     */
    private $resource;
    /**
     * Dependency Injection
     *
     * @param HelloFactory $hellofactory
     */
    public function __construct(HelloFactory $hellofactory)
    {
        // $this->resource = $hello;
        $this->helloFactory = $hellofactory;
    }
    /**
     * Save Data
     */
    public function save()
    {
        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/custom.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info('Postfile');
        $array = [
            
            'firstname' => 'suriya',
            'lastname'=>'narayan',
            'method'=>'event-observer'
            
        ];
        // $logger->info(print_r($array, true));
        $saveData = $this->helloFactory->create()->setData($array)->save();
    }
}
