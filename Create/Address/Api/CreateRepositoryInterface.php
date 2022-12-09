<?php

namespace Create\Address\Api;

interface CreateRepositoryInterface
{
    public function save(\Create\Address\Api\Data\CreateInterface $create);

    public function get($createId);

    public function delete(\Create\Address\Api\Data\CreateInterface $create);

    public function deleteById($createId);
}