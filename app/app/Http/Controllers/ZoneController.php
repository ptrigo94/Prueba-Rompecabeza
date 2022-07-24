<?php

namespace App\Http\Controllers;

use App\Models\Zones;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $zones = Zones::all();
        return $zones;
    }

    public function zonesByCountry($country_id){

        $zones = Zones::whereIsoCode($country_id);

    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zones  $zones
     * @return \Illuminate\Http\Response
     */
    public function show($zone_id)
    {
       $zone = Zones::findOrFail($zone_id);
       return $zone;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zones  $zones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zones $zones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zones  $zones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zones $zones)
    {
        //
    }
}
