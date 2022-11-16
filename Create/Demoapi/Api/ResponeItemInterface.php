<?php

namespace Create\Demoapi\Api;

interface ResponseItemInterface
{
    const DATA_ID = 'id';
    const DATA_SKU = 'sku';
    const DATA_NAME = 'name';
    const DATA_DESCRIPTION = 'description';

    public function getId();

    public function getSku();
    
    public function getName();
    
    public function getDescription();
    
    public function setId(int $id);
    
    public function setSku(string $sku);
    
    public function setName(string $name);
    
    public function setDescription(string $description);
}


?>