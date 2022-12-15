@extends('layouts.app')

@section('content')
    <a href="/scans" class="hover:bg-blue-400">
        back
    </a>

    <div class="flex flex-col">
        <h2 class="font-bold text-2xl">
            SCAN ID {{$scan->id}}:
        </h2>
        <div style="overflow: scroll">
            <span>
            DATA: {{$scan->data}}
            </span>
        </div>
        <div>
            CREATED AT: {{$scan->created_at->format('d-m-Y H:i')}}
        </div>
    </div>

{{--    <div class="bg-red-600 text-white">--}}
{{--        <form method="POST" action="/orders/{{$order->id}}">--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--            <button type="submit">delete</button>--}}
{{--        </form>--}}
{{--    </div>--}}

{{--    @include('orders.form', ['resource' => $order])--}}
@endsection

@section('scripts')
    {{--    <script src="{{ asset('js/scans.js') }}"></script>--}}
@endsection

