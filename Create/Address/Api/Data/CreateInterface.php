<?php

namespace Create\Address\Api\Data;

interface CreateInterface
{   
    const CREATE_ID = 'id';
    const TYPE = 'type';
    const VALUE = 'value';
    const PLACE = 'place';
    const SORT_ORDER = 'sort_order';

   public function getCreateId();

   public function setCreateId($createId);

   public function getType();

   public function setType($type);

   public function getValue();

   public function setValue($value);

   public function getPlace();

   public function setPlace($place);

   public function getSortOrder();

   public function setSortOrder($sortOrder);
}