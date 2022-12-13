<?php

namespace Energytrust\Criteria\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * To install the schema
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        if (!$installer->tableExists('criteria')) {
            $table = $installer->getConnection()->newTable(
                $installer->getTable('criteria')
            )
            ->addColumn(
                'id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity'=>true,
                    'nullable'=>false,
                    'primary'=>true,
                    'unsigned'=>true,
                ],
                'ID'
            )
            ->addColumn(
                'firstname',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'FirstName'
            )
            ->addColumn(
                'lastname',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'LastName'
            )
            ->addColumn(
                'email',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Email'
            )
            ->addColumn(
                'number',
                Table::TYPE_BIGINT,
                255,
                ['nullable'=>false],
                'Number'
            )
            ->addColumn(
                'address',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Address'
            )
            ->addColumn(
                'city',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'City'
            )
            ->addColumn(
                'state',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'State'
            )
            ->addColumn(
                'zipcode',
                Table::TYPE_INTEGER,
                255,
                ['nullable'=>false],
                'Zipcode'
            )
            ->addColumn(
                'cooling_system_type',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Cooling System Type'
            )
            ->addColumn(
                'heating_system_type',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Heating System Type'
            )
            ->addColumn(
                'family_type',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Family Type'
            )
            ->addColumn(
                'wifi',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Wifi'
            )
            ->addColumn(
                'thermostat',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Thermostat'
            )
            ->addColumn(
                'location',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Location'
            )
            ->addColumn(
                'total',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Total'
            )
            ->addColumn(
                'home_type',
                Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'Home Type'
            )
            ->setComment('Criteria')
            ->setOption('type', 'InnoDB')
            ->setOption('charset', 'utf8');
            $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();
    }
}