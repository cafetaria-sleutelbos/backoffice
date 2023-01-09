@extends('layouts.app')

@section('content')
    <div class="flex flex-col m-4">
        <div class="show_header">
            <div>
                <h2 class="font-bold text-2xl">
                    ORDERS
                </h2>
            </div>
            <div class="actions">
                <a href="#" data-bs-toggle="modal" data-bs-target="#orderModal" class="action_btn">Create</a>
            </div>
        </div>
        <div>
            <table id="orders_table" class="hover">
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                        Items count
                    </th>
                    <th>
                        Adjusted
                    </th>
                    <th>
                        Created
                    </th>
                    <th>
                        Unix
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>
                            {{$order->id}}
                        </td>
                        <td>
                            {{$order->status}}
                        </td>
                        <td>
                            {{$order->items->sum(function ($item){return $item->pivot->amount;})}}
                        </td>
                        <td>
                            {{$order->is_adjusted ? 'Is adjusted' : "Not adjusted"}}
                        </td>
                        <td>
                            {{$order->created_at->format('d-m-Y H:i')}}
                        </td>
                        <td>
                            {{strtotime($order->created_at)}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

{{--    @include('orders.form')--}}
@endsection

@section('scripts')
    <script src="{{ asset('js/orders.js') }}"></script>
@endsection
