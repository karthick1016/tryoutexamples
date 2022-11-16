<?php

namespace Create\Module1\Block;

use Magento\Framework\View\Element\Template;

class Display extends Template
{
    /**
     * Return a string
     *
     * @param string $text
     * @return string
     */
    public function sayHello($text)
    {
        return $text;
    }
}
