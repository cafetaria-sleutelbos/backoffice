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
            <div class="actions">
                <div class="action_btn delete">
                    <form method="POST" action="/scans/{{$scan->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#scanModal" class="action_btn">Edit</a>
            </div>
        </div>
        <div>
            CREATED AT: {{$scan->created_at->format('d-m-Y H:i')}}
        </div>
        <div class="scanned_data">
            IMAGE: <img src="{{asset($scan->receipt_path)}}" alt="profile Pic" height="200" width="200">
        </div>
        <div class="scanned_data">
            DATA: {{$scan->data}}
        </div>
    </div>

    @include('scans.form', ['resource' => $scan])
@endsection

@section('scripts')
    <script src="{{ asset('js/scans.js') }}"></script>
@endsection

