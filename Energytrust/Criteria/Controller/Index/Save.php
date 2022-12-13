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
        CriteriaFactory $criteria
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->_criteriaFactory = $criteria;
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
        $data = (array)$this->getRequest()->getParams();
        $model = $this->_criteriaFactory->create();
        $post = array(
            'firstname'=> $data['first-name'],
                'lastname'=>$data['last-name'],
                'email'=>$data['email'],
                'number'=>$data['number'],
                'address'=>$data['address'],
                'city'=>$data['city'],
                'state'=>$data['state'],
                'zipcode'=>$data['zip_code'],
                'cooling_system_type'=>$data['cooling'],
                'heating_system_type'=>$data['heating'],
                'family_type'=>$data['home'],
                'wifi'=>$data['wifi'],
                'thermostat'=>$data['kind'],
                'location'=>$data['location'],
                'total'=>$data['total'],
                'home_type'=>$data['rent']
        );
      
        $model->setData($post);
        $model->save();
        $response = $this->resultFactory
            ->create(\Magento\Framework\Controller\ResultFactory::TYPE_JSON)
            ->setData($model->getData());
            return $response;
    }
}