<?php

namespace NewTable\Declarative\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * To Upgrade Schema
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '2.2.2', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('quote_item_file'),
                'number',
                [
                    'type' =>Table::TYPE_INTEGER,
                    'nullable'=>false,
                    'Comment'=>'Number'
                ]
            );
        }
        $setup->endSetup();
    }
}
