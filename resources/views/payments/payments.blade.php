<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Платежи</title>
</head>
<body>
<h1>Paymnets</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>User</th>
        <th>Booking</th>
        <th>Amount</th>
        <th>Method</th>
    </tr>
    </thead>
    <tbody>
    @foreach($payments as $payment)
        <tr>
            <td>{{ $payment->id }}</td>
            <td>{{ $payment->user->name ?? '—' }}</td>
            <td>{{ $payment->booking->id ?? '—' }}</td>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->methods }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
