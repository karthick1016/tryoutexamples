<?php

namespace Create\Address\Block\Adminhtml\Create\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveAndContinueButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * To Create a Save and Continue button
     *
     * @return void
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
