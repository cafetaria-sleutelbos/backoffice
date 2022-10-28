<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'De combinatie van e-mailadres en wacthwoord komt niet overeen.'
            ], 403);
        }

        return response()->json([
            'token' => $user->createToken('auth-token-'.time())->plainTextToken,
            'user' => new UserResource($user)
        ]);
    }
}
