<?php

namespace PlaceOrderAfter\Mymodule1\Block\Adminhtml\Hello\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveAndContinueButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * To create save and continue button
     *
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label'=>__('Save and Continue Edit'),
            'class'=>'save',
            'data_attribute' => [
                'mage-init' => [
                    'button' => ['event' => 'saveAndContinueEdit'],
                ],
            ],
            'sort_order' => 80,
        ];
    }
}
