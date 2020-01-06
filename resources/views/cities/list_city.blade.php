@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-xl-auto">
            <div class="col-xl-auto-" style="border:#95999c solid 1px">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col" colspan="3">City Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cities as $city)
                        <tr>
                            <th scope="row">{{$city->id}}</th>
                            <td>
                                {{$city->name}}
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
