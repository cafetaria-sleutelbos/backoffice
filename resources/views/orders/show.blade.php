@extends('layouts.app')

@section('content')
    <div class="flex flex-col m-4">
        <div class="show_header">
            <div>
                <a href="/orders" class="crumb">
                    back
                </a>
                <h2 class="font-bold text-2xl">
                    ORDER NR {{$order->id}}:
                </h2>
            </div>
            <div class="actions">
                <div class="action_btn delete">
                    <form method="POST" action="/orders/{{$order->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#orderModal" class="action_btn">Edit</a>
            </div>
        </div>

        <div>
            <div>{{$order->status}}</div>

            @foreach($order->items()->distinct()->get() as $item)
                <a href="/items/{{$item->id}}" class="hover:bg-blue-400 text-black">
                    {{$item->orders->where('id', $order->id)->count() }}x {{$item->name}}
                </a>
            @endforeach
        </div>
    </div>

    @include('orders.form', ['resource' => $order])
@endsection

@section('scripts')
    {{--    <script src="{{ asset('js/scans.js') }}"></script>--}}
@endsection

