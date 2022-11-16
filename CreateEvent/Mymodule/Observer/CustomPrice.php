<?php

namespace CreateEvent\Mymodule\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Event\Observer;

class CustomPrice implements ObserverInterface
{
    /**
     * To Observe the event
     *
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $item = $observer->getEvent()->getData('quote_item');
            $item = ( $item->getParentItem() ? $item->getParentItem() : $item );
            $price = 100;
            $item->setCustomPrice($price);
            $item->setOriginalCustomPrice($price);
            $item->getProduct()->setIsSuperMode(true);
    }
}
