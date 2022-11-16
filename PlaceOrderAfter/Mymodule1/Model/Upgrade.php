<?php

namespace PlaceOrderAfter\Mymodule1\Model;

class Upgrade
{
    /**
     * Upgrade Function
     *
     * @param Save $subject
     */
    public function beforeExecute(\PlaceOrderAfter\Mymodule1\Controller\Adminhtml\Hello\Save $subject)
    {
        $data = $subject->getRequest()->getParam('method') == ' ' ?
        $subject->getRequest()->getParam('method') : 'Plugin';
        $subject->getRequest()->setParam('method', $data);

        return [$subject];
    }
}
