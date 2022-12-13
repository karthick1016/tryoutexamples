<?php

namespace Create\Address\Api;

interface CreateRepositoryInterface
{
    /**
     * To save the values
     *
     * @param CreateInterface $create
     */
    
    public function save(\Create\Address\Api\Data\CreateInterface $create);

    /**
     * To get values by id
     *
     * @param int $createId
     */
    
    public function get($createId);

    /**
     * To delete the values
     *
     * @param CreateInterface $create
     */
    
    public function delete(\Create\Address\Api\Data\CreateInterface $create);
    
     /**
     * To delete value by id
     *
     * @param int $createId
     */
    
    public function deleteById($createId);
}
