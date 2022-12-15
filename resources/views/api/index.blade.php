@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        <h2 class="font-bold text-2xl">API Keys</h2>
            @forelse($apiKeys as $key)
                <a href="/api-keys/{{$key->id}}" class="hover:bg-blue-400" >{{$key->name}} - {{$key->token}} - {{$key->expire_date}}</a>
            @empty
                    <div>NO API KEYS CREATED</div>
            @endforelse
    </div>

    @include('api.form')
@endsection

@section('scripts')
{{--    <script src="{{ asset('js/scans.js') }}"></script>--}}
@endsection
