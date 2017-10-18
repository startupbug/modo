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
		//dd($tripResult);
		//dd($tripResult[0]['tour_dossier']['href']);

		//API URLS 
		//
		//https://rest.gadventures.com/tour_dossiers/22998
		//https://rest.gadventures.com/departures/'.$tour_id

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

			$country = $trip_inner['geography']['start_country']['name']; 
			$city = $trip_inner['geography']['start_city']['name'];

			$departures_start_date = $trip_inner['departures_start_date'];
			$departures_end_date = $trip_inner['departures_end_date'];
			$description = substr($trip_inner['description'], 22).'';
			$trip_type = $trip_inner['categories'][3]['name'];
			//dd($trip_type);
			//tour dossier url --------------
			//dd($trip_inner);
			
			$tour_id = $trip_inner['tour']['id'];
			//dd($tour_id);
			$departure_href = 'https://rest.gadventures.com/departures/'.$tour_id;
			$trip_dept_inner = $this->trip_inner_func($departure_href);
				
			//dept url ---------------
			//dd($trip_dept_inner);

			$us_amount = $trip_dept_inner['lowest_pp2a_prices'][0]['amount'];

			$min_age = $trip_dept_inner['rooms'][0]['price_bands'][0]['min_age'];
			$max_age = $trip_dept_inner['rooms'][0]['price_bands'][0]['max_age'];
			$departure = $trip_dept_inner['name'];
			//dd($max_age);

			array_push($trips_array, [$name, $duration, $category, $image, $geography, $us_amount, $departures_start_date, $departures_end_date, $country, $description, $city,$min_age, $max_age, $departure, $trip_type, $tour_id]);
		}				
			
		//dd($trips_array);

    	//echo '</pre>';
    	//die();
    	return view('home.index')->with('trips_array', $trips_array);
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

    public function get_detail($href){

    }
}
