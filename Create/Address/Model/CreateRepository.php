<?php

namespace Create\Address\Model;

use Create\Address\Api\Data\CreateInterface;
use Create\Address\Api\Data\CreateInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;
use Create\Address\Api\CreateRepositoryInterface;
use Create\Address\Model\ResourceModel\Create as ResourceCreate;
use Create\Address\Model\ResourceModel\Create\CollectionFactory as CreateCollectionFactory;

class CreateRepository implements CreateRepositoryInterface
{
    /**
     * @var Resource
     */

    protected $resource;
    
    /**
     * @var CreateFactory
     */

    protected $createFactory;
    
    /**
     * @var CreateCollectionFactory
     */

    protected $createCollectionFactory;
    
    /**
     * @var CollectionProcessor
     */

    protected $collectionProcessor;
    
    /**
     * @var DataObjectHelper
     */
    
    protected $dataObjectHelper;

    /**
     * @var DataObjectProcessor
     */

    protected $dataObjectProcessor;

    /**
     * @var StoreManager
     */

    private $storeManager;

    /**
     * @param ResourceCreate $resource
     * @param CreateInterfaceFactory $createFactory
     * @param CreateCollectionFactory $createCollectionFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */

    public function __construct(
        ResourceCreate $resource,
        CreateInterfaceFactory $createFactory,
        CreateCollectionFactory $createCollectionFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->createFactory = $createFactory;
        $this->createCollectionFactory = $createCollectionFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * To save the value
     *
     * @param CreateInterface $create
     */

    public function save(CreateInterface $create)
    {
        try {
            $this->resource->save($create);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the Create: %1',
                $exception->getMessage()
            ));
        }
    }

    /**
     * To get the value
     *
     * @param int $createId
     */

    public function get($createId)
    {
        $create = $this->createFactory->create();
        $this->resource->load($create, $createId);
        if (!$create->getId()) {
            throw new NoSuchEntityException(__('Hello with id "%1" does not exist.', $createId));
        }
        return $create;
    }

    /**
     * To delete the value
     *
     * @param CreateInterface $create
     */

    public function delete(CreateInterface $create)
    {
        try {
            $createModel = $this->createFactory->create();
            $this->resource->load($createModel, $create->getCreateId());
            $this->resource->delete($createModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Hello: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * To delete the value by id
     *
     * @param int $createId
     */

    public function deleteById($createId)
    {
        return $this->delete($this->get($createId));
    }
}
