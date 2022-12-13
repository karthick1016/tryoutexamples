<?php

namespace Create\Address\Ui\Component\Listing\Column;

class CreateActions extends \Magento\Ui\Component\Listing\Columns\Column
{
    public const URL_PATH_EDIT = 'createaddress/create/edit';
    public const URL_PATH_DELETE = 'createaddress/create/delete';
    
    /**
     * @var UrlBuilder
     */

    protected $urlBuilder;

    /**
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param UrlInterface $urlBuilder
     * @param array $components
     * @param array $data
     */

    public function __construct(
        \Magento\Framework\View\Element\UiComponent\ContextInterface $context,
        \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory,
        \Magento\Framework\UrlInterface $urlBuilder,
        array $components = [],
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * To Display Messages
     *
     * @param array $dataSource
     */
    
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if (isset($item['id'])) {
                    $item[$this->getData('name')] = [
                        'edit'=>[
                            'href'=>$this->urlBuilder->getUrl(
                                static::URL_PATH_EDIT,
                                [
                                    'id'=>$item['id']
                                ]
                            ),
                                'label'=>__('Edit')
                        ],
                        'delete'=>[
                            'href'=>$this->urlBuilder->getUrl(
                                static::URL_PATH_DELETE,
                                [
                                    'id'=>$item['id']
                                ]
                            ),
                                'label'=>__('Delete'),
                                'confirm'=>[
                                    'title'=>__('Delete Record'),
                                    'message'=>__('Are you sure want to delete this item?')
                                ]
                        ]
                                ];
                }
            }
        }
        return $dataSource;
    }
}
