<x-app-layout>
    <a href="/api-keys" class="hover:bg-blue-400">
        back
    </a>
    <div class="flex flex-col">
        API KEY {{$apiKey->id}}:
            <div>{{$apiKey->name}} - {{$apiKey->token}} - {{$apiKey->expire_date ?? 'NO EXPIRE DATE'}}</div>
    </div>

    @include('api.form', ['resource' => $apiKey])
</x-app-layout>
