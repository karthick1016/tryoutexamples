<?php

namespace NewTable\Mymodule3\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * Upgrade Schema
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.1.1')<0) {
            $tableName = $setup->getTable('sampletable');

            if ($setup->getConnection()->isTableExists($tableName) == true) {
                $data = [
                    [
                        'orderid'=>1234,
                        'firstname'=>'Karthi',
                        'lastname'=>'Prabhu',
                        'method'=>'Event-Observer'
                    ],
                    [
                        'orderid'=>1235,
                        'firstname'=>'Prabhu',
                        'lastname'=>'Karthick',
                        'method'=>'Event-Observer'
                    ]
                    ,
                    [
                        'orderid'=>1234,
                        'firstname'=>'Prabhu',
                        'lastname'=>'K.V',
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
