<?php

namespace App\Http\Controllers;

use App\AI\Adjusted\AdjustedService;
use App\Exports\ItemsExport;
use App\Http\Requests\DeleteItemRequest;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();
        return view('items.index')->with(['items' => $items]);
    }

    public function show(Request $request, Item $item)
    {
        AdjustedService::run();
        return view('items.show')->with(['item' => $item]);
    }

    public function create()
    {
        return 'create';
    }

    public function store(StoreItemRequest $request)
    {
        $validated = $request->validated();
        $item = Item::create($validated);
        return redirect('/items/' . $item->id);
    }

    public function edit()
    {
        return 'edit';
    }

    public function update(UpdateItemRequest $request, Item $item)
    {
        $validated = $request->validated();
        $item->update($validated);
        return redirect('/items/' . $item->id);
    }

    public function destroy(DeleteItemRequest $request, Item $item)
    {
        $item->orders()->detach();
        $item->delete();

        return redirect('/items');
    }
    public function export()
    {
        return Excel::download(new ItemsExport(), 'items-' . time(). '.csv');
    }
}
