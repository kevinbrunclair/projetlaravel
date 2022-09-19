@extends('layout')

@section('title', 'Ma Homepage')

@section('content')
    <div class="row col-12">
        @foreach($products as $product)
{{--            <div class="card ms-2 mb-3 col-md-2">--}}
{{--                <img class="card-img-top" src={{$product->image}} alt="Card image cap">--}}
{{--                <div class="card-body">--}}
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p>Price : {{$product->price}}</p>
{{--                    <p>Available : {{$product->available}}</p>--}}
{{--                    <p>Discount : {{$product->discount}}</p>--}}
{{--                    <p class="card-text">Description</p>--}}
{{--                    <a href="#" class="btn btn-primary">Details</a>--}}
{{--                </div>--}}
{{--            </div>--}}

       @endforeach
    </div>
@endsection
