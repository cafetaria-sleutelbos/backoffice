@extends('layouts.app')

@section('content')
    <div class="flex flex-col m-4">
        <div class="show_header">
            <div>
                <a href="/scans" class="crumb">
                    back
                </a>
                <h2 class="font-bold text-2xl">
                    SCAN ID {{$scan->id}}:
                </h2>
            </div>
            <a href="#" data-bs-toggle="modal" data-bs-target="#scanModal">Edit</a>
        </div>
        <div class="scanned_data">
{{--            DATA: {{$scan->data}}--}}
        </div>
        <div class="scanned_data">
            IMAGE: {{$scan->receipt_path}}
        </div>
        <div>
            CREATED AT: {{$scan->created_at->format('d-m-Y H:i')}}
        </div>
    </div>

    @include('scans.form', ['resource' => $scan])
@endsection

@section('scripts')
    <script src="{{ asset('js/scans.js') }}"></script>
@endsection

