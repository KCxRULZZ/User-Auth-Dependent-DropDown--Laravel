<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Country;
use App\Models\Region;
use App\Models\City;

class PlaceController extends Controller
{
    public function addPlaces()
    {
        $regions = Region::all();
        return view('places.add_places', compact('regions'));
    }

    public function getCountries(int $id): JsonResponse
    {
        $countries = Country::where('region_id', $id)->get();
        return response()->json($countries);
    }

    public function getCities(int $id): JsonResponse
    {
        $cities = City::where('country_id', $id)->get();
        return response()->json($cities);
    }
}
