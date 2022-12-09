<?php


namespace Create\Address\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $_postFactory;

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if(version_compare($context->getVersion(),'1.1.1')<0)
        {
            $tableName = $setup->getTable('address');

            if($setup->getConnection()->isTableExists($tableName)==true)
            {
                $data = [
                    ['type'=>'text',
                    'value'=>'gender',
                    'place'=>'below firstname',
                    'sort_order'=>10]
                ];
                foreach ($data as $item) {
                    $setup->getConnection()->insert($tableName, $item);
                }
            }
        }
        $setup->startSetup();
    }
}