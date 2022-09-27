@extends('layout')


@section('title', 'Ma Homepage')


@section('content')
    <div class="row col-12">
        @foreach($products as $product)
            <div class="card col-md-3 bg-light">
                <div class="card-body">
                    <img class="card-img-top" src={{$product->image}} alt="Card image cap">
                    <h4 class="card-title">{{$product->name}}</h4>
                    <p>Price grosse promo : {{$product->price}}</p>
                    <p>Available : {{$product->available}}</p>
                    <p>Discount : {{$product->discount}}</p>
                    <p class="card-text">Description</p>
                    <a href="/product/{{$product->id}}" class="btn btn-primary">Order</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection















