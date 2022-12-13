<?php

namespace Create\Address\Block\Adminhtml\Create\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class BackButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * To Create a backbutton
     *
     * @return void
     */
    
    public function getButtonData()
    {
        return [
            'label'=> __('Back'),
            'on_click'=> sprintf("location.href = '%s';", $this->getBackUrl()),
            'class'=>'back',
            'sort_order'=>10
        ];
    }

    /**
     * To create a backurl
     *
     * @return void
     */
    
    public function getBackUrl()
    {
        return $this->getUrl('*/*/');
    }
}
