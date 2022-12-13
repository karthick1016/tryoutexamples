<?php
namespace Create\Address\Plugin\Checkout\Block;

// use \Create\Address\Helper\Helper;
use Create\Address\Model\ResourceModel\Create\CollectionFactory;

class LayoutProcessorPlugin
{
    /**
     * @var HelperData
     */

    protected $_helperData;

    /**
     * @var CreateCollection
     */

    protected $_createCollection;

    /**
     * @param CollectionFactory $createCollection
     */

    public function __construct(CollectionFactory $createCollection)
    {
        $this->_createCollection = $createCollection;
    }
    
    /**
     * To get Value from helper
     */
    
    private function getAllValues()
    {
        return $this->_createCollection->create();
    }

    /**
     * To create a field
     *
     * @param LayoutProcessor $subject
     * @param array $jsLayout
     *
     * @return $this
     */

    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {
        $array = $this->getAllValues();
        foreach ($array as $items) {
            $array1[] = [$items->getType(),$items->getValue(),$items->getPlace(),
            $items->getSort_order(),$items->getRegex()];
        }
        $inputs = array_column($array1, 0);
        $label = array_column($array1, 1);
        $id = array_column($array1, 2);
        $sortOrder = array_column($array1, 3);
        $regex = array_column($array1, 4);
        $countInput = count($inputs);
        $countLabel = count($label);
        $countId = count($id);
        $countSortOrder = count($sortOrder);
        $countRegex = count($regex);
       
        for ($i=0,$j=0,$k=0,$l=0,$m=0; $i<$countInput,$j<$countLabel,$k<$countId,
        $l<$countSortOrder,$m<$countRegex; $i++,$j++,$k++,$l++,$m++) {
            $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
            ['shippingAddress']['children']['shipping-address-fieldset']['children'][$id[$k]] =
            $this->prepareProcess('shippingAddress', $inputs[$i], $label[$j], $id[$k], $sortOrder[$l], $regex[$m]);
        }
        return $jsLayout;
    }

    /**
     * To return  create field using array
     *
     * @param string $dateScopePrefix
     * @param string $input
     * @param string $label
     * @param string $id
     * @param int $sortOrder
     * @param string $regex
     */

    private function prepareProcess($dateScopePrefix, $input, $label, $id, $sortOrder, $regex)
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
