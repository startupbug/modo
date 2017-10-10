console.log("custom js");

base_url  = '/mondotraveller/';

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
