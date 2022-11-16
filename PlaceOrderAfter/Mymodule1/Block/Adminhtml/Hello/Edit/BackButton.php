<?php


namespace PlaceOrderAfter\Mymodule1\Block\Adminhtml\Hello\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class BackButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * To Create a Back Button
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
     * To get Url
     *
     * @return void
     */
    public function getBackUrl()
    {
        return $this->getUrl('*/*/');
    }
}
