<?php

namespace App\Http\Controllers;

use App\Models\ApiKeys;
use App\Http\Requests\StoreApiKeysRequest;
use App\Http\Requests\UpdateApiKeysRequest;
use Illuminate\Support\Str;

class ApiKeysController extends Controller
{
    public function index()
    {
        $apiKeys = ApiKeys::all();
        return view('api.index')->with(['apiKeys' => $apiKeys]);
    }

    public function create()
    {
        //
    }

    public function store(StoreApiKeysRequest $request)
    {
        $validated = $request->validated();
        $token = Str::random(60);
        $apiKey = ApiKeys::create([
            'name' => $validated['name'],
            'token' => $token,
            'expire_date' => isset($validated['has_expire_date']) ? $validated['expire_date'] : null
        ]);
        return redirect('/api-keys/' . $apiKey->id);
    }

    public function show(ApiKeys $apiKey)
    {
        return view('api.show')->with('apiKey', $apiKey);
    }

    public function edit(ApiKeys $apiKeys)
    {
        //
    }

    public function update(UpdateApiKeysRequest $request, ApiKeys $apiKey)
    {
        $validated = $request->validated();
        $apiKey->update([
            'name' => $validated['name'],
            'expire_date' => isset($validated['has_expire_date']) ? $validated['expire_date'] : null
        ]);
        return redirect('/api-keys/' . $apiKey->id);
    }

    public function destroy(ApiKeys $apiKey)
    {
        $apiKey->delete();
        return redirect('/api-keys');
    }
}
