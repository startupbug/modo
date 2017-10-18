console.log("custom js");

//Initializations
base_url  = '/mondotraveller/';
$(".se-pre-con").hide();


$("#register_form").on('submit', function(e){
      e.preventDefault();
     
     // $("#LoaderGif").show();
      var formData = new FormData(this);

      $.ajaxSetup({
          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
      });

      $.ajax({
              url: window.base_url + '/register',
              type: 'post', 
              data: new FormData(this),
              processData: false,
              contentType: false,
             //  dataType: "json",
              // contentType: "application/json; charset=utf-8",              
  			  success: function (data) {
  		          //$("#LoaderGif").hide();
  		          console.log(data);
  		          toastr.success(data.msg);
  			        }, 
  			  error: function (data) { 
  		         // $("#LoaderGif").hide();
               console.log("in error");
  		          console.log(data);
  		          toastr.error("Email is already taken");   
  			  }			                    
        });        

});

//Login Form

$("#login_form").on('submit', function(e){
      e.preventDefault();
      var formData = new FormData(this);
      $.ajaxSetup({
          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
      });
      $.ajax({
            url: window.base_url + "login",
            type: 'post', 
            data: formData,
            processData: false,
            contentType: false,
             //  dataType: "json",
              // contentType: "application/json; charset=utf-8",              
          success: function (data) {
                //$("#LoaderGif").hide();
                console.log("success");
                console.log(data.responseText);
                toastr.success(data.responseText);
                setTimeout(function(){   window.location.href = base_url  + '/'; }, 1600);
                }, 
          error: function (data) { 
               // $("#LoaderGif").hide();
               console.log("in error");
                console.log(data);   
          } 
        });
});

  $("#tour_dur").mouseup(function(e){
       e.preventDefault();
     $("#searchTripForm").submit();
     console.log('tour_dur::' + $(this).val());
  });

  $("#tour_price").mouseup(function(e){
       e.preventDefault();
     $("#searchTripForm").submit();
     console.log('tour_price::' + $(this).val());
  });  

  function startDateChange(e){
    console.log('startDateChange');
    console.log("start date: " + $("#start_date").val());
    $("#searchTripForm").submit();  
  }

  function startEndChange(e){
    console.log('startEndChange');
    $("#searchTripForm").submit();     
  }

  function FilterformData(){
     console.log( $("#start_date").val() );
     console.log( $("#end_date").val() );
     console.log( $("#tour_price").val() );
     console.log(  $("#tour_dur").val() );
  }

  //Physical checkbox event check
   var physical = [];
  $('input[name="physical"]').click(function() {
       
      $.each($("input[name='physical']:checked"), function(){          
          physical.push($(this).val());
      });
      console.log(physical);
     $("#searchTripForm").submit();        
  });

  var service = [];
  $('input[name="service"]').click(function() {
       
      $.each($("input[name='service']:checked"), function(){          
          service.push($(this).val());
      });
      console.log(service);
     $("#searchTripForm").submit();        
  });  

  var travel_style = [];
  $('input[name="travel_style"]').click(function() {
       
      $.each($("input[name='travel_style']:checked"), function(){          
          travel_style.push($(this).val());
      });
      console.log(travel_style);
     $("#searchTripForm").submit();        
  }); 

  $("#resetForm").click(function(e){
    
     $("#start_date").val('');
     $("#end_date").val('');
     $("#tour_price").val(0);
     $("#tour_dur").val(0);
     $.each($("input[name='physical']:checked"), function(){          
        $(this).prop('checked', false)
     });
     $.each($("input[name='service']:checked"), function(){          
        $(this).prop('checked', false)
     });
     $.each($("input[name='travel_style']:checked"), function(){          
        $(this).prop('checked', false)
     });         
     FilterformData();
  });

  $("#searchTripForm").on('submit', function(e){
      e.preventDefault();
      console.log("searchTripForm");
      $(".se-pre-con").show();
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
        });
        //Get whole form data here if pssible 
        var formCustData = {'start_date': $("#start_date").val(), 'end_date': $("#end_date").val(),
         'tour_dur': $("#tour_dur").val(), 'tour_price': $("#tour_price").val(), 
         'search_term': $("#search_term").val(), 'physical': physical, 'service': service, 'travel_style': travel_style};  
      //  var formData = $("#searchTripForm").serialize();
        console.log("formdata");
        //console.log(formData);
        $.ajax({
              url: window.base_url + "trip-search-filter",
              type: 'post', 
              data: formCustData, //formData,
               //  dataType: "json",
                // contentType: "application/json; charset=utf-8",              
            success: function (data) {
                  //$("#LoaderGif").hide();
                  console.log("success");
                  //console.log(data);

                  physical = [];
                  $("#ajaxViewBoxes").html(data);
                  loadAjax($("#search_term").val());
                  $(".se-pre-con").hide();
                  }, 
            error: function (data) { 
                 // $("#LoaderGif").hide();
                 console.log("in error");
                 console.log(data);
                  $(".se-pre-con").hide();
            } 
          });      

  });

  function loadAjax(search_term){
     $(".searchTripAjaxPagi").on('click', function(e){
        e.preventDefault();
        $(".se-pre-con").show();
        console.log("Page ajax trip");
        console.log($(this).data('id'));
        console.log("search_term" + search_term);
        var pagiUrl = $(this).data('id');

        $.ajax({
              url: window.base_url + "trip-search-filter-pagi",
              type: 'post', 
              data: {'pagiUrl': pagiUrl, 'search_term':search_term}, //formData,
               //  dataType: "json",
                // contentType: "application/json; charset=utf-8",              
            success: function (data) {
                  //$("#LoaderGif").hide();
                  console.log("success");
                  //console.log(data);
                  physical = [];
                  $("#ajaxViewBoxes").html(data);
                  loadAjax();
                   $(".se-pre-con").hide();
                  }, 
            error: function (data) { 
                 // $("#LoaderGif").hide();
                 console.log("in error");
                 console.log(data);
                  $(".se-pre-con").hide();
            } 
          });
     });
  }

