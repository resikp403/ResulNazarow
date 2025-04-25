<h1>Bookings</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>User</th>
        <th>Station</th>
        <th>Start</th>
        <th>End</th>
        <th>Status</th>
    </tr>
    @foreach($bookings as $booking)
        <tr>
            <td>{{ $booking->id }}</td>
            <td>{{ $booking->user->name ?? '—' }}</td>
            <td>{{ $booking->station->name ?? '—' }}</td>
            <td>{{ $booking->start_time }}</td>
            <td>{{ $booking->end_time }}</td>
            <td>{{ $booking->status }}</td>
        </tr>
    @endforeach
</table>
