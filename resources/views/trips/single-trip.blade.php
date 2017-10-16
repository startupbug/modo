@extends('masterlayout')
@section('content')

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 100%;
    	height: 200px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        width: 350px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
      #latlng {
        width: 100px;
      }

		#table-wrapper {
		  position:relative;
		}
		#table-scroll {
		  height:300px;
		  overflow:auto;  
		  margin-top:20px;
		}
		#table-wrapper table {
		  width:100%;

		}
		#table-wrapper table * {
		  /*background:yellow; */
		  color:black;
		}
		#table-wrapper table thead th .text {
		  position:absolute;   
		  top:-20px;
		  z-index:2;
		  height:20px;
		  width:35%;
		  border:1px solid red;
		}      
    </style> 

<div class="deals-details">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<div class="bluet ex">
					<h1 class="mns-headings')}}" >Gallery Images</h1>
					<p class="mns-para">Epic Sea View of Santorini, Greece</p>
					<!--  -->
					<div class="guide">
						<div class="main-img">
							<img src="{{$trip_dossier['images'][0]['image_href']}}">
						</div>
						<div class="relates-guide-img">
							<ul>
								<li>
									<div class="hover-box"><a href="#"><img src="{{$trip_dossier['images'][0]['image_href']}}" >
										<div class="overlay">
										    <div class="text">&nbsp;</div>
										</div></a>
									</div>
								</li>
								<li>
									<div class="hover-box"><a href="#"><img src="{{$trip_dossier['images'][1]['image_href']}}" >
										<div class="overlay">
										    <div class="text">&nbsp;</div>
										</div></a>
									</div>
								</li>
								<li>
									<div class="hover-box"><a href="#"><img src="{{$trip_dossier['images'][2]['image_href']}}" >
										<div class="overlay">
										    <div class="text">&nbsp;</div>
										</div></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!--  -->
				</div>
			</div>
			<div class="col-sm-12 col-md-7">
				<div class="details-des">
					<div class="deals-t">
					 @if(isset($trip_dossier['name']))
						<h1>{{$trip_dossier['name']}}</h1>
					 @endif
					</div>
					<!--<div class="deals-book">
						<p><a href="#">book now</a></p>
					</div> -->
					<div class="deals-book">
						<p><a href="{{$trip_dossier['site_links'][3]['href']}}">Download PDF</a></p>
					</div>					
					@if(isset($trip_dossier['description']))
						<p>{{$trip_dossier['description']}}</p>
					@endif

					<div class="all-feat">
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<ul class="comaprison" id="comaprison-id">
							
									<li><strong>Starts/ ends </strong><span><?php echo date("F jS, Y", strtotime($trip_dossier['departures_start_date'])); ?>/ <?php echo date("F jS, Y", strtotime($trip_dossier['departures_end_date'])); ?></span></li>
									<li><strong>Country   </strong><span>{{$trip_dossier['geography']['start_country']['name']}}</span></li>
									<li><strong>Start/Finish City  </strong><span>{{$trip_dossier['geography']['start_city']['name']}}/{{$trip_dossier['geography']['finish_city']['name']}}</span></li>
									<li><strong>Duration  </strong><span>{{$trip_dossier['itineraries'][0]['duration']}} days</span></li>
									<!--<li><strong>Price per Day </strong><span class="rd">$ 202</span><p class="lnth">$ 102</p></li> -->
								</ul>
							</div>
							<div class="col-sm-6 col-md-6">
								<ul class="comaprison" id="comaprison-id">
								  @if(isset($trips_search_arrays['categories']))
									<li><strong>Type:</strong><span>{{$trip_dossier['categories'][3]['name']}}</span></li>
									<li><strong>Service Level:  </strong><span>  {{$trip_dossier['categories'][1]['name']}}</span></li>
									<li><strong>physical: </strong><span>{{$trip_dossier['categories'][2]['name']}} </span></li>
								  @endif
									<!--<li><strong>Places:  </strong><span>Premium - 4 start </span></li> -->
									<li><strong>Cost: </strong><span class="dsys">From {{$trip_dos_dept_detail[0]['lowest_pp2a_prices'][0]['amount']}} </span></li>
									<!--<li><strong>Reviews:  </strong><span><ul class="revi">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
								</ul> </span></li> -->
									<li>
										
					  <?php $exists = false; ?>
					  @for($i=0; $i<count($trip_dos_dept_detail); $i++)
					  	@if($trip_dos_dept_detail[0]['availability']['status'] == 'AVAILABLE')
					  	    <?php $exists = true; ?>				  	
					  	@endif
					  @endfor

										<div class="saving">
										   @if($exists)
											<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
										   @else
											<a style="color:red" href="#">Unavailable</a>
										   @endif

										</div>

									</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="book-info">
									<ul>
										<li><a href="#">Book now</a></li> 
										<li><a href="{{route('full_itenary', ['id' => $trip_dossier['id']])}}">Full itenary</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>


<div class="deals-details2">
	<div class="container">
			
			 	<ul>
				@if(isset($trip_dossier['details']))	
				   @for($i=0; $i<count($trip_dossier['details']);$i++)
						<div class="section" id="{{$trip_dossier['details'][$i]['detail_type']['label']}}">
						    <a href="#{{$trip_dossier['details'][$i]['detail_type']['label']}}"><li>{{$trip_dossier['details'][$i]['detail_type']['label']}}</li></a>
						</div>				   			
				   @endfor
				@endif				 		
			 	</ul>
			
	</div>
</div>

<!-- deals-details -->

<div class="deals-details2">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<div class="bluet ex">
					<h1 class="mns-headings')}}" >Routes and Places</h1>
					<p class="mns-para">Sed ut perspiciatis unde omnis</p>
					<!--  -->
					<div class="guide-iframe">
						<div id="map"></div>
						<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d190029.01773701006!2d12.395912665113281!3d41.90998597220957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f6196f9928ebb%3A0xb90f770693656e38!2sRome%2C+Metropolitan+City+of+Rome%2C+Italy!5e0!3m2!1sen!2s!4v1504694087297" width="100%" height="263" frameborder="0" style="border:0" allowfullscreen></iframe> -->
					</div>
					<!--  -->
				</div>
			</div>
			<div class="col-sm-12 col-md-7">
				<!--<div class="routes_place-menu">
					<ul>
						<li><a href="#">Reviews</a></li>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Q&A’S</a></li>
						
					</ul> 
				</div>-->
			<div id="table-wrapper">
				<div class="check-check-out" id="table-scroll">
				 		<h1 class="center">Departures</h1>
					<table class="tg" style="width: 100%;">
					  <tr>
					    <th class="tg-4u1e">Dates</th>
					    <th class="tg-4u1e">Availibility</th>
					    <th class="tg-4u1e">Price</th>
					  </tr>
					  <?php $exists = false; ?>
					@if($exists)
					  @for($i=0; $i<count($trip_dos_dept_detail); $i++)
					  	@if($trip_dos_dept_detail[0]['availability']['status'] == 'AVAILABLE')
					  	    <?php $exists = true; ?>
							  <tr>
							    <td class="tg-qz94"><?php echo date("F jS, Y", strtotime($trip_dos_dept_detail[$i]['start_date'])); ?> - <?php echo date("F jS, Y", strtotime($trip_dos_dept_detail[$i]['finish_date'])); ?>	</td>
							    <td class="tg-qz94">{{$trip_dos_dept_detail[$i]['availability']['status']}}</td>
							    <td class="tg-qz94">{{$trip_dos_dept_detail[$i]['lowest_pp2a_prices'][0]['amount']}}</td>
							  </tr>					  	
					  	@endif
					  @endfor
					@endif

					<!-- <tr>
					    <td class="tg-qz94">Quam est qui dolorem</td>
					    <td class="tg-qz94">Quam est qui dolorem</td>
					    <td class="tg-qz94">Quam est qui dolorem</td>
					  </tr>
					  <tr>
					    <td class="tg-qb4h">Ipsum quia dolor</td>
					    <td class="tg-qb4h">Ipsum quia dolor</td>
					    <td class="tg-qb4h">Ipsum quia dolor</td>
					  </tr>
					  <tr>
					    <td class="tg-qb4h">Sit amet, consecteture</td>
					    <td class="tg-qb4h">Sit amet, consecteture</td>
					    <td class="tg-qb4h">Sitamet, consecteture</td>
					  </tr>
					  <tr>
					    <td class="tg-qb4h">Adipisci velit</td>
					    <td class="tg-qb4h">Adipisci velit</td>
					    <td class="tg-qb4h">Adipisci velit</td>
					  </tr> -->
					</table>
					  @if(!$exists)
					  <div>
					  	<h1>No Departures Exist</h1>
					  </div>
					  @endif					
				</div>
			</div>	<!-- table wrapper div-->		
			</div>
		</div>
	</div>

</div>

<!-- deals-details2 -->

<div class="deals-details3">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<div class="pinks" style="padding-top: 49px;padding-bottom: 78px;">
					<h1 class="mns-headings">Connect & Follow</h1>
					<p class="mns-para">Spread your wings, all around the world!</p>
					<div class="p-social-icons">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-sm-12 col-md-7"> 
				@if(isset($trip_dossier['details']))	
				   @for($i=0; $i<count($trip_dossier['details']);$i++)
						<div class="section" id="{{$trip_dossier['details'][$i]['detail_type']['label']}}">
						        <h3>{{$trip_dossier['details'][$i]['detail_type']['label']}}</h3>
								<p>{{$trip_dossier['details'][$i]['body']}}</p>					        
						</div>				   			
				   @endfor
				@endif											
			 </div>


			<!-- <div class="col-sm-12 col-md-7">
				<div class="reviews-ratings">
					<h4>Reviews and Ratings</h4>
					<div class="row">
						<div class="col-sm-12 col-md-8">
							<div class="fullrates">
								<ul class="progress-bar-rating-main">
									<li class="raing-t">
										<p>Excellent</p>
									</li>	
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
										</ul>
									</li>
									<li class="progress-bar-rating">
										<div class="progress">
								          <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
								        </div>
								        <ul class="course-ratings">
								        	<li><p>88%</p></li>
										</ul>
									</li>
								</ul>

								<ul class="progress-bar-rating-main">
									<li class="raing-t">
										<p>Good</p>
									</li>	
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</li>
									<li class="progress-bar-rating">
										<div class="progress">
								          <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
								        </div>
								        <ul class="course-ratings">
								        	<li><p>64%</p></li>
										</ul>
									</li>
								</ul>

								<ul class="progress-bar-rating-main">
									<li class="raing-t">
										<p>Average</p>
									</li>	
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</li>
									<li class="progress-bar-rating">
										<div class="progress">
								          <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
								        </div>
								        <ul class="course-ratings">
								        	<li><p>35%</p></li>
										</ul>
									</li>
								</ul>

								<ul class="progress-bar-rating-main">
									<li class="raing-t">
										<p>Rather Poor</p>
									</li>	
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</li>
									<li class="progress-bar-rating">
										<div class="progress">
								          <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
								        </div>
								        <ul class="course-ratings">
								        	<li><p>20%</p></li>
										</ul>
									</li>
								</ul>

								<ul class="progress-bar-rating-main">
									<li class="raing-t">
										<p>Bad</p>
									</li>	
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</li>
									<li class="progress-bar-rating">
										<div class="progress">
								          <div data-percentage="0%" style="width: 50%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
								        </div>
								        <ul class="course-ratings">
								        	<li><p>3%</p></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-md-4">
							<div class="overall">
								<ul class="progress-bar-rating-main">
									<li class="raing-t">
										<p>Overall Rating:</p>
									</li>	
									<li class="progress-bar-rating-star">
										<ul class="course-ratings">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
										</ul>
									</li>
									<li class="progress-bar-rating">
										<ul class="course-ratings">
								        	<li><p>4.45 / 5 - Excellent</p></li>
										</ul>
										<p><a href="#" class="rec">100% Recommend</a></p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>				
			</div> -->
		</div>
	</div>
</div>

<!-- deals-details3 -->
<div class="popular_guides">
	<div class="container">
		<h1 class="mns-headings">World Attractions</h1>
		<p class="mns-para">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet.</p>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="hover-box"><a href="#"><img src="{{asset('public/img/london.png')}}">
					<div class="overlay">
					    <div class="text">London</div>
					 </div></a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="hover-box"><a href="#"><img src="{{asset('public/img/spain.png')}}">
					<div class="overlay">
					    <div class="text">Spain</div>
					 </div>
				</a></div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="hover-box"><a href="#"><img src="{{asset('public/img/africa-img.png')}}">
					<div class="overlay">
					    <div class="text">Africa</div>
					 </div>
				</a></div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<div class="hover-box"><a href="#"><img src="{{asset('public/img/spain.png')}}">
					<div class="overlay">
					    <div class="text">Spain</div>
					 </div>
				</a></div>
			</div>
		</div>
	</div>
</div>

<!-- popular_guides -->

<div class="attraction">
<h1 class="mns-headings">World Attractions</h1>
<p class="mns-para">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet.</p>

<div class="atrc container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 float-left europe">
			<h5>Europe</h5>
			<ul>
				<li><a href="#">Italy</a></li>
				<li><a href="#">France</a></li>
				<li><a href="#">Iceland</a></li>
				<li><a href="#">Greece</a></li>
				<li><a href="#">Croatia</a></li>
				<li><a href="#">Spain</a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 float-left asia">
			<h5>Asia</h5>
			<ul>
				<li><a href="#">Japan</a></li>
				<li><a href="#">Thailand</a></li>
				<li><a href="#">China</a></li>
				<li><a href="#">Nepal</a></li>
				<li><a href="#">Pakistan</a></li>
				<li><a href="#">India</a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 float-left north-america">
			<h5>North America</h5>
			<ul>
				<li><a href="#">USA</a></li>
				<li><a href="#">Canada</a></li>
				<li><a href="#">Mexico</a></li>
				<li><a href="#">East Coast USA</a></li>
				<li><a href="#">West Coast USA</a></li>
				<li><a href="#">Hawaii</a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 float-left latin-america">
			<h5>Latin America</h5>
			<ul>
				<li><a href="#">Cuba</a></li>
				<li><a href="#">Peru</a></li>
				<li><a href="#">Argentina</a></li>
				<li><a href="#">Brazil</a></li>
				<li><a href="#">Ecuador</a></li>
				<li><a href="#">ChileAutralia & NZ</a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 float-left australia">
			<h5>Autralia & NZ</h5>
			<ul>
				<li><a href="#">Australia</a></li>
				<li><a href="#">New Zealand</a></li>
				<li><a href="#">Fiji</a></li>
				<li><a href="#">Papua New Guinea</a></li>
				<li><a href="#">Aus. East Coast</a></li>
				<li><a href="#">NZ South Island</a></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 float-left africa">
			<h5>Africa</h5>
			<ul>
				<li><a href="#">South Africa</a></li>
				<li><a href="#">Egypt</a></li>
				<li><a href="#">Morocco</a></li>
				<li><a href="#">Zimbabwe</a></li>
				<li><a href="#">Kenya</a></li>
				<li><a href="#">Tanzania</a></li>
			</ul>
		</div>
	</div>
</div>
</div>
<!-- attraction -->

<script>
   function initMap() {
       var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 7,
         center: {lat: 44.968046, lng:  -94.420307},
         mapTypeControl: true,
         mapTypeControlOptions: {
             style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
             position: google.maps.ControlPosition.LEFT_TOP
         },
         mapTypeId: google.maps.MapTypeId.HYBRID
       });
    }
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkVKgWkld3FWQgGd1T-Yhh7Vr65aj3q4c&callback=initMap">
    </script>

@endsection	