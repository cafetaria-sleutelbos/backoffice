@extends('layouts.app')

@section('content')
    <div class="flex flex-col m-4">
        <div class="show_header">
            <div>
                <h2 class="font-bold text-2xl">
                    ITEMS
                </h2>
            </div>
            <div class="actions">
                <span id="items_export_csv" class="action_btn">Export</span>
                <a href="#" data-bs-toggle="modal" data-bs-target="#itemModal" class="action_btn">Create</a>
            </div>
        </div>
        <div>
            <table id="items_table" class="hover">
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Cooking time
                    </th>
                    <th>
                        Complexity
                    </th>
                    <th>
                        Price
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
                @foreach($items as $item)
                    <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                        <td>
                            {{$item->cooking_time}}
                        </td>
                        <td>{{$item->complexity}}</td>
                        <td>
                            {{$item->price}}
                        </td>
                        <td>
                            {{$item->created_at->format('d-m-Y H:i')}}
                        </td>
                        <td>
                            {{strtotime($item->created_at)}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('items.form')
@endsection

@section('scripts')
    <script src="{{ asset('js/items.js') }}"></script>
@endsection
