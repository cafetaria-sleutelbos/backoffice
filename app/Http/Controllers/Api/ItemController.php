<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        return 'api.items.index';
    }

    public function show(Item $order)
    {
        return 'api.items.show';
    }
}
