<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment;
use Illuminate\Support\Facades\Validator;

class ApartmentController extends Controller
{
    $apartments = Apartment::visible()->sponsored()->get();
    return response()->json([
        'success' => true,
        'data' => $apartments
    ]);
}
