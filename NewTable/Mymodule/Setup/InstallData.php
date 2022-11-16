<?php

namespace NewTable\Mymodule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * Install Data
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $tableName = $setup->getTable('afterplaceorder');
        if ($setup->getConnection()->isTableExists($tableName)==true) {
            $data = [
                [
                    'orderid'=>000000011,
                    'firstname'=>'Karthick',
                    'lastname'=>'Prabhu',
                    'method'=>'Event-Observer',
                ],
                [
                    'orderid'=>000000012,
                    'firstname'=>'Karthi',
                    'lastname'=>'Prabha',
                    'method'=>'Event-Observer',
                ]
    
            ];
            foreach ($data as $item) {
                $setup->getConnection()->insert($tableName, $item);
            }
        }
        
            $setup->endSetup();
    }
}
