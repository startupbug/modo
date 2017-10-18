@extends('masterlayout')
@section('content')

	<div class="home-slider">
				<div class="home-slider-inner">
					<div class="slider float-left">						
						<div class="carosel-slider-about-us">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">						     
						      <div class="carousel-inner" role="listbox">
						        <div class="carousel-item active">
						          	<div class="caro-sli">
						          		<img src="img/home-slider-img.png">
						          	</div>						          		
						        </div>
						        <div class="carousel-item">
						          	<div class="caro-sli">
						          		<img src="img/home-slider-img.png">
						          	</div>						          		
						        </div>
						        <div class="carousel-item">
						          	<div class="caro-sli">
						          		<img src="img/home-slider-img.png">
						          	</div>						          		
						        </div>
						      </div>
						      <ol class="carousel-indicators">
						        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						        <li data-target="#myCarousel" data-slide-to="1"></li>
						        <li data-target="#myCarousel" data-slide-to="2"></li>
						      </ol>
						    </div>	
						</div>	
						<div class="location-search">
							<ul class="slider-text">
								<li class="summer-sale">-Summer Sale-</li>
								<li class="save">SAVE UPTO 20%</li>
								<li class="tours">on selected tours</li>
								<li class="thr">Now through july 31 !!!</li>
							</ul>
							<form>
								<label for="where-would-you-like-to-go?">Where would you like to go?</label>
								<input type="text" placeholder="Country, City, Famous Place" id="where-would-you-like-to-go?">
								<input type="submit" value="Search">
							</form>
						</div>		
					</div>
				</div>
			</div>
			<!-- home-slider -->
			
			
			<div class="popular">
				<div class="container-fluid">
					<h1 class="mns-headings">Suggested Trips</h1>
					<p class="mns-para">Spread your wings, all around the world!</p>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
							<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
										<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
											<!-- <li><a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a></li> -->					
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
							<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
												<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
											<!-- <li></li>	 -->				
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
					<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
											<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
										<!-- 	<li></li> -->					
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
							<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
											<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
											<!-- <li><a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a></li> -->					
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
					</div>
			</div>
			</div>
			<div class="popular">
				<div class="container-fluid">
								<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
							<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
										<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
											<!-- <li><a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a></li> -->					
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
							<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
												<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
											<!-- <li></li>	 -->				
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
					<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
											<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
										<!-- 	<li></li> -->					
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
							<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
											<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
											<!-- <li><a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a></li> -->					
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
					</div>
			</div>
			</div>
			<div class="popular">
				<div class="container-fluid">
				
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
							<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
										<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
											<!-- <li><a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a></li> -->					
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
							<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
												<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
											<!-- <li></li>	 -->				
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
					<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
											<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
										<!-- 	<li></li> -->					
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 float-left">
							<div class="frontend-box">										
								<div class="frontend-box-inner">
									<a href="#" class="adventure-tag">Adventure</a>
									<a href="#" class="sale-tag"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<div class="img">
										<img src="img/trip-img.png">														
									</div>
										<a href="#" class="continent">Asia</a>
									<div class="course-detail-front">
										<h5><a href="#">6 Days Summer package</a></h5>
										<ul class="revi">
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
											<li>606 Reviews - Good</li>							
										</ul>
										<div class="desc-trip">
											<p class="des">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
											<ul class="comaprison">
												<li><strong>Destinations</strong><span>  15 orientation in iceland</span></li>
												<li><strong>AGE RANGE  </strong><span>  16 to 99 year Olds</span></li>
												<li><strong>Starts/ ends </strong><span>dolrem ipsum/ dolor sit</span></li>
												<li><strong>Country   </strong><span>South Iceland</span></li>
												<li><strong>REGION   </strong><span>The Ring Road</span></li>
												<li><strong>Operation  </strong><span> Arctic Adventures</span></li>
												<li><strong>Price per Day </strong><span>$202</span></li>
											</ul>
										</div>
										<div class="price-days-saving">
											<div class="dayz">
												<span class="days">days</span>
												<span class="date">6</span>					
											</div>
											<div class="saving" style="text-align: center;">
											<a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a>
											</div>
											<div class="pri">
												<span class="date">Price</span>
												<span class="days">$ 1,212</span>
											</div>
										</div>

										
										<ul class="aval">
											<!-- <li><a href="#"><i class="fa fa-circle" aria-hidden="true">  </i>Available</a></li> -->					
											<li><a href="#">View Deal</a></li>
										</ul>

										<p class="arrow">
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</p>												
									</div>
								</div>						
						</div>
						</div>
					</div>
			</div>
			</div>
			<!-- popular -->
			
			<!-- why -->

			
			<!-- attraction -->
	

@endsection