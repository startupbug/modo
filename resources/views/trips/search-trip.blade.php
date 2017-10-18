@extends('masterlayout')
@section('content')

<div id="banner" class="deals">
	<div class="container-fluid">
		<div class="row">	
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="location-search deals-search" >
					<!--<form>
						<label for="where-would-you-like-to-go?">Where would you like to go?</label>
						<input type="text" placeholder="Country, City, Famous Place" id="where-would-you-like-to-go?">
						<input type="submit" value="Search">
					</form> -->
							<form id="searchTrip" method="post" action="{{route('trip_search')}}">
								<label for="where-would-you-like-to-go?">Where would you like to go?</label>
								<input type="text" name="searchText" placeholder="Country, City, Famous Place" id="where-would-you-like-to-go?">
								<input type="hidden" name="_token" value="{{Session::token()}}">
								<input type="submit" name="submit" value="Search">
							</form>					
				</div>
			</div>
		</div>	
	</div>	
</div>	

<!-- banner -->

<div class="adventure-tours">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h1 class="mns-headings">G Adventure Tours, Cruises and Adventure Trips</h1>
				<p class="mns-para">788 professionally planned trips found for G Adventures. find the best guided tours, river cruises, & travel packages from over 500 tour operators.43,082 reviews with an average rating of 4.8 for all G Adventures trips. Read the G Adventures Guide for tour tips and planning information</p>
				<!--  -->
				<!--  -->
			</div>
		</div>
	</div>
</div>

<!-- adventure-tours -->

<div class="trip-finder-main">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="trip-finder-sidebar">
					<div class="main-box">
					  <form id="searchTripForm" >
						<div class="header header-ar">
						<div class="se-pre-con"></div>
							<h3>Duration </h3>
							<a id="resetForm" href="#">Reset Filter</a>
						</div>
						<div class="bodys" >
							<div class="range-bars">
								<div class="range-slider">
								<form>
									<input class="range-slider__range" name="tour_dur" id="tour_dur" type="range" value="0" min="1" max="15">
									
									<span class="range-slider__value"></span><span>days</span>
									<div class="ran-max">
										<span>30+ days</span>
									</div>
									</form>
								</div>
							</div>							
						</div>
					</div>
					<div class="main-box">
						<div class="header header-ar">
					 @if(isset($searchText))	
						<input type="hidden" value="{{$searchText}}" name="search_term" id="search_term">
					@endif			
							<h3>Departure Date</h3>
						</div>
						<div class="bodys" >
							<div class="sameus start-date">
								<p>Start</p>
								<form>
								<div class="form-group">
					                <!--<div class='input-group date' id='datetimepicker1'> -->
					                    <input type='date' name="start_date" id="start_date" value="0" class="form-control" onchange="startDateChange(event);"/>
					                    <!-- foo<span class="input-group-addon">
					                        <span class="fa fa-calendar"></span>
					                    </span> -->
					                <!--</div> -->
					            </div>
					            </form>
							</div>
							<div class="sameus end-date">
								<p>End</p>
								<form>
								<div class="form-group">
					                <!--<div class='input-group date' id='datetimepicker5'> -->
 										<input type='date' name="end_date" id="end_date" value="0" class="form-control" onchange="startEndChange(event);"/>	                   
					                    <!--<span class="input-group-addon">
					                        <span class="fa fa-calendar"></span>
					                    </span> -->
					                <!--</div> -->
					            </div>
					            </form>
							</div>
						</div>
					</div>
					<div class="main-box">
						<div class="header header-ar">
							<h3>Price</h3>
						</div>
						<div class="bodys" >
							<div class="range-bars">
								<div class="range-slider">
									<input class="range-slider__range" name="tour_price" id="tour_price" type="range" value="0" min="200" max="10000">
									$<span class="range-slider__value">200</span><span></span>
									<div class="ran-max">
										<span>$10000</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
					<div class="main-box">
						<div class="header">
														
							<h3 data-toggle="collapse" data-target="#demo">Physical</h3>
						</div>
						<div class="bodys collapse" id="demo">
							<input type="checkbox" name="physical" value="2 - Light"> 2 - Light </label>
							<br>
							<input type="checkbox" name="physical" value="3 - Average"> 3 - Average </label>	
							<br>
							<input type="checkbox" name="physical" value="4 - Demanding"> 4 - Demanding </label>
						</div>

						<div class="header">
														
							<h3 data-toggle="collapse" data-target="#demo2">Service Level</h3>
						</div>
						<div class="bodys collapse" id="demo2">
							<input type="checkbox" name="service" value="Basic"> Basic </label>
							<br>
							<input type="checkbox" name="service" value="Standard"> Standard </label>	
							<br>
							<input type="checkbox" name="service" value="Upgraded"> Upgraded </label>
						</div>

						<div class="header">
														
							<h3 data-toggle="collapse" data-target="#demo3">Travel Style</h3>
						</div>
						<div class="bodys collapse" id="demo3">
							<input type="checkbox" name="travel_style" value="18-to-Thirtysomethings">18-to-Thirtysomethings</label>
							<br>
							<input type="checkbox" name="travel_style" value="Active"> Active </label>	
							<br>
							<input type="checkbox" name="travel_style" value="Classic"> Classic </label>
							<br>
							<input type="checkbox" name="travel_style" value="Family"> Family </label>	
							<br>
							<input type="checkbox" name="travel_style" value="Local Living"> Local Living </label>
							<br>
							<input type="checkbox" name="travel_style" value="Marine"> Marine </label>	
							<br>
							<input type="checkbox" name="travel_style" value="National Geographic Journeys"> National Geographic Journeys </label>
							<br>
							<input type="checkbox" name="travel_style" value="Rail"> Rail </label>																				
						</div>



					</div>
				<!--
					<div class="main-box">
						<div class="header">
							<h3>Destinations</h3>
						</div>
						<div class="bodys" style="display: none;"></div>
				</div>
					<div class="main-box">
						<div class="header">
							<h3>Travel Style</h3>
						</div>
						<div class="bodys" style="display: none;"></div>
					</div>
					<div class="main-box">
						<div class="header">
							<h3>Accomodation Level</h3>
						</div>
						<div class="bodys" style="display: none;"></div>
					</div>
					<div class="main-box">
						<div class="header">
							<h3>Physical Rating</h3>
						</div>
						<div class="bodys" style="display: none;"></div>
					</div> -->

				</div>
			</div>
			<div class="col-sm-6 col-md-9">
				<div class="row" id="fir-ro">
					<div class="col-sm-12 col-md-9">
					<div class="row">
						<div class="col-sm-6 col-md-8">
							<p><i class="fa fa-lock" aria-hidden="true"></i>Sign in to unlock private member deals upto $500 off.</p>
						</div>
							<div class="col-sm-6 col-md-4" style="padding-left: 0; ">
            	<form class="sort-by">
						<div class="input-group custom-search-form filter-frm row">
				            <div class="drop-me col-sm-12 col-md-12" >  
				              <input type="text" class="form-control" value="Sort By">
				             <span class="input-group-btn">
				              <button class="btn btn-primary" type="button">
				            	  <span class="fa fa-arrow"></span>
				               </button>
				             </span>
				             </div>
				             <div class="drop col-sm-12 col-md-12">
				             <ul style="display: none;">
				             	<li><a href="#">lorem</a></li>
				             	<li><a href="#">lorem</a></li>
				             	<li><a href="#">lorem</a></li>
				             	<li><a href="#">lorem</a></li>
				             </ul>
				             </div>
				            </div>
					</form>
						</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<p class="compare-selected">
							<a href="#">Compare Selected</a>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-9" style="padding-left: 0;" id="ajaxViewBoxes">
				   @if(isset($trips_search_arrays))	
					@for($i=0; $i<count($trips_search_arrays); $i++)
							<div class="all-feat" id="all-feat2">
									<div class="row" id="detail-tr">
										<div class="col-sm-6 col-md-5">
											<img src="{{$trips_search_arrays[$i][7]}}">
										</div>
										<div class="col-sm-6 col-md-7" style="padding-left: 0;">
											<div class="trips-de">
												<h2>{{$trips_search_arrays[$i][0]}}</h2>
												<!--<span>by G Adventures</span> -->
												<p><?php echo substr($trips_search_arrays[$i][1], 0,136).'...'; ?></p>
												<p class="destin"><a target="_blank" href="{{route('single_trip_view', ['id' => $trips_search_arrays[$i][9]])}}">View Desitination</a></p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-md-6">
											<ul class="comaprison" id="comaprison-id">
													<li><strong>Starts/Ends </strong><span>{{$trips_search_arrays[$i][2]}}/ {{$trips_search_arrays[$i][3]}}</span></li>
												<li><strong>Country   </strong><span>{{$trips_search_arrays[$i][4]}}</span></li>
												<li><strong>Start/ Finish City   </strong><span>{{$trips_search_arrays[$i][5]}}/{{$trips_search_arrays[$i][6]}}</span></li>
												<li><strong>Duration: </strong><span>{{$trips_search_arrays[$i][8]}} days</span></li>
												<!--<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span class="rd">$ 202</span><p class="lnth">$ 102</p></li> -->
											</ul>
										</div>
										<div class="col-sm-6 col-md-6">
											<ul class="comaprison" id="comaprison-id">
											 @if(isset($trips_search_arrays['categories']))
												<li><strong>Type:</strong><span>{{$trips_search_arrays['categories'][3]['name']}}</span></li>
												<li><strong>Service Level:  </strong><span>  {{$trips_search_arrays['categories'][1]['name']}}</span></li>
												<li><strong>physical: </strong><span>{{$trips_search_arrays['categories'][2]['name']}} </span></li>
											@endif
												<!--<li><strong>Places:  </strong><span>Premium - 4 start </span></li>
												<li><strong>Cost:  </strong><span class="dsys">$2424 / 12 Days </span></li>
												<li><strong>Reviews:  </strong><span><ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											</ul> </span></li>
												<li>
													<div class="saving">
														<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
													</div>
													<span class="com"><a href="#">Compare</a></span>
												</li> -->
											</ul>
										</div>
									</div>
							</div>

					@endfor
				   @else
				   	 	
				   @endif	
						<!--
						<div class="all-feat" id="all-feat2">
						<div class="row" id="detail-tr">
							<div class="col-sm-6 col-md-5">
								<img src="img/belguim-3.png">
							</div>
							<div class="col-sm-6 col-md-7" style="padding-left: 0;">
								<div class="trips-de">
									<h2>Neque porro quisquam </h2>
									<span>by G Adventures</span>
									<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
									<p class="destin"><a href="#">View Desitination</a></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<ul class="comaprison" id="comaprison-id">
									<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
									<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
									<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
									<li><strong>Country   </strong><span>South Iceland</span></li>
									<li><strong>REGION   </strong><span>The Ring Road</span></li>
									<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
									<li><strong>Price per Day </strong><span class="rd">$ 202</span><p class="lnth">$ 102</p></li>
								</ul>
							</div>
							<div class="col-sm-6 col-md-6">
								<ul class="comaprison" id="comaprison-id">
									<li><strong>Type:</strong><span>  Small Group</span></li>
									<li><strong>Lodging:  </strong><span>  Premium - 4 star</span></li>
									<li><strong>physical: </strong><span>Easy </span></li>
									<li><strong>Places:  </strong><span>Premium - 4 start </span></li>
									<li><strong>Cost:  </strong><span class="dsys">$2424 / 12 Days </span></li>
									<li><strong>Reviews:  </strong><span><ul class="revi">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
								</ul> </span></li>
									<li>
										<div class="saving">
											<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
										</div>
										<span class="com"><a href="#">Compare</a></span>
									</li>
								</ul>
							</div>
						</div>
						</div>

						<div class="all-feat" id="all-feat2">
						<div class="row" id="detail-tr">
							<div class="col-sm-6 col-md-5">
								<img src="img/belguim-3.png">
							</div>
							<div class="col-sm-6 col-md-7" style="padding-left: 0;">
								<div class="trips-de">
									<h2>Neque porro quisquam </h2>
									<span>by G Adventures</span>
									<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
									<p class="destin"><a href="#">View Desitination</a></p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<ul class="comaprison" id="comaprison-id">
									<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
									<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
									<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
									<li><strong>Country   </strong><span>South Iceland</span></li>
									<li><strong>REGION   </strong><span>The Ring Road</span></li>
									<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
									<li><strong>Price per Day </strong><span class="rd">$ 202</span><p class="lnth">$ 102</p></li>
								</ul>
							</div>
							<div class="col-sm-6 col-md-6">
								<ul class="comaprison" id="comaprison-id">
									<li><strong>Type:</strong><span>  Small Group</span></li>
									<li><strong>Lodging:  </strong><span>  Premium - 4 star</span></li>
									<li><strong>physical: </strong><span>Easy </span></li>
									<li><strong>Places:  </strong><span>Premium - 4 start </span></li>
									<li><strong>Cost:  </strong><span class="dsys">$2424 / 12 Days </span></li>
									<li><strong>Reviews:  </strong><span><ul class="revi">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
								</ul> </span></li>
									<li>
										<div class="saving">
											<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
										</div>
										<span class="com"><a href="#">Compare</a></span>
									</li>
								</ul>
							</div>
						</div>
						</div> -->
					</div>
					<!--<div class="col-sm-6 col-md-3">
						<div class="most-popular" id="related-guides">
						<h2>Related Guides</h2>	
						<ul class="articles">
							<li>
								<img src="{{ asset('public/img/related-guide.png') }}">
								<p>South America</p>
							</li>
							<li>
								<img src="{{ asset('public/img/related-guide.png') }}">
								<p>Machu Pichu</p>
							</li>
							<li>
								<img src="{{ asset('public/img/related-guide.png') }}">
								<p>Peru</p>
							</li>
							<li>
								<img src="{{ asset('public/img/related-guide.png') }}">
								<p>Luxury Travel</p>
							</li>
							<li>
								<img src="{{ asset('public/img/related-guide.png') }}">
								<p>Guided Group</p>
							</li>
							<li>
								<img src="{{ asset('public/img/related-guide.png') }}">
								<p>Tour Guide</p>
							</li>
							<li>
								<img src="{{ asset('public/img/related-guide.png') }}">
								<p>Belgium</p>
							</li>
							<li>
								<img src="{{ asset('public/img/related-guide.png') }}">
								<p>South America</p>
							</li>
						</ul>
						<p><a href="#">View More</a></p>
					</div>
					</div>  -->
				</div>
			</div>
		</div>
	</div>
</div>

<!-- trip-finder-main -->
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
			@if(isset($count))
			 @if($count > 5)
			  <ul class="pagination">
			    @for($i=2;$i<round($count/5); $i++)
			    <li><a href="{{$pagi_href}}{{$i}}">$i</a></li>
			    @endfor
			  </ul>
			 @endif
			@endif 

@endsection
