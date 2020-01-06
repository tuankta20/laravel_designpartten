<?php


namespace App\Http\Service\impl;


use App\City;
use App\Http\Repositories\Eloquent\CityEloquentRepository;
use App\Http\Service\CityServiceInterface;

class CityService implements CityServiceInterface
{
    protected $cityRepository;
    public function __construct(CityEloquentRepository $cityEloquentRepository)
    {
        $this->cityRepository=$cityEloquentRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->cityRepository->getAll();

    }

    public function store($request)
    {
      $cities = new City();
      $cities->name = $request->name;
      $this->cityRepository->save($cities);
    }

    function edit($id)
    {
        return $this->cityRepository->findById($id);
    }

    public function update($request, $id)
    {
       $cities =$this->cityRepository->findById($id);
       $cities->name = $request->name;
       $this->cityRepository->save($cities);
    }

    public function destroy($id)
    {
      $city= $this->cityRepository->findById($id);
       $this->cityRepository->delete($city);

    }
}
