@extends("backoffice.layout")
@section("content")
    <table class="table">
        <tr>
            <td>order ID</td>
            <td>product ID</td>
            <td>product name</td>
            <td>quantity</td>
        </tr>
        @foreach($order_products as $order_product)
            <td>{{$order_product->order_id}}</td>
            <td>{{$order_product->product_id}}</td>
            <td>{{$order_product->product->name}}</td>
            <td>{{$order_product->quantity}}</td>
        @endforeach
    </table>
@endsection
