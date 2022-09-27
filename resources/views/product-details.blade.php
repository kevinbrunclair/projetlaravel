@extends('layout')

@section('title', 'Ma Homepage')


@section('content')
    <div class="row col-12">
        <div class="card ms-2 mb-3 col-md-3">
            <img class="card-img-top" src={{$product->image}} alt="#">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p>Price : {{$product->price}}</p>
                <p>Quantity : {{$product->quantity}}</p>
                <form action="/cart" method="post">
                    @csrf
                    <label for="quantity">Quantity ordered: </label>
                    <input type="number" id="quantity" name="quantity" min="1">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    @error('quantity')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <button class="bg-light" name="button">add to cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection












