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
												<p><?php echo substr($trips_search_arrays[$i][1], 0, 136); ?></p>
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

			 @if($count > 5)
			  <ul class="pagination">
			     <?php
			       if(isset($pagi_href)){ 
			         $pagi_link = substr_replace($pagi_href, "", -1);
			       }
			     ?>			  
			    @for($i=2;$i<round($count/5); $i++)			    	
				    <button class="searchTripAjaxPagi" data-id="{{$pagi_link}}{{$i}}">{{$i}}</button>
				    <!--<li ></li> -->
			    @endfor
			  </ul>
			 @endif
