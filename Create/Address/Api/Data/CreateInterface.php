<?php

namespace Create\Address\Api\Data;

interface CreateInterface
{

    public const CREATE_ID = 'id';
    public const TYPE = 'type';
    public const VALUE = 'value';
    public const PLACE = 'place';
    public const SORT_ORDER = 'sort_order';
    public const REGEX = 'regex';

    /**
     * To return id
     *
     * @return int
     */

    public function getCreateId();
    
    /**
     * To set id
     *
     * @param int $createId
     *
     * @return $this
     */
    
     public function setCreateId($createId);
    
     /**
     * To return type
     *
     * @return string
     */
    
    public function getType();
    
    /**
     * To set Type
     *
     * @param string $type
     *
     * @return $this
     */
    
    public function setType($type);
    
     /**
     * To return Value
     *
     * @return string
     */
    
    public function getValue();
    
     /**
     * To set Value
     *
     * @param string $value
     *
     * @return $this
     */
    
    public function setValue($value);
    
     /**
     * To return Place
     *
     * @return string
     */
    
    public function getPlace();
    
     /**
     * To set Place
     *
     * @param string $place
     *
     * @return $this
     */
    
    public function setPlace($place);
    
     /**
     * To return sortOrder
     *
     * @return int
     */
    
    public function getSortOrder();
    
     /**
     * To set sortOrder
     *
     * @param int $sortOrder
     *
     * @return $this
     */
    
    public function setSortOrder($sortOrder);
    
     /**
     * To return Regex
     * 
     * @return string
     */
    
    public function getRegex();
    
     /**
     * To set Regex
     * 
     * @param int $regex
     * 
     * @return $this
     */
    
    public function setRegex($regex);
}
