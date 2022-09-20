@extends('layout')

@section('title', 'Ma Homepage')


@section('content')
    <div class="row col-12">
        <div class="card ms-2 mb-3 col-md-2">
            <img class="card-img-top" src={{$product->image}} alt="#">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p>Price : {{$product->price}}</p>
            </div>
        </div>
    </div>
@endsection












