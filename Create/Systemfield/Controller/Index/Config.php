<?php

namespace Create\Systemfield\Controller\Index;

use Magento\Framework\App\Action\ActionInterface;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;

class Config implements HttpGetActionInterface
{
    /**
     * @var Factory
     */
    protected $pageFactory;
    /**
     * @var Request
     */
    private $request;

    /**
     * Dependency Injection
     *
     * @param PageFactory $pageFactory
     * @param RequestInterface $request
     */

    public function __construct(PageFactory $pageFactory, RequestInterface $request)
    {
        $this->pageFactory = $pageFactory;
        $this->request = $request;
    }

    /**
     * To set the Title
     *
     * @return string
     */
    public function execute()
    {
        $pageFactory = $this->pageFactory->create();
        $pageFactory->getConfig()->getTitle()->set(__("Config"));
        return $this->pageFactory->create();
    }
}
