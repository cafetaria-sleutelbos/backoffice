<x-app-layout>
    <a href="/orders" class="hover:bg-blue-400">
        back
    </a>
    <div class="flex flex-col">
        ORDER NR {{$order->id}}:
        @foreach($order->items as $item)
            <a href="/items/{{$item->id}}" class="hover:bg-blue-400">
                {{$item->name}}
            </a>
        @endforeach
    </div>
</x-app-layout>
