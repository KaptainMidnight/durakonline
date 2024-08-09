<?php

use Illuminate\Http\JsonResponse;

if (! function_exists('api')) {
    function api(array $data, int $statusCode = 200, array$headers = []): JsonResponse
    {
        return response()->json($data, $statusCode, $headers);
    }
}
