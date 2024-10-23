<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    /**
     * Send a successful response
     */
    public function sendResponse($result, $message): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ], 200);
    }

    /**
     * Send an error response
     */
    public function sendError($error, $errorMessages = [], $code = 400): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $error,
            'errors'  => $errorMessages,
        ], $code);
    }
    
}
