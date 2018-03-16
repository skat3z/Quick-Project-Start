<!DOCTYPE html>
<html lang="en">
<head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<!-- PAGE SEO -->
<title>
<?php
$page = $_GET['id'];
echo "Bryan's Portfolio - ".$page;
?>
</title>
<meta charset='utf-8'>
<meta content='width=device-width, initial-scale=1, shrink-to-fit=no' name='viewport'>
<!-- Bootstrap CSS library library -->
<link crossorigin='anonymous' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' integrity='sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M' rel='stylesheet'>
<!-- Animate JS -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css' rel='stylesheet'>
<!-- Font Awesome -->
<link href='https://use.fontawesome.com/releases/v5.0.2/css/all.css' rel='stylesheet'>
<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=(ADD FONTS)' rel='stylesheet'>
<!-- Custom CSS -->
<link href='css/style.css' rel='stylesheet' type='text/css'>
</head>	

<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	echo '<body>';
	
	// SITE HEADER
	include 'header.html';
	
	// BODY
	
	include('haml-pages/'.$page.'.html');
	
	
	// FOOTER
	include('footer.html');

?> 

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jq.js"></script>
	
<!-- Popper & Boostrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
