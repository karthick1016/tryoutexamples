<?php

namespace Create\Address\Controller\Adminhtml\Create;

class Delete extends \Create\Address\Controller\Adminhtml\Create
{
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('id');
        if($id){
            try{
                $model = $this->_objectManager->create(\Create\Address\Model\Create::class);
                $model->load($id);
                $model->delete();

                $this->messageManager->addSuccessMessage(__('You deleted the row'));

                return $resultRedirect->setPath('*/*/');
            }catch(\Exception $e)
            {
                $this->messageManager->addErrorMessage($e->getMessage());
                return $resultRedirect->setPath('*/*/edit',['id'=>$id]);
            }
        }
        $this->messageManager->addErrorMessage(__('We can\'t find a value to delete'));

        return $resultRedirect->setPath('*/*/');
    }
}