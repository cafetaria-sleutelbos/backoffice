<x-app-layout>
    <div class="flex flex-col">
        API KEYS:
            @forelse($apiKeys as $key)
                <a href="/api-keys/{{$key->id}}" class="hover:bg-blue-400" >{{$key->name}} - {{$key->token}} - {{$key->expire_date}}</a>
            @empty
                    <div>NO API KEYS CREATED</div>
            @endforelse
    </div>

    @include('api.form')
</x-app-layout>
