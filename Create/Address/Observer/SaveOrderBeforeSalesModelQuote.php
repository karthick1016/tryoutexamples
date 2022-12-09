<?php
namespace Create\Address\Observer;
 
use Magento\Framework\DataObject\Copy;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Quote\Model\Quote;
use Magento\Sales\Model\Order;

class SaveOrderBeforeSalesModelQuote implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer) {

        $event = $observer->getEvent();

        $order = $event->getOrder();

        $quote = $event->getQuote();
        if($quote->getCustomFieldText())
        {
            $order->setCustomFieldText($quote->getCustomFieldText());
        }
        return $this;
    }
}