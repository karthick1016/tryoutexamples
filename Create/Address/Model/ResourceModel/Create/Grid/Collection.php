<?php

namespace Create\Address\Model\ResourceModel\Create\Grid;

use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Api\Search\AggregationInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Create\Address\Model\ResourceModel\Create\Collection as CreateCollection;

class Collection extends CreateCollection implements SearchResultInterface
{
    /**
     * @var Aggregations
     */

    protected $aggregations;

    /**
     * @param EntityFactoryInterface $entityFactory
     * @param LoggerInterface $logger
     * @param FetchStrategyInterface $fetchStrategy
     * @param ManagerInterface $eventManager
     * @param ManagerInterface $mainTable
     * @param ManagerInterface $eventPrefix
     * @param ManagerInterface $eventObject
     * @param ManagerInterface $resourceModel
     * @param Document::class
     * @param AdapterInterface $connection
     * @param AbstractDb $resource
     */

    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        $mainTable,
        $eventPrefix,
        $eventObject,
        $resourceModel,
        $model = \Magento\Framework\View\Element\UiComponent\DataProvider\Document::class,
        \Magento\Framework\DB\Adapter\AdapterInterface $connection = null,
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null
    ) {
        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $connection,
            $resource
        );
        $this->_eventPrefix = $eventPrefix;
        $this->_eventObject = $eventObject;
        $this->_init($model, $resourceModel);
        $this->setMainTable($mainTable);
    }

    /**
     * To get Aggregations
     *
     * @return void
     */

    public function getAggregations()
    {
        return $this->aggregations;
    }

    /**
     * To set Aggregations
     *
     * @param string $aggregations
     * @return $this
     */

    public function setAggregations($aggregations)
    {
        $this->aggregations = $aggregations;
    }

    /**
     * To get SearchCriteria
     *
     * @return null
     */

    public function getSearchCriteria()
    {
        return null;
    }

    /**
     * To set SeachCriteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return $this
     */

    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria)
    {
        return $this;
    }

    /**
     * To get Total count
     *
     * @return int
     */

    public function getTotalCount()
    {
        return $this->getSize();
    }

    /**
     * To set Totalcount
     *
     * @param int $totalCount
     */

    public function setTotalCount($totalCount)
    {
        return $this;
    }

    /**
     * To set Items
     *
     * @param array $items
     */
    
    public function setItems(?array $items = null)
    {
        return $this;
    }
}
