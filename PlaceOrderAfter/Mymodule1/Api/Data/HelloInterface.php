<?php

namespace PlaceOrderAfter\Mymodule1\Api\Data;

interface HelloInterface
{
    public const HELLO_ID = 'id';
    public const FIRSTNAME = 'firstname';
    public const LASTNAME = 'lastname';
    public const METHOD = 'method';

    /**
     * To return id
     *
     * @return int
     */
    public function getHelloId();

    /**
     * To set id
     *
     * @param int $helloId
     */
    public function setHelloId($helloId);
    
    /**
     * To return FirstName
     *
     * @return string
     */
    public function getFirstName();

    /**
     * To set Firstname
     *
     * @param string $firstName
     */
    public function setFirstName($firstName);

    /**
     * To return Lastname
     *
     * @return string
     */
    public function getLastName();

    /**
     * To set lastname
     *
     * @param string $lastName
     */
    public function setLastName($lastName);

    /**
     * To return method
     *
     * @return string
     */
    public function getMethod();

    /**
     * To set Method
     *
     * @param string $method
     */
    public function setMethod($method);
}
