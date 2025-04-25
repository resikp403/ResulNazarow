<h1>Orders</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Service</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->user->name ?? '—' }}</td>
            <td>{{ $order->service->name ?? '—' }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->total_price }}</td>
        </tr>
    @endforeach
</table>
