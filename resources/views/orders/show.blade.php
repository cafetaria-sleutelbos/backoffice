@extends('layouts.app')

@section('content')
    <a href="/orders" class="hover:bg-blue-400">
        back
    </a>

    <div class="flex flex-col">
        ORDER NR {{$order->id}}:
        @foreach($order->items()->distinct()->get() as $item)
            <a href="/items/{{$item->id}}" class="hover:bg-blue-400">
                {{$item->orders->where('id', $order->id)->count() }}x {{$item->name}}
            </a>
        @endforeach
    </div>

    <div class="bg-red-600 text-white">
        <form method="POST" action="/orders/{{$order->id}}">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </div>

    @include('orders.form', ['resource' => $order])
@endsection

@section('scripts')
{{--    <script src="{{ asset('js/scans.js') }}"></script>--}}
@endsection

