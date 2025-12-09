<?php
include "Entity.php";
include $_SERVER["DOCUMENT_ROOT"] . "/src//DataAbstractions/Exceptions/RepositoryException.php";
interface Repository
{
    function get($id): Entity;
    /**
     * @return Entity[]
     */
    function all(): array;
    function delete(int $id);
    function update(Entity $elemet);
    function create(Entity $element);
    function count();
}
