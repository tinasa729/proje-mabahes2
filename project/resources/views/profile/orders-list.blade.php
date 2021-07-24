@extends('profile.layouts')

@section('main')
    <table class="table">
        <tbody>
        <tr>
            <th>شماره سفارش</th>
            <th>وضعیت سفارش</th>
            <th>کد رهگیری پستی</th>
            <th>اقدامات</th>
        </tr>

        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->tracking_serial ?? 'هنوز ثبت نشده' }}</td>
                <td>
                    <a href="{{ route('profile.orders.detail', $order->id) }}" class="btn btn-sm btn-info">جزئیات سفارش</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $orders->render() }}
@endsection
