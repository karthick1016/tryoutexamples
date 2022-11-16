<?php

namespace PlaceOrderAfter\Mymodule1\Model;

use PlaceOrderAfter\Mymodule1\Controller\Adminhtml\Hello\Delete;

class Deleted extends Delete
{
    /**
     * Execute function for delete
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('id');
        if ($id) {
            try {
                $model = $this->_objectManager->create(\PlaceOrderAfter\Mymodule1\Model\Hello::class);
                $model->load($id);
                $model->delete();

                $this->messageManager->addSuccessMessage(__('You deleted this row'));

                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id'=>$id]);
            }
        }
        $this->messageManager->addErrorMessage(__('We can\'t find a value to delete'));

        return $resultRedirect->setPath('*/*/');
    }
}
