<x-app-layout>
    <a href="/orders" class="hover:bg-blue-400">
        back
    </a>
    <div class="flex flex-col">
        <b>{{$item->id}}. {{$item->name}}:</b> {{$item->name}} - {{$item->cooking_time}} - {{$item->price}} - {{$item->created_at}}
    </div>
</x-app-layout>
