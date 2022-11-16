<?php

namespace PlaceOrderAfter\Mymodule1\Ui\Component\Listing\Column;

class HelloActions extends \Magento\Ui\Component\Listing\Columns\Column
{
    public const URL_PATH_EDIT = 'createmenubackend/hello/edit';
    public const URL_PATH_DELETE = 'createmenubackend/hello/delete';
    /**
     * @var UrlBuilder
     */
    protected $urlBuilder;
    /**
     * Dependency Injection
     *
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
     * For actions
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
                                        'message'=>__('Are you sure you want to delete a record')
                                    ]
                            ]
                                    ];
                }
            }
        }
        return $dataSource;
    }
}
