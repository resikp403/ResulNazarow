<h1>Stations</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Status</th>
    </tr>
    @foreach($stations as $station)
        <tr>
            <td>{{ $station->id }}</td>
            <td>{{ $station->name }}</td>
            <td>{{ $station->type }}</td>
            <td>{{ $station->status }}</td>
        </tr>
    @endforeach
</table>
