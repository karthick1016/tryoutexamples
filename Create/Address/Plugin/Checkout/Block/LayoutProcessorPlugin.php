<?php
namespace Create\Address\Plugin\Checkout\Block;
 

use \Create\Address\Helper\Helper;

class LayoutProcessorPlugin
{
    protected $_helperData;
    protected $_createCollection;
    
    public function __construct(Helper $helperData)
    {        
        $this->_helperData = $helperData;
    }
    private function getAllValues()
    {   
        return $this->_helperData->getCollectionData();
    }

    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) { 
        $array = $this->getAllValues();
        // var_dump($array);
        // exit();
        foreach($array as $items)
        {
            $array1[] = [$items->getType(),$items->getValue(),$items->getPlace(),$items->getSort_order(),$items->getRegex()];
        }
        $inputs = array_column($array1,0);
        $label = array_column($array1,1);
        $id = array_column($array1,2);
        $sortOrder = array_column($array1,3);
        $regex = array_column($array1,4);
        // print_r($inputs);
        // print_r($label);
        // print_r($id);
        // print_r($sortOrder);
        // print_r($regex);
       
        for($i=0,$j=0,$k=0,$l=0,$m=0;$i<count($inputs),$j<count($label),$k<count($id),$l<count($sortOrder),$m<count($regex);$i++,$j++,$k++,$l++,$m++)
        {
            $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
            ['shippingAddress']['children']['shipping-address-fieldset']['children'][$id[$k]] = 
            $this->prepareProcess('shippingAddress',$inputs[$i],$label[$j],$id[$k],$sortOrder[$l],$regex[$m]);
        }  
        // exit();
        return $jsLayout;
    }
    private function prepareProcess($dateScopePrefix,$input,$label,$id,$sortOrder,$regex)
    {
        
        $array = [
            'component' => 'Magento_Ui/js/form/element/abstract',
            'config' => [
                'customScope' => $dateScopePrefix.'.custom_attributes',
                'customEntry' => null,
                'template' => 'ui/form/field',
                'elementTmpl' => 'ui/form/element/'.$input,
                'options' => [],
                'id' => 'custom-field-text'
            ],
            'dataScope' => $dateScopePrefix.$id,
            'label' => $label,
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [
                'required-entry' => true,
                'pattern'=>$regex
            ],
            'sortOrder' => $sortOrder,
            /*'customEntry' => null,*/
            'id' => 'custom-field-text'
        ];

        return $array;      
    }
}