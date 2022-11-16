<?php

namespace PlaceOrderAfter\Mymodule1\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use PlaceOrderAfter\Mymodule1\Model\PostFactory;

class PlaceAfter implements ObserverInterface
{
    /**
     * @var Factory
     */
    private $postFactory;
    /**
     * Dependency Injection
     *
     * @param PostFactory $postFactory
     */
    public function __construct(PostFactory $postFactory)
    {
        $this->postFactory = $postFactory;
    }

    /**
     * Execute Function for Observer
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/custom.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info('Observer');
        return $this->postFactory->create()->save();
    }
}
