@extends('layoutbackoffice')

@section('title', 'Ma Homepage')

@section('content')

    <div class="row col-2 ms-2">
        <a href="/backoffice/add" class="btn btn-secondary">Add products</a>
    </div>

    <div class="row col-12">
        @foreach($products as $product)
            <div class="card col-md-3">
                <div class="card-body">
                    <img class="card-img-top" src={{$product->image}} alt="Card image cap">
                    <h4 class="card-title">{{$product->name}}</h4>
                    <p>Price : {{$product->price}}</p>
                    <p>Available : {{$product->available}}</p>
                    <p>Discount : {{$product->discount}}</p>
                    <p class="card-text">Description</p>
                    <a href="backoffice/{{$product->id}}/edit" class="btn btn-secondary">Edit products</a>
                    <form action="/backoffice/{{$product->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
    @endforeach
@endsection
