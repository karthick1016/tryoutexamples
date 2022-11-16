<?php

namespace NewTable\Mymodule2\Setup;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    /**
     * InstallSchema
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists('examples')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('examples')
            )
            ->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'identity'=>true,
                    'nullable'=>false,
                    'primary'=>true,
                    'unsigned'=>true,
                ],
                'Id'
            )
            ->addColumn(
                'orderid',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                10,
                [
                    'nullable'=>false,
                ],
                'OrderId'
            )
            ->addColumn(
                'firstname',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'FirstName'
            )
            ->addColumn(
                'lastname',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'LastName'
            )
            ->addColumn(
                'method',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Method'
            );
            $installer->getConnection()->createTable($table);
            $installer->getConnection()->addIndex(
                $installer->getTable('examples'),
                $setup->getIdxName(
                    $installer->getTable('examples'),
                    ['firstname','lastname','method'],
                    \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
                ),
                ['firstname','lastname','method'],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            );
        }
        $installer->endSetup();
    }
}
