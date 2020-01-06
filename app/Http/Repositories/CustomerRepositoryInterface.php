<?php


namespace App\Http\Repositories;


interface CustomerRepositoryInterface extends RepositoryInterface
{
       public function search($search);
}
