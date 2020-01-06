<?php

namespace App\Http\Controllers;

use App\Http\Service\CityServiceInterface;
use App\Http\Service\impl\CityService;
use Illuminate\Http\Request;

class CityController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function index()
    {
        $cities = $this->cityService->getAll();
        return view('cities.list_city', compact('cities'));
    }

    public function create()
    {
        return view('cities.create_city');
    }

    public function store(Request $request)
    {
        $this->cityService->store($request);
        return redirect()->route('cities');
    }

    public function edit($id)
    {
        $city = $this->cityService->edit($id);
        return view('cities.edit_city', compact('city'));
    }

    public function update(Request $request, $id)
    {
        $this->cityService->update($request, $id);
        return redirect()->route('cities');
    }

    public function destroy($id)
    {
     $this->cityService->destroy($id);
        return redirect()->route('cities');
    }
}
