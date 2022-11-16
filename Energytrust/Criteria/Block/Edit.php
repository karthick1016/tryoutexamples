<?php


namespace Energytrust\Criteria\Block;

use Magento\Framework\View\Element\Template;
use Energytrust\Criteria\Model\CriteriaFactory;

class Edit extends Template
{
    /**
     * @var Factory
     */
    protected $_criteriaFactory;
    /**
     * Dependency Injection
     *
     * @param Context $context
     * @param CriteriaFactory $criteriaFactory
     */
    public function __construct(Template\Context $context, CriteriaFactory $criteriaFactory)
    {
        parent::__construct($context);
        $this->_criteriaFactory = $criteriaFactory;
    }

    /**
     * To return Model data
     *
     * @return array
     */

    public function getAllData()
    {
        $criteria = $this->_criteriaFactory->create();
        $collection = $criteria->getCollection();
        return $collection;
    }
}
