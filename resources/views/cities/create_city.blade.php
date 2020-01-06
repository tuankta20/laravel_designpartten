@extends('cities.city_information_form')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add city') }}</div>
                    <div class="card-body">
                        <form method="post" action="{{route('cities.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                       class="form-control" name="name">

                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
