<?php

namespace NewTable\Mymodule\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Install Schema
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('afterplaceorder');

        if ($setup->getConnection()->isTableExists($tableName)!=true) {
            $table = $setup->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'id',
                    Table::TYPE_INTEGER,
                    null,
                    [
                        'identity'=>true,
                        'unsigned'=>true,
                        'nullable'=>false,
                        'primary'=>true
                    ],
                    'ID'
                )
                ->addColumn(
                    'orderid',
                    Table::TYPE_INTEGER,
                    10,
                    ['nullable'=>false],
                    'Orderid'
                )
                ->addColumn(
                    'firstname',
                    Table::TYPE_TEXT,
                    25,
                    ['nullable'=>false],
                    'Firstname'
                )
                ->addColumn(
                    'lastname',
                    Table::TYPE_TEXT,
                    25,
                    ['nullable'=>false],
                    'Lastname'
                )
                ->addColumn(
                    'method',
                    Table::TYPE_TEXT,
                    40,
                    ['nullable'=>false],
                    'Method'
                )
                ->setComment('AfterPlaceOrder');
                $setup->getConnection()->createTable($table);
        }
        $setup->endSetup();
    }
}
