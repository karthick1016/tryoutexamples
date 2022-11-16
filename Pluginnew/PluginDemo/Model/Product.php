<?php

namespace Pluginnew\PluginDemo\Model;

class Product
{
    /**
     * Function for AfterGetPrice
     *
     * @param Product $subject
     * @param int $result
     */
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        $result+=10;
        return $result;
    }
    /**
     * Before Add Product Function
     *
     * @param Cart $subject
     * @param int $productInfo
     * @param int $requestInfo
     */
    public function beforeAddProduct(\Magento\Checkout\Model\Cart $subject, $productInfo, $requestInfo = null)
    {
        $requestInfo['qty'] = 10;
        return [$productInfo, $requestInfo];
    }
}
