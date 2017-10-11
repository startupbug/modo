<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TripController extends Controller
{
   public function index($trip_id){
   		 //https://rest.gadventures.com/tour_dossiers/22997
   		//https://rest.gadventures.com/tour_dossiers/22997/departures

    	$base_uri = 'https://rest.gadventures.com';

		$client = new \GuzzleHttp\Client();

		//GET ALL Trips from API
		$para = '/tours/'; 
		$url = $base_uri.$para;
		//?max_per_page=1
		$res = $client->get('https://rest.gadventures.com/tour_dossiers/'.$trip_id, [
	        'headers' => [
	            'Accept' => 'application/json',
	            'X-Application-Key' => 'test_290788a6c8dbb32ce4e399af4f63fda5d81642bc',
	            'Content-Type' => 'application/json',
	        ]
    	]);

    	$trip_dossier = $res->getBody()->getContents();
    	
		$trip_dossier = json_decode($trip_dossier, true);
		//dd($trip_dossier);
		//Getting depart info
		$departure_href = 'https://rest.gadventures.com/departures/'.$trip_dossier['id'];
		$trip_dos_dept_detail = $this->trip_inner_func($departure_href);

		return view('trips.single-trip')->with('trip_dossier', $trip_dossier)
										->with('trip_dos_dept_detail', $trip_dos_dept_detail);

		//$trip_dos_dept_detail = $this->trip_inner_func($trip_dossier['departures']['href']);
		//dd($trip_dossier);
   }

    public function trip_inner_func($href){

		$client = new \GuzzleHttp\Client();

		$res2 = $client->get($href, [
	        'headers' => [
	            'Accept' => 'application/json',
	            'X-Application-Key' => 'test_290788a6c8dbb32ce4e399af4f63fda5d81642bc',
	            'Content-Type' => 'application/json',
	        ]
    	]);

    	$trips_inner = $res2->getBody()->getContents();
    	
		$trips_inner = json_decode($trips_inner, true);

		return $trips_inner;

    }   

}
