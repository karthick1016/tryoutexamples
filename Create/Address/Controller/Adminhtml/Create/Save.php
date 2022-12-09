<?php

namespace Create\Address\Controller\Adminhtml\Create;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\Request\DataPersistorInterface;
use Create\Address\Model\Create;
use Magento\Framework\View\Result\PageFactory;


class Save extends \Magento\Backend\App\Action
{
    protected $dataPersistor;
    protected $createFactory;
    protected $_resultPageFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor,
        PageFactory $resultPageFactory
    ) {
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }
    
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getParams();
        // var_dump($data);
        // exit();

        if($data)
        {
            $id = $this->getRequest()->getParam('id');

            $model = $this->_objectManager->create(\Create\Address\Model\Create::class)->load($id);
            // var_dump($data);
            // exit();
            $post = array(
                'type'=>$data['input'],
                'value'=>$data['value'],
                'place'=>$data['place'],
                'regex'=>$data['regex'],
                'sort_order'=>$data['sort_order']
            );
            // echo "<pre>";
            // var_dump($post);
            // exit();
            if(!$model->getId() && $id)
            {
                $this->messageManager->addErrorMessage(__('This Hello no longer exists'));
                return $resultRedirect->setPath('*/*/');
            }
            $model->setData($post);

            try{
                $model->save();

                $this->messageManager->addSuccessMessage('You saved');
                $this->dataPersistor->clear('createaddress_create');

                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['id'=>$model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            }catch(LocalizedException $e){
                $this->messageManager->addErrorMessage($e->getMessage());
            }catch(\Exception $e){
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Hello.'));
            }
            $this->dataPersistor->set('createaddress_create', $data);
            return $resultRedirect->setPath('*/*/edit', ['id' => $this->getRequest()->getParam('id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}