<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller {

    public function create(Request $request) : User {
        $document = $request->file('document')->storePublicly('documents');
        return User::create([
            "name" => $request->name,
            "email" => $request->email,
            "document" => $document,
            "password" => Hash::make($request->password),
            "status"    => User::NOT_ACCEPTED
        ]);
    }

    public function login(Request $request)  {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        return ["token" => $user->createToken("commercant-token")->plainTextToken];
    }

}
