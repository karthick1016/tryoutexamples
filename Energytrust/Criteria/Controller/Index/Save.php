<?php

namespace Energytrust\Criteria\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Energytrust\Criteria\Model\CriteriaFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;

class Save extends Action
{
    /**
     * @var PageFactory
     */
    protected $_resultPageFactory;
    /**
     * @var CriteriaFactory
     */
    protected $_criteriaFactory;
    /**
     * Dependency Injection
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param CriteriaFactory $criteriaFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        CriteriaFactory $criteriaFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->_criteriaFactory = $criteriaFactory;
        parent::__construct($context);
    }

    /**
     * Data saved
     *
     * @return void
     * @throws Exception
     */

    public function execute()
    {
        try {
            // var_dump($this->getRequest());
            // exit();
            $data = (array)$this->getRequest()->getPost();
            if ($data) {
                $model = $this->_criteriaFactory->create();
                // var_dump($model);
                $model->setData($data)->save();

                $this->messageManager->addSuccessMessage(__("Data saved successfully"));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("Please Try Again"));
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        // $resultRedirect->setUrl($this->_redirect(getRefererUrl()));
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;
        // if($this->getRequest()->isPost())
        // {
        //     $input = $this->getRequest()->getPostValue();
        //     $postData = $this->_criteriaFactory->create();
        //     if(isset($input['editId'])){
        //         $id = $input['editId'];
        //     }else{
        //         $id = 0;
        //     }
        //     if($id != 0){
        //         $postData->load($id);
        //         $postData->addData($input);
        //         $postData->setId($id);
        //         $postData->save();
        //     }
        //     else{
        //         $postData->setData($input)->save();
        //     }
        //     $this->messageManager->addSuccessMessage(__("Data saved successfully"));
        //     $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        //     $resultRedirect->SetUrl($this->_redirect->getRefererUrl());
        //     return $resultRedirect;
        // }
    }
}
