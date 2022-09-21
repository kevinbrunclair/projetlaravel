@extends('layoutbackoffice')

@section('title', 'Ma Homepage')

@section('content')

    <h1>Edit product</h1>

    <form action="/backoffice/{{$product->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                   value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter price"
                   value="{{$product->price}}">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Enter image"
                   value="{{$product->image}}">
        </div>
        <div class="form-group">
            <label for="available">Available</label>
            <input type="text" class="form-control" id="available" name="available" placeholder="Enter available"
                   value="{{$product->available}}">
        </div>
        <div class="form-group">
            <label for="discount">Discount</label>
            <input type="text" class="form-control" id="discount" name="discount" placeholder="Enter discount"
                   value="{{$product->discount}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

@endsection
