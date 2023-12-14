<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Contracts\Geolocation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MapboxController extends Controller implements Geolocation
{
    private $base_url = "https://api.mapbox.com/geocoding/v5/mapbox.places";
    private $public_token = '';

    public function __construct()
    {
        $this->1 = env('MAPBOX_PUBLIC_TOKEN');
    }

    public function getGeoData(Request $request)
    {
        $location = $request->input('location');

        $response = Http::withOptions(['verify' => false])->get("$this->base_url/$location.json", [
            "limit" => 10,
            "country" => "it",
            "language" => "it",
            "access_token" => $this->public_token
        ]);

        $prepared_locations = $this->prepareLocations($response->json('features'));

        return response()->json($prepared_locations);
    }

    private function prepareLocations($locations)
    {
        $prepared_locations = [];

        for ($i = 0; $i < count($locations); $i++) {
            $location = $locations[$i];

            $prepared_location = [
                'address' => $location['place_name_it'],
                'position' => [
                    'lat' => $location['center'][1],
                    'lon' => $location['center'][0]
                ]
            ];

            array_push($prepared_locations, $prepared_location);
        }

        return $prepared_locations;
    }
}
