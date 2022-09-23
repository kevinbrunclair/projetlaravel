@foreach($categories as $category)
    <h1> {{ $category->name }} </h1>
    @foreach($category->product as $product)
        <p> {{ $product->name }} </p>
    @endforeach
@endforeach
