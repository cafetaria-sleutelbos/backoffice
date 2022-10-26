<x-app-layout>
    <a href="/items" class="hover:bg-blue-400">
        back
    </a>

    <div class="flex flex-col">
        <b>{{$item->id}}. {{$item->name}}:</b> {{$item->name}} - {{$item->cooking_time}} - {{$item->price}}
        - {{$item->created_at}}
    </div>

    <div class="bg-red-600 text-white">
        <form method="POST" action="/items/{{$item->id}}">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </div>

    @include('items.form', ['resource' => $item])
</x-app-layout>
