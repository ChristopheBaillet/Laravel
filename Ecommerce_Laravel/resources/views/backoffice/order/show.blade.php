@extends("backoffice.layout")
@section("content")
    <h1>Contenu de la commande {{$order->id}}</h1>
    <h3>Pour le client {{$order->customer->first_name}}</h3>
    <table class="table">
        <tr>
            <td>product ID</td>
            <td>product name</td>
            <td>quantity</td>
        </tr>

            @foreach($order->orderproduct as $order_product)
            <tr>
                <td>{{$order_product->product_id}}</td>
                <td>{{$order_product->product->name}}</td>
                <td>{{$order_product->quantity}}</td>
            </tr>
            @endforeach

    </table>
@endsection
