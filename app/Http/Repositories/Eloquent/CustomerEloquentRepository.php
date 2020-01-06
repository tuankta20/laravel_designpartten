<?php


namespace App\Http\Repositories\Eloquent;


use App\City;
use App\Customer;
use App\Http\Repositories\CustomerRepositoryInterface;

class CustomerEloquentRepository implements CustomerRepositoryInterface
{
    protected $customer;
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function search($search)
    {
       return $this->customer->all();
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
       return $this->city->all();
    }

    public function save($obj)
    {
        // TODO: Implement save() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }
}
