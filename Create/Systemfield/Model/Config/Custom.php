<?php

namespace Create\Systemfield\Model\Config;

class Custom implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * To return Array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value'=>'Email','label'=>__('Email')],
            ['value'=>'Aadhar','label'=>__('Aadhar')],
            ['value'=>'Email and Aadhar','label'=>__('Email and Aadhar')]
        ];
    }
}
