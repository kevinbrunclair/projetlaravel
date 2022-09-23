@foreach($orders as $order)
    <h1> {{ $order->number }} </h1>
    <h2> {{ $order->customer->first_name }} {{ $order->customer->last_name }} </h2>
    <h3> {{ $order->date }} </h3>
@endforeach
