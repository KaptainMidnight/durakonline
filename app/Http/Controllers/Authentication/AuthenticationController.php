<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\AuthenticationRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function __invoke(AuthenticationRequest $request): JsonResponse
    {
        $user = User::query()->firstOrCreate($request->credentials());
        return api(['token' => $user->createToken($request->ip())?->plainTextToken, 'token_type' => 'Bearer']);
    }
}
