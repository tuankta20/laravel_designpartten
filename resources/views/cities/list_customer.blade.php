@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-xl-auto">
            <a href="{{route('customers.create')}}"><img src="https://img.icons8.com/nolan/50/000000/add.png"></a>
            <div class="col-xl-auto-" style="border:#95999c solid 1px">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listCustomer as $key => $customer)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$customer->firstName}}</td>
                            <td>{{$customer->lastName}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->city->cityName}}</td>
                            <td><img src="{{asset("/storage/upload/$customer->image")}}" alt="" width="80" height="80"></td>
                            <td>
                                <a href="{{route('customers.destroy',$customer->id)}}">
                                    <img src="https://img.icons8.com/nolan/30/000000/delete-sign.png" alt="delete">
                                </a>
                            </td>
                            <td>
                                <a href="{{route('customers.edit',$customer->id)}}">
                                    <img src="https://img.icons8.com/nolan/30/000000/edit.png">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
