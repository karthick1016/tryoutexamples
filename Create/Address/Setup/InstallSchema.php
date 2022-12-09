<?php

namespace Create\Address\Setup;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if(!$installer->tableExists('address')){
            $table = $installer->getConnection()->newTable(
                $installer->getTable('address')
            )
            ->addColumn(
                'id',
                \Magento\Framework\Db\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'identity'=>true,
                    'nullable'=>false,
                    'primary'=>true,
                    'unsigned'=>true
                ],
                'ID'
            )
            ->addColumn(
                'type',
                \Magento\Framework\Db\Ddl\Table::TYPE_TEXT,
                255,
                [
                    'nullable'=>false
                ],
                'Type'
            )
            ->addColumn(
                'value',
                \Magento\Framework\Db\Ddl\Table::TYPE_TEXT,
                255,
                [
                    'nullable'=>false
                ],
                'Value'
            )
            ->addColumn(
                'place',
                \Magento\Framework\Db\Ddl\Table::TYPE_TEXT,
                255,
                [
                    'nullable'=>false
                ],
                'Place'
            )
            ->addColumn(
                'sort_order',
                \Magento\Framework\Db\Ddl\Table::TYPE_INTEGER,
                255,
                [
                    'nullable'=>false
                ],
                'Sort_order'
            );
            $installer->getConnection()->createTable($table);
            $installer->getConnection()->addIndex(
                $installer->getTable('address'),
                $setup->getIdxName(
                    $installer->getTable('address'),
                    ['type','value','place'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                    
                ),
                ['type','value','place'],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            );
        }
        $installer->endSetup();
    }
}
