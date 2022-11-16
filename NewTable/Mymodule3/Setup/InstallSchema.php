<?php

namespace NewTable\Mymodule3\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

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
        $installer = $setup;
        $installer->startSetup();

        $tableName = $installer->getTable('sampletable');

        if($installer->getConnection()->isTableExists($tableName)!=true)
        {
            $table = $installer->getConnection()
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
                    null,
                    ['nullable'=>false],
                    'Orderid'
                )
                ->addColumn(
                    'firstname',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable'=>false],
                    "FirstName"
                )
                ->addColumn(
                    'lastname',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable'=>false],
                    "LastName"
                )
                ->addColumn(
                    'method',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable'=>false],
                    "Method"
                )
                ->setComment('SampleTable')
                ->setOption('type','InnoDB')
                ->setOption('charset','utf8');
                $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();
    }
}


?>