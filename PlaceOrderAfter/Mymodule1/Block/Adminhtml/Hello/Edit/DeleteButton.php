<?php

namespace PlaceOrderAfter\Mymodule1\Block\Adminhtml\Hello\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class DeleteButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * To create Delete button
     *
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        if ($this->getModelId()) {
            $data = [
                'label'=>__('Delete Hello'),
                'class'=> 'delete',
                'on_click' => 'deleteConfirm(\'' . __(
                    'Are you sure you want to do this?'
                ) . '\', \'' . $this->getDeleteUrl() . '\')',
                'sort_order' => 20,
                ];
        }
        return $data;
    }

    /**
     * To get Delete Url
     *
     * @return void
     */
    public function getDeleteUrl()
    {
        return $this->getUrl('*/*/delete', ['id' => $this->getModelId()]);
    }
}
