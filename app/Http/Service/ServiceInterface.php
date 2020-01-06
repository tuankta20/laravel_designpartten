<?php


namespace App\Http\Service;


interface ServiceInterface
{
         public function getAll();
         public function store($request);
         public function edit( $id);
         public function update($request, $id);
         public function destroy( $id);
}
