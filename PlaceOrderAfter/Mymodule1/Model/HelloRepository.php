<?php

namespace PlaceOrderAfter\Mymodule1\Model;

use PlaceOrderAfter\Mymodule1\Api\Data\HelloInterface;
use PlaceOrderAfter\Mymodule1\Api\Data\HelloInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;
use PlaceOrderAfter\Mymodule1\Api\HelloRepositoryInterface;
use PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello as ResourceHello;
use PlaceOrderAfter\Mymodule1\Model\ResourceModel\Hello\CollectionFactory as HelloCollectionFactory;

class HelloRepository implements HelloRepositoryInterface
{
    /**
     * @var Resource
     */
    protected $resource;
    /**
     * @var HelloFactory
     */
    protected $helloFactory;
    /**
     * @var CollectionFactory
     */
    protected $helloCollectionFactory;
    /**
     * @var Processor
     */
    protected $collectionProcessor;
    /**
     * @var ObjectHelper
     */
    protected $dataObjectHelper;
    /**
     * @var ObjectProcessor
     */
    protected $dataObjectProcessor;
    /**
     * @var Manager
     */
    private $storeManager;
    /**
     * Dependency Injection
     *
     * @param ResourceHello $resource
     * @param HelloInterfaceFactory $helloFactory
     * @param HelloCollectionFactory $helloCollectionFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceHello $resource,
        HelloInterfaceFactory $helloFactory,
        HelloCollectionFactory $helloCollectionFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->helloFactory = $helloFactory;
        $this->helloCollectionFactory = $helloCollectionFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * Save Function
     *
     * @param HelloInterface $hello
     */

    public function save(HelloInterface $hello)
    {
        try {
            $this->resource->save($hello);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the hello: %1',
                $exception->getMessage()
            ));
        }
        return $hello;
    }
    /**
     * Get function
     *
     * @param int $helloId
     */
    public function get($helloId)
    {
        $hello = $this->helloFactory->create();
        $this->resource->load($hello, $helloId);
        if (!$hello->getId()) {
            throw new NoSuchEntityException(__('Hello with id "%1" does not exist.', $helloId));
        }
        return $hello;
    }

    /**
     * Delete Function
     *
     * @param HelloInterface $hello
     */

    public function delete(HelloInterface $hello)
    {
        try {
            $helloModel = $this->helloFactory->create();
            $this->resource->load($helloModel, $hello->getHelloId());
            $this->resource->delete($helloModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Hello: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * Delete By Id
     *
     * @param int $helloId
     */
    public function deleteById($helloId)
    {
        return $this->delete($this->get($helloId));
    }
}
