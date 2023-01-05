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
            IMAGE: <img src="{{asset('storage/'.$scan->receipt_path)}}" alt="profile Pic" height="200" width="200">
        </div>
        <div class="scanned_data">
            DATA:
            @foreach(json_decode($scan->data) ?? [] as $key => $line)
                <div class="line_row">
                    Line {{$key + 1}}:
                    @foreach($line ?? [] as $word)
                        <div class="conf_tooltip confidence_block {{$word[1] > 20 ? ($word[1] > 40 ? ($word[1] > 60 ? ($word[1] > 80 ? 'confidence_high' : 'confidence_med_high') : 'confidence_med') : 'confidence_low_med') : 'confidence_low'}}">{{$word[0]}}
                            <span class="conf_tt_text">{{$word[1]}}</span>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    @include('scans.form', ['resource' => $scan])
@endsection

@section('scripts')
    <script src="{{ asset('js/scans.js') }}"></script>
@endsection

