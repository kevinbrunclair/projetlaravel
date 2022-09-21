@extends('layoutbackoffice')

@section('title', 'Ma Homepage')

@section('content')

    <h1>Add product</h1>

    <form action="/backoffice" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Enter image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

@endsection


