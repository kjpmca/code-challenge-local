<!DOCTYPE html>
<html>
<head>
<title>Task - Responsive Form</title>
<!-----Including CSS for different screen sizes----->
<link rel="stylesheet" type="text/css" href="css/responsiveform.css">
<link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="css/responsiveform1.css" />
<link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="css/responsiveform2.css" />
<link rel="stylesheet" media="screen and (max-width: 350px)" href="css/responsiveform3.css" />
</head>
<body>
<div id="envelope">
<form action="" method="post">
<header>
<h2>Task for Responsive Form</h2>
</header><br/>
<label>Your Name</label>
<input name="name" placeholder="Test Name" type="text" width="100px;">
<label>Email Id</label>
<input name="email" placeholder="yourname@gmail.com" type="text">
<label>Contact Number</label>
<input name="contact" placeholder="123456789" type="text">
<label>Website URL</label>
<input name="website" placeholder="www.yoursite.com" type="text">
<label>Message</label>
<textarea cols="15" name="message" placeholder="Message" rows="10">
</textarea>
<input id="submit" type="submit" value="Send Message">
</form>
</div>
</body>
</html>