<!doctype html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Code Challenge</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
<link href="css/custom.css" rel="stylesheet" />
<style type="text/css">
#loader {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  background: rgba(0,0,0,0.75) url(images/loading2.gif) no-repeat center center;
  z-index: 10000;
}
</style>
</head>
<body>
<div class="wrapper">
  <header>
    <div class="container">
    <h4 class="col-lg-9">Code Challenge</h4>
    
    </div>
  </header>
  <div class="container">
<form class="form horizontal" id="myform">
  <div class="row">
    <div class="col-xs-8">
		<label class="col-xs-4">Referral code:</label>
			<input type="text" id="user_id" name="referral_code"/>
			<input type="button" id="getUser" value="Get Details" class="btn btn-primary"/>
			<br/><div style='padding-left:250px;'>(Use Uppercase & Numbers Only)</div>
			<div class="user-content" style="display: none;">
				<h4>User Details</h4>
				<p>Name: <span id="userName"></span></p>
				<p>Email: <span id="userEmail"></span></p>
				<p>Phone: <span id="userPhone"></span></p>
			</div>
			<div id="error-data"></div>
    </div>
  </div>
</form>
</div>
</div>
<footer>
  <div class="container">
  </div>
</footer>
<div id="loader"></div>


 
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
var spinner = $('#loader');
$(document).ready(function(){
	$('#getUser').prop('disabled', true);
    $('#user_id').keyup(function () {
		if ($(this).val() == '') {
			// If there is no text within the input ten disable the button
	        $('#getUser').prop('disabled', true);
		} else {
			if ($(this).val().length > 6 ) {
				$('#getUser').prop('disabled', false);
			}else{
				//If there is text in the input, then enable the button
				$('#getUser').prop('disabled', true);
				}
		}
	});

	// Starts (Allow to enter only the alpha numeric values)
	$('#user_id').bind('keypress', function (event) {
		var regex = new RegExp("^[A-Z0-9\b]+$");
		var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
		if (!regex.test(key)) {
		   event.preventDefault();
		   return false;
		}
	});
	// Ends

    $('#getUser').on('click',function(){
		spinner.show();
        var user_id = $('#user_id').val();
        $.ajax({
            type:'POST',
            url:'getData.php',
            dataType: "json",
            data:{user_id:user_id},
            success:function(data){
                if(data.status == 'ok'){
					spinner.hide();
				    $('#error-data').css('display:none');
                    $('#userName').text(data.result.name);
                    $('#userEmail').text(data.result.email);
                    $('#userPhone').text(data.result.phone);
                    $('.user-content').slideDown();
                    $('#error-data').slideUp();
                }else{
                    $('.user-content').slideUp();
                    $('#error-data').slideDown();
                    $('#error-data').text("User Data not Found");
					//$(".user-content" ).text( "<p>User Data not Found.</p>" );
                    //alert("User not found...");
					spinner.hide();
                } 
            }
        });
    });
});




</script>
</body>
</html>