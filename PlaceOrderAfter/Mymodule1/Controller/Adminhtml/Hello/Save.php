<?php

namespace PlaceOrderAfter\Mymodule1\Controller\Adminhtml\Hello;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\Request\DataPersistorInterface;
use PlaceOrderAfter\Mymodule1\Model\Hello;

class Save extends \Magento\Backend\App\Action
{
    /**
     * @var DataPersistor
     */
    protected $dataPersistor;

    /**
     * Dependency Injection
     *
     * @param Context $context
     * @param DataPersistorInterface $dataPersistor
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
    ) {
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }

    /**
     * Authorization
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('PlaceOrderAfter_Mymodule1::save');
    }

    /**
     * Execute function for Save
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getParams();
        if ($data) {
            $id = $this->getRequest()->getParam('id');

            $model = $this->_objectManager->create(\PlaceOrderAfter\Mymodule1\Model\Hello::class)->load($id);

            if (!$model->getId() && $id) {
                $this->messageManager->addErrorMessage(__('This Hello no longer exists'));
                return $resultRedirect->setPath('*/*/');
            }
            $model->setData($data);

            try {
                $model->save();
                $this->messageManager->addSuccessMessage('You saved');
                $this->dataPersistor->clear('createmenubackend_hello');

                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['id'=>$model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Hello.'));
            }

            $this->dataPersistor->set('createmenubackend_hello', $data);
            return $resultRedirect->setPath('*/*/edit', ['id' => $this->getRequest()->getParam('id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
