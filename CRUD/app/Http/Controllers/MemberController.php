<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Country;
use App\Models\City;
use App\Models\Member;

class MemberController extends Controller
{
    // Display the members with the filter dropdowns
    public function index()
{
    $regions = Region::all();
    $positions = \App\Models\Position::all();
    $members = Member::with(['city', 'position'])->get();
    return view('members.index', compact('regions', 'positions', 'members'));
}


    // Filter members by region, country, or city
    public function filter(Request $request)
{
    $region_id = $request->input('region_id');
    $country_id = $request->input('country_id');
    $city_id = $request->input('city_id');
    $position_id = $request->input('position_id');

    $members = Member::with(['city', 'position']);

    if ($position_id) {
        $members->where('position_id', $position_id);
    }

    if ($city_id) {
        $members->where('city_id', $city_id);
    } elseif ($country_id) {
        $members->whereHas('city', function ($query) use ($country_id) {
            $query->where('country_id', $country_id);
        });
    } elseif ($region_id) {
        $members->whereHas('city.country', function ($query) use ($region_id) {
            $query->where('region_id', $region_id);
        });
    }

    $members = $members->get();

    $regions = Region::all();
    $positions = \App\Models\Position::all();
    return view('members.index', compact('members', 'regions', 'positions', 'region_id', 'country_id', 'city_id', 'position_id'));
}

}
