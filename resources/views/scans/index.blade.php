@extends('layouts.app')

@section('content')
    <div class="flex flex-col m-4">
        <div class="flex justify-between">
            <h2 class="font-bold text-2xl">Scans</h2>
            <span id="scans_export_csv">Export</span>
        </div>
        <div>
            <table id="scans_table">
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Received Data
                    </th>
                    <th>
                        Date
                    </th>
                    <th>
                        Unix
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($scans as $scan)
                    <tr>
                        <td>
                            {{$scan->id}}
                        </td>
                        @if($scan->data)
                            <td class="" style="max-width: 50vw; overflow: hidden; text-overflow: ellipsis">
                                {{$scan->data}}
                            </td>
                        @else
                            <td class="text-red-600" style="max-width: 10vw; overflow: hidden; text-overflow: ellipsis">
                                NO DATA RECEIVED
                            </td>
                        @endif
                        <td>
                            {{$scan->created_at->format('d-m-Y H:i')}}
                        </td>
                        <td>
                            {{strtotime($scan->created_at)}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/scans.js') }}"></script>
@endsection
