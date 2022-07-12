<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class CustomController extends Controller
{
    public function sendResponse($result, $message): JsonResponse
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];
        return response()->json($response);
    }

    public function sendError($code = 404, $errorMessages = "Something went wrong"): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $errorMessages
        ];

        return response()->json($response, $code);
    }
}
