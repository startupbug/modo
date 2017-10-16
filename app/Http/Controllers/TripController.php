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
		$departure_href = 'https://rest.gadventures.com/tours/'.$trip_dossier['id'].'/departures';
		$trip_dos_dept_detail = $this->trip_inner_func($departure_href);
		//dd($trip_dos_dept_detail['results']);

		return view('trips.single-trip')->with('trip_dossier', $trip_dossier)
										->with('trip_dos_dept_detail', $trip_dos_dept_detail['results']);

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

    public function itinary_index($trip_id){
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
		$departure_href = 'https://rest.gadventures.com/tours/'.$trip_id.'/departures';
		$trip_dos_dept_detail = $this->trip_inner_func($departure_href);
		//dd($trip_dos_dept_detail);
		//dd($trip_dossier['itineraries'][0]['days'][$i]);
		return view('trips.single-trip-itinary')->with('trip_dossier', $trip_dossier)
										->with('trip_dos_dept_detail', $trip_dos_dept_detail['results']);

    }

    public function trip_search(Request $request){

    	//dd($request->input('searchText'));
    	$url = 'https://rest.gadventures.com/tour_dossiers/?name='.$request->input('searchText');

		$client = new \GuzzleHttp\Client();

		$res = $client->get($url, [
	        'headers' => [
	            'Accept' => 'application/json',
	            'X-Application-Key' => 'test_290788a6c8dbb32ce4e399af4f63fda5d81642bc',
	            'Content-Type' => 'application/json',
	        ]
    	]);

    	$trip_search_res = $res->getBody()->getContents();
    	$trip_search_res = json_decode($trip_search_res, true);
    	//dd($trip_search_res);
    	$trip_search_res = $trip_search_res['results'];
    	//dd($trip_search_res);
    	$trips_search_array = array();
    	//dd($trip_search_res);
		for($i=0; $i<count($trip_search_res); $i++){
			$trip_search_dossier_res = $this->trip_inner_func($trip_search_res[$i]['href']);
			
			$type = "";
			$service_lvl = "";
			$physical = "";

			//dd($trip_search_dossier_res);
			$name = $trip_search_dossier_res['name'];
			//$detail_href = $trip_search_dossier_res['href'];
			$trip_start_date  = $trip_search_dossier_res['departures_start_date'];
			$trip_end_date  = $trip_search_dossier_res['departures_start_date'];

			$start_country = $trip_search_dossier_res['geography']['start_country']['name'];
			$start_city = $trip_search_dossier_res['geography']['start_city']['name'];
			$end_city = $trip_search_dossier_res['geography']['finish_city']['name'];
			$duration = $trip_search_dossier_res['itineraries'][0]['duration'];
			$image = $trip_search_dossier_res['images'][1]['image_href'];;
			$description = substr($trip_search_dossier_res['description'], 22).'';
			$trip_id = $trip_search_dossier_res['id'];

			//$href_tour = ;

			if(isset($trip_search_dossier_res['categories'][3])){
				$type = $trip_search_dossier_res['categories'][3]['name'];
				$service_lvl = $trip_search_dossier_res['categories'][1]['name'];
				$physical = $trip_search_dossier_res['categories'][2]['name'];
			}
			
			array_push($trips_search_array, [$name, $description, $trip_start_date, $trip_end_date, $start_country, $start_city, $end_city, $image, $duration, $trip_id]);
		}	
			//dd($trips_search_array);
		$data['searchText'] = $request->input('searchText');
    	return view('trips.search-trip')->with('trips_search_arrays', $trips_search_array)
    									->with($data);
    }

    public function test_check(){
		
		$client = new \GuzzleHttp\Client();

		$res = $client->get('https://rest.gadventures.com/tour_dossiers/', [
	        'headers' => [
	            'Accept' => 'application/json',
	            'X-Application-Key' => 'test_290788a6c8dbb32ce4e399af4f63fda5d81642bc',
	            'Content-Type' => 'application/json',
	        ]
    	]);

    	$trip_check = $res->getBody()->getContents();
    	

		$trip_check = json_decode($trip_check, true);
		dd($trip_check);

	/*
	
		   $string = str_replace (" ", "+", urlencode($string));
		   $details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$string."&sensor=false";
		 
		   $ch = curl_init();
		   curl_setopt($ch, CURLOPT_URL, $details_url);
		   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		   $response = json_decode(curl_exec($ch), true);
		 
		   // If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
		   if ($response['status'] != 'OK') {
		    return null;
		   }
		 
		  // print_r($response);
		   $geometry = $response['results'][0]['geometry'];
		 
		    $longitude = $geometry['location']['lat'];
		    $latitude = $geometry['location']['lng'];
		 
		    $array = array(
		        'latitude' => $geometry['location']['lng'],
		        'longitude' => $geometry['location']['lat'],
		        'location_type' => $geometry['location_type'],
		    );
		 
		    return $array;
		 
		}
 
		$city = 'Malaysiaz';
		 
		$array = lookup($city);
		echo '<pre>';
		print_r($array);
		echo '</pre>';

	*/	
    }

    public function trip_filter(Request $request){
    	
    	//return $request->input('physical')[1];


    	//200 price //1 dur // //startdate empty // enddate empty //physical
    	$filterUrl = '';
    	$search_term = $request->input('search_term');
    	$once = false;
    	$pre = '&';
        

        if(!($request->input('start_date') == "") || !empty($request->input('start_date')) ){
        	//start date is set
        	if($once){
        		$filterUrl .= $pre;
        	}
        	$filterUrl .= "departures_start_date=".$request->input('start_date');
        	$once = true;
        }

        if(!($request->input('end_date') == "") || !empty($request->input('end_date')) ){
        	//end date is set
        	if($once){
        		$filterUrl .= $pre;
        		$filterUrl .= "departures_end_date=".$request->input('end_date');
        	}

        	$once = true;
        }

        if(!($request->input('tour_dur') == 1) && !empty($request->input('tour_dur')) ){
        	//end date is set
        	if($once){
        		$filterUrl .= $pre;
        	}

        	$filterUrl .= "itineraries.duration=".$request->input('tour_dur');//"&name=".$search_term;
        	$once = true;
        }

        if(!($request->input('tour_price') == 200) || !empty($request->input('tour_price')) ){
        	//end date is set //find it
        	if($once){
        		$filterUrl .= $pre;
        	}
        	//$filterUrl .= "itinerarie.duration=".$request->input('dur_id');
        	$once = true;
        }

  		if( !empty($request->input('physical')) ){

  			//return $request->input('physical')[1];

        	$tempSubUrl = "";
        	$inner_check_once = false;
        	for($i=0; $i<count($request->input('physical')); $i++){

        		if($inner_check_once){
        		 	$tempSubUrl.= $pre;
        		}	
        		
        		$tempSubUrl .= 'categories.name="'.$request->input('physical')[$i].'"';
        		
        		$inner_check_once = true;
        	}

        	if($once){
        		$filterUrl .= $pre;
        	}        	

        	$filterUrl .= $tempSubUrl;
        }
    	    
        $once = false;

        $filterUrl .= '&max_per_page=5';

    	$url_filter = 'https://rest.gadventures.com/tour_dossiers/?'.$filterUrl;

    	//return $url_filter;

		$client = new \GuzzleHttp\Client();

			$res = $client->get($url_filter, [
		        'headers' => [
		            'Accept' => 'application/json',
		            'X-Application-Key' => 'test_290788a6c8dbb32ce4e399af4f63fda5d81642bc',
		            'Content-Type' => 'application/json',
		        ]
	    	]);

	    	$trip_search_res = $res->getBody()->getContents();
	    	$trip_search_res = json_decode($trip_search_res, true);
	    	$trip_search_res = $trip_search_res['results'];
	    	//dd($trip_search_res);
	    	$trips_search_array = array();
	    	//dd($trip_search_res);
			for($i=0; $i<count($trip_search_res); $i++){
				$trip_search_dossier_res = $this->trip_inner_func($trip_search_res[$i]['href']);
				
				$type = "";
				$service_lvl = "";
				$physical = "";

				dd($trip_search_dossier_res);
				$name = $trip_search_dossier_res['name'];
				$trip_start_date  = $trip_search_dossier_res['departures_start_date'];
				$trip_end_date  = $trip_search_dossier_res['departures_start_date'];

				$start_country = $trip_search_dossier_res['geography']['start_country']['name'];
				$start_city = $trip_search_dossier_res['geography']['start_city']['name'];
				$end_city = $trip_search_dossier_res['geography']['finish_city']['name'];
				$duration = $trip_search_dossier_res['itineraries'][0]['duration'];
				$image = $trip_search_dossier_res['images'][1]['image_href'];;
				$description = substr($trip_search_dossier_res['description'], 22).'';
				$trip_id = $trip_search_dossier_res['id'];

				//Pagination Content
				//$count = $trip_search_dossier_res['count'];
				//$current_page = $trip_search_dossier_res['current_page'];
				//$pagi_link = $trip_search_dossier_res['links']['href'];
				//$href_tour = ;

				if(isset($trip_search_dossier_res['categories'][3])){
					$type = $trip_search_dossier_res['categories'][3]['name'];
					$service_lvl = $trip_search_dossier_res['categories'][1]['name'];
					$physical = $trip_search_dossier_res['categories'][2]['name'];
				}
				
				array_push($trips_search_array, [$name, $description, $trip_start_date, $trip_end_date, $start_country, $start_city, $end_city, $image, $duration, $trip_id]);
			}
			$data['searchText'] = $request->input('search_term');
			$tutor_search = view("trips/ajax-search-trip")->with('trips_search_arrays', $trips_search_array)
														->with($data)
														->render();

			return $tutor_search;
    }

    public function trip_search_index(){
    	return view('trips.search-trip');
    }

}
