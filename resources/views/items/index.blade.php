@extends('layouts.app')

@section('content')
    <div class="flex flex-col">
        ITEMS:
        @foreach($items as $item)
            <a href="/items/{{$item->id}}" class="hover:bg-blue-400">
                {{$item->id}} - {{$item->name}} - {{$item->cooking_time}} - {{$item->price}} - {{$item->created_at}}
            </a>
        @endforeach
    </div>

    @include('items.form')
@endsection

@section('scripts')
{{--    <script src="{{ asset('js/scans.js') }}"></script>--}}
@endsection
