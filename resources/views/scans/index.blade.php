@extends('layouts.app')

@section('content')
    <div class="flex flex-col m-4">
        <div class="show_header">
            <div>
                <h2 class="font-bold text-2xl">
                    Scans
                </h2>
            </div>
            <div class="actions">
                <a href="#" data-bs-toggle="modal" data-bs-target="#scanModal" class="action_btn">Create</a>
                <span id="scans_download_img" class="action_btn">Download Imgs</span>
                <span id="scans_export_csv" class="action_btn">Export</span>
            </div>
        </div>
        <div>
            <table id="scans_table" class="hover">
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Received Data
                    </th>
                    <th>
                        Created
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
