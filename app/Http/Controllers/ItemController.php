<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $items = Item::all();
        return view('items.index')->with(['items' => $items]);
    }

    public function show(Request $request, Item $item)
    {
        return view('items.show')->with(['item' => $item]);
    }

    public function create()
    {
        return 'create';
    }
    public function store()
    {
        return 'store';
    }
    public function edit()
    {
        return 'edit';
    }
    public function update()
    {
        return 'update';
    }
    public function destroy()
    {
        return 'destroy';
    }
}
