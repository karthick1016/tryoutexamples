<?php

declare(strict_types=1);

namespace Newcreate\Calculator\Test\Unit\Helper;

class DataTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Message
     */
    protected $expectedMessage;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $objectManagerHelper = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $className = \Newcreate\Calculator\Helper\Data::class;
        $arguments = $objectManagerHelper->getConstructArguments($className);

        $this->helper = $objectManagerHelper->getObject($className, $arguments);
    }

    /**
     * TO get message
     *
     * @return void
     */
    public function testGetMessage(): void
    {
        $this->expectedMessage = 'Hello Karthi!!!';

        $this->assertEquals($this->expectedMessage, $this->helper->getMessage());

        $this->assertTrue(!empty($this->expectedMessage));

        $this->assertTrue(strlen($this->expectedMessage)>0);
    }
}
