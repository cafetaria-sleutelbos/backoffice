<x-app-layout>
    <div class="flex flex-col">
        ORDERS:
        @foreach($orders as $order)
            <a href="/orders/{{$order->id}}" class="hover:bg-blue-400">
                {{$order->id}} - {{$order->status}} - {{$order->items->count()}} - {{$order->created_at}}
            </a>
        @endforeach
    </div>

    @include('orders.form')
</x-app-layout>
