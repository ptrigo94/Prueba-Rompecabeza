<?php

namespace App\Http\Controllers;

use App\Models\DealershipsOffices;
use App\Models\Dealerships;
use App\Models\Countries;
use Illuminate\Http\Request;
use stdClass;

class DealershipOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\DealershipsOffices  $dealershipsOffices
     * @return \Illuminate\Http\Response
     */
    public function show(DealershipsOffices $dealershipsOffices)
    {
        //
    }

    public function allDealershipOffices(){
        $countries = Countries::all('shortname', 'name','flag_image');
        
        $paises = [];

        for ($i=0; $i < $countries->count(); $i++) { 
            $dealers=  Dealerships::where('country_iso_code',$countries[$i]->shortname)->orderBy('name','desc')->get();
            
            $country = new \stdClass();
            $country->name=$countries[$i]->name;
            $country->flag=$countries[$i]->flag_image;
            $country->iso_code   =$countries[$i]->shortname;
            $dealerships = [];  
           for ($i=0; $i < $dealers->count(); $i++) { 
                $dealer = new Dealerships;
                
                $dealer->dealership_id= $dealers[$i]->dealership_id;
                $dealer->name= $dealers[$i]->name;
                $dealer->adress= $dealers[$i]->adress;
                $dealer->email= $dealers[$i]->email;                
                $dealer->phone= $dealers[$i]->phone;                
                $dealer->phone2= $dealers[$i]->phone2;
                $dealer->dealership_offices= $dealers[$i]->dealership_offices;
                array_push($dealerships,$dealer);

            }
            $country->dealers = $dealerships;  

            array_push($paises,$country);     

               
        }
        
        return json_encode($paises, JSON_PRETTY_PRINT);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DealershipsOffices  $dealershipsOffices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DealershipsOffices $dealershipsOffices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DealershipsOffices  $dealershipsOffices
     * @return \Illuminate\Http\Response
     */
    public function destroy(DealershipsOffices $dealershipsOffices)
    {
        //
    }
}
