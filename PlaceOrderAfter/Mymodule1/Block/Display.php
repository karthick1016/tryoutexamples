<?php

namespace PlaceOrderAfter\Mymodule1\Block;

use Magento\Framework\View\Element\Template;
use PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello\Collection;

class Display extends Template
{
    /**
     * @var Collection
     */
    private $collection;
    
    /**
     * Dependency Injection
     *
     * @param Context $context
     *
     * @param Collection $collection
     *
     * @param Data $data
     */
    public function __construct(Template\Context $context, Collection $collection, array $data = [])
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    /**
     * To return Values
     *
     * @return array
     */
    public function getAllPrices()
    {
        return $this->collection;
    }
}
