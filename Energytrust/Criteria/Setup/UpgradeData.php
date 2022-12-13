<?php

namespace Energytrust\Criteria\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    /**
     * To upgrade the data
     * 
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if($context->getVersion() && version_compare($context->getVersion(),'1.1.1')<0)
        {
            $tableName = $setup->getTable('criteria');

            $data = [
                [
                    'firstname'=>'Yuvaraj',
                    'lastname'=>'A',
                    'email'=>'yuvi27@gmail.com',
                    'number'=>'1234567891',
                    'address'=>'Sulivan street',
                    'city'=>'Coimbatore',
                    'state'=>'Tamilnadu',
                    'zipcode'=>'628112',
                    'cooling_system_type'=>'none',
                    'heating_system_type'=>'none',
                    'family_type'=>'none',
                    'wifi'=>'yes',
                    'thermostat'=>'other',
                    'location'=>'Living Room',
                    'total'=>3,
                    'home_type'=>'own'
                ]
                ];

                foreach($data as $item)
                {
                    $setup->getConnection()->insert($tableName,$item);
                }
        }
        $setup->endSetup();
    }
}


?>