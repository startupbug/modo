<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class HomeController extends Controller {

    public function index(){
    	
    	$base_uri = 'https://rest.gadventures.com';

		$client = new \GuzzleHttp\Client();

		//GET ALL Trips from API
		$para = '/tours/'; 
		$url = $base_uri.$para;
		//?max_per_page=1
		$res = $client->get('https://rest.gadventures.com/tours/?max_per_page=4', [
	        'headers' => [
	            'Accept' => 'application/json',
	            'X-Application-Key' => 'test_290788a6c8dbb32ce4e399af4f63fda5d81642bc',
	            'Content-Type' => 'application/json',
	        ]
    	]);

    	$trips = $res->getBody()->getContents();
    	
		$trips = json_decode($trips, true);

		//Counts
		//$trips['count'];
		
		$tripResult = $trips['results'];
		
		//dd($tripResult[0]['tour_dossier']['href']);

		
		$trips_array = array();
		$temp_trip =  array();
		
		for($i=0; $i<count($tripResult); $i++){

			//Getting Trip/Tours details
			$trip_inner = $this->trip_inner_func($tripResult[$i]['tour_dossier']['href']);
			//dd("zzhere");
			//dd($trip_inner);			
			$name = $trip_inner['name'];
			$duration = $trip_inner['itineraries'][0]['duration'];
			$category = $trip_inner['categories'][0]['name'];
			$image = $trip_inner['images'][3]['image_href'];
			$geography = $trip_inner['geography']['region']['name'];

			array_push($trips_array, [$name, $duration, $category, $image, $geography]);
		}				
			
		dd($trips_array);

    	//echo '</pre>';
    	die();
    	return view('home.index')->with($trips_array);
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
		//dd("herezz");
		return $trips_inner;
		//dd($trips_inner);
    }

    public function get_detail($href){

    }
}
