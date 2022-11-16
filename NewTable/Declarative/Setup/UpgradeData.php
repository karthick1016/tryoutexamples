<?php

namespace NewTable\Declarative\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Setup\Module\Setup;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * To upgrade Data
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '2.2.3')<0) {
            $tableName = $setup->getTable('quote_item_file');

            if ($setup->getConnection()->isTableExists($tableName)==true) {
                $data = [
                    // [
                    //     'firstname'=>'Karthick',
                    //     'lastname'=>'Prabhu',
                    //     'method'=>'Preference',
                    //     'order_id'=>12,
                    //     'product_name'=>'Shirt'
                    // ],
                    // [
                    //     'firstname'=>'Neffisha',
                    //     'lastname'=>'Karthick',
                    //     'method'=>'Observer',
                    //     'order_id'=>11,
                    //     'product_name'=>'Top'
                    // ],
                    // [
                    //     'firstname'=>'Aravind',
                    //     'lastname'=>'Kumar',
                    //     'method'=>'plugin',
                    //     'order_id'=>13,
                    //     'product_name'=>'Pant'
                    // ],
                    // [
                    //     'firstname'=>'Yuva',
                    //     'lastname'=>'Raj',
                    //     'method'=>'Preference',
                    //     'order_id'=>14,
                    //     'product_name'=>'Tshirt'
                    // ],
                    // [
                    //     'firstname'=>'Preethi',
                    //     'lastname'=>'Lakshmi',
                    //     'method'=>'Plugin',
                    //     'order_id'=>15,
                    //     'product_name'=>'Leggins'
                    // ],
                    [
                        'number'=>12345567
                    ],
                    [
                        'number'=>23456769
                    ],
                    [
                        'number'=>1234345656
                    ]
                ];
                foreach ($data as $item) {
                    $setup->getConnection()->insert($tableName, $item);
                }
            }
        }
        $setup->endSetup();
    }
}
