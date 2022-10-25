<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return 'index';
    }
    public function show()
    {
        return 'show';
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
