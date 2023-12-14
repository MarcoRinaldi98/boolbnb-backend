<?php

namespace App\Http\Controllers\Contracts;

use Illuminate\Http\Request;

interface Geolocation
{
    public function getGeoData(Request $request);
}
