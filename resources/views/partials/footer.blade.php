<footer id="main-footer">
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
					<div class="logo-img">
              <a href="http://site.startupbug.net:6999/mondo/"><img src="{{ asset('public/img/footer-logo.png') }}"></a>
          </div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
					<div class="row footer-links">
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 float-left">
              <div class="footer-menu">
                <h3>Mondo Traveler</h3>
                <ul>
                  <li><a href="#">Destination</a></li>
                  <li><a href="#">Travel Type </a></li>
                  <li><a href="http://site.startupbug.net:6999/mondo/deals.php">Deals</a></li>
                  <li><a href="http://site.startupbug.net:6999/mondo/tour-comparator.php">Trip comparator</a></li>
                  <li><a href="http://site.startupbug.net:6999/mondo/magazine.php">Magzines</a></li>
                  <li><a href="http://site.startupbug.net:6999/mondo/reviews.php">Reviews </a></li>
                </ul>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 float-left">
              <div class="footer-menu">
                <h3>For Operators</h3>
                <ul>
                  <li><a href="#">About</a></li>
                  <li><a href="http://site.startupbug.net:6999/mondo/login.php">Log In </a></li>
                  <li><a href="http://site.startupbug.net:6999/mondo/sign-up.php">Sign Up</a></li>
                  <li><a href="#">Travellers' Choice</a></li>
                  <li><a href="#">List your tours</a></li>
                  <li><a href="#">Help</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 float-left">
              <div class="footer-menu">
                <h3>For Travellers</h3>
                <ul>
                  <li><a href="#">Why <span class="spn"> MondoTraveler?</a></span></li>
                  <li><a href="#">Why Touring</a></li>
                  <li><a href="#">Days to Come - Magazine</a></li>
                  <li><a href="#">Share your review</a></li>
                  <li><a href="#">Flights</a></li>
                  <li><a href="#">Referral program </a></li>
                </ul>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 float-left">
              <div class="footer-menu" style="padding-left: 57px;">
                <h3>Social Link</h3>
                <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Google+ </a></li>
                  <li><a href="#">Pintrest</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Youtube</a></li>
                </ul>
              </div>
            </div>
          </div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
					<div class="copy-right">
            <p>All rights Reserved © 2017 <a href="#"> Mondo Traveller</a>, Designed & Developed by   <a href="#"> Startupbug.net</a></p>
          </div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('public/js/moment.min.js') }}"></script>
        <script src="{{ asset('public/js/collapse.js') }}"></script>
    <script src="{{ asset('public/js/transition.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/custom.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script >
	$(document).ready(function() {
    $('#myCarousel').carousel({
	    interval: 3000
	})
});
</script>
<script type="text/javascript">
    jQuery(document).ready(function($){
        var url = window.location.href;
        $('.main-nav li a[href="'+url+'"]').addClass('current_page_item');
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function($){
        var url = window.location.href;
        $('.footer-menu ul li a[href="'+url+'"]').addClass('current_page');
    });
</script>

<!-- <script >
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script> -->
<script>
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();    
    if ( scroll > 110 ) {
        $("header").addClass("dark-header");
    }
    else if ( scroll < 110 ) {
        $("header").removeClass("dark-header");
    }
});
</script>
<script>
    $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
</script>
<script>
$(document).ready(function(){
   $("p.arrow").click(function(){
       $(this).parents('.course-detail-front').find(".desc-trip").toggle();
   });
});
</script>
<script>
  var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();
</script>

<!--  -->
<script>
$(document).ready(function () {
    $(".btn-select").each(function (e) {
        var value = $(this).find("ul li.selected").html();
        if (value != undefined) {
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
    });
});

$(document).on('click', '.btn-select', function (e) {
    e.preventDefault();
    var ul = $(this).find("ul");
    if ($(this).hasClass("active")) {
        if (ul.find("li").is(e.target)) {
            var target = $(e.target);
            target.addClass("selected").siblings().removeClass("selected");
            var value = target.html();
            $(this).find(".btn-select-input").val(value);
            $(this).find(".btn-select-value").html(value);
        }
        ul.hide();
        $(this).removeClass("active");
    }
    else {
        $('.btn-select').not(this).each(function () {
            $(this).removeClass("active").find("ul").hide();
        });
        ul.slideDown(300);
        $(this).addClass("active");
    }
});

$(document).on('click', function (e) {
    var target = $(e.target).closest(".btn-select");
    if (!target.length) {
        $(".btn-select").removeClass("active").find("ul").hide();
    }
});
</script>
<!--  -->
<script>
$(document).ready(function(){
   $("div#fir-ro .input-group-btn").click(function(){
       $(this).parents('div#fir-ro .input-group.custom-search-form.filter-frm').find(".drop ul").toggle();
   });
});
</script>
<!-- <script>
$(document).ready(function(){
  $(".main-box .header h3").click(function(){
      $(this).parent().parent().find(".bodys").toggle();
  });
});
</script> -->
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker5').datetimepicker();
    });
</script>
