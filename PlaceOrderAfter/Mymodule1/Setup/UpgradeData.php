<?php

namespace PlaceOrderAfter\Mymodule1\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * Upgrade Data
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.1.1')<0) {
            $tableName = $setup->getTable('placeafter');

            if ($setup->getConnection()->isTableExists($tableName)==true) {
                $data = [
                    [
                        'firstname'=>'karthi',
                        'lastname'=>'prabhu',
                        'method'=>'Event-Observer'
                    ],
                    [
                        'firstname'=>'Prabhu',
                        'lastname'=>'Karthi',
                        'method'=>'Event-Observer'
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
