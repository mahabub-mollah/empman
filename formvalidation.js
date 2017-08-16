  $(function(){

    var error_name = false;
  	var error_password = false;
    var error_email = false;
    var error_phone = false;

  	$("#username_error_msg").hide;
  	$("#email_error_msg").hide;
  	$("#adress_error_msg").hide;
  	$("#phone_error_msg").hide;

  	

   $("#username").focusout(function(){

   	 check_name();



   });

   function check_name(){
   var username_length = $("#username").val().length;
        if (username_length < 5 || username_length > 20) {
   	   $("#username_error_msg").html("Should be between 5-20 characters");
   	    $("#username_error_msg").show();
   	      error_name = true ;
       }
   else{
   	      $("#username_error_msg").hide;

     }

  }
   
   $(#form).submit(function(){

   	var error_name = false;
  	var error_password = false;
    var error_email = false;
    var error_phone = false;

    if (error_name == false) {

    	return true;
    }else{
    	return false
    }


   });


});











  