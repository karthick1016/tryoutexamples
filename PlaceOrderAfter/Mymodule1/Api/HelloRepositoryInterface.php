<?php

namespace PlaceOrderAfter\Mymodule1\Api;

interface HelloRepositoryInterface
{
    /**
     * To save the values
     *
     * @param HelloInterface $hello
     */
    public function save(\PlaceOrderAfter\Mymodule1\Api\Data\HelloInterface $hello);

    /**
     * To get value
     *
     * @param int $helloId
     */

    public function get($helloId);

    /**
     * To delete the value
     *
     * @param HelloInterface $hello
     */
    public function delete(\PlaceOrderAfter\Mymodule1\Api\Data\HelloInterface $hello);

    /**
     * To delete By id
     *
     * @param int $helloId
     */
    public function deleteById($helloId);
}
