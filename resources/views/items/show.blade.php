@extends('layouts.app')

@section('content')
    <div class="flex flex-col m-4">
        <div class="show_header">
            <div>
                <a href="/items" class="crumb">
                    back
                </a>
                <h2 class="font-bold text-2xl">
                    ITEM NR {{$item->id}}:
                </h2>
            </div>
            <div class="actions">
                <div class="action_btn delete">
                    <form method="POST" action="/items/{{$item->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#itemModal" class="action_btn">Edit</a>
            </div>
        </div>
        <b>{{$item->id}}. {{$item->name}}:</b> {{$item->name}} - {{$item->cooking_time}} - {{$item->complexity}} - {{$item->price}}
        - {{$item->created_at}}
    </div>

    @include('items.form', ['resource' => $item])
@endsection

@section('scripts')
    {{--    <script src="{{ asset('js/scans.js') }}"></script>--}}
@endsection
