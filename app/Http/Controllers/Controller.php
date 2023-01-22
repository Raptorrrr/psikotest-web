<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;
use File;
use Illuminate\Support\Facades\Storage;

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

    public function storeImage(Request $request, string $keyword, string $path): string | null
    {
        $image_path = null;
        if($request->get($keyword) !== null) {
            $uploadFile = $request->file($keyword);
            $image_path = $uploadFile?->store($path, 'public');
        }

        return $image_path;
    }

    public function updateImage(Request $request, string $keyword, string $path, mixed $model, string $column): string | null
    {
        $image_path = null;
        if($request->get($keyword) !== null) {
            $uploadFile = $request->file($keyword);

            if($uploadFile !== null){
                $this->deleteImage($model, $column);
                $image_path = $this->storeImage($request, $keyword, $path);
            } else {
                $image_path = $model->getAttribute($column);
            }
        }

        return $image_path;
    }

    public function deleteImage(mixed $model, string $column): void
    {
        File::delete(storage_path('app/public/') . $model->getAttribute($column));
    }
}
