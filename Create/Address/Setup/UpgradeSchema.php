<?php

namespace Create\Address\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;


class UpgradeSchema implements UpgradeSchemaInterface
{   
    
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $quote = 'quote';
        $orderTable = 'sales_order';

        if(version_compare($context->getVersion(),'1.2.2','<'))
        {
            $installer->getConnection()->addColumn(
                $installer->getTable('address'),
                'regex',
                [
                    'type'=>\Magento\Framework\Db\Ddl\Table::TYPE_TEXT,
                    'nullable'=>false,
                    'length'=>255,
                    'comment'=>'Regex'
                ]
                );
        }
    }
}