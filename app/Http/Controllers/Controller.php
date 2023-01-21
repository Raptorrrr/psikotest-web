<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function jsonResponse(mixed $payload = null, int $status = 200, string $statusText = 'SUCCESS'): JsonResponse
    {
        return new JsonResponse([
            'status' => $statusText,
            'payload' => $payload,
        ], $status);
    }
}
