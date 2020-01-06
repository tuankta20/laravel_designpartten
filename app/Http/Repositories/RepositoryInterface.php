<?php


namespace App\Http\Repositories;


interface RepositoryInterface
{
    function getAll();

    function save($obj);

    function findById($id);

    function delete($obj);

}
