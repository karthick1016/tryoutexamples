<?php

namespace Create\Demoapi\Model\Api;

use Create\Demoapi\Api\ProductRepositoryInterface;
use Create\Demoapi\Api\ResponseItemInterfaceFactory;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Model\ResourceModel\Product\Action;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\StoreManagerInterface;

class ProductRepository implements ProductRepositoryInterface
{
    private $productAction;

    private $productCollectionFactory;

    private $responeItemFactory;

    private $storeManager;

    public function __construct(
        Action $productAction,
        CollectionFactory $collectionFactory,
        ResponseItemInterfaceFactory $responeItemFactory,
        StoreManagerInterface $storeManager
    )
    {
        $this->productAction = $productAction;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->responeItemFactory = $responeItemFactory;
        $this->storeManager = $storeManager;
    }

    public function getItem(int $id):mixed
    {
        $collection = $this->getProductCollection()->addAttributeToFilter('entity_id',['eq'=>$id]);

        $product = $collection->getFirstItem();

        if(!$product->getId())
        {
            throw new NoSuchEntityException(__('Product not found'));
        }
        return $this->getResponseItemFromProduct($product);
    }

    private function getProductCollection():mixed
    {
        $collection = $this->productCollectionFactory->create();
        $collection->addAttributeToSelect(
            [
                'entity_id',
                ProductInterface::SKU,
                ProductInterface::NAME,
                'description'
            ],
            'left'
        );
        return $collection;
    }

    private function getResponseItemFromProduct(ProductInterface $product) : mixed
    {
        $responseItem = $this->responeItemFactory->create();
        $responseItem->setId($product->getId())
                    ->setSku($product->getSku())
                    ->setName($product->getName())
                    ->setDescription($product->getDescription());
                return $responseItem;
    }

}

?>