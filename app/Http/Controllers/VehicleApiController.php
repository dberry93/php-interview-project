<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class VehicleApiController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @return JsonResponse
     */
    public function families(): JsonResponse
    {
        return response()->json(Storage::json('public/vehicle-api-families.json'));
    }
}
