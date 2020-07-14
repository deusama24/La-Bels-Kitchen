<!doctype html>
<html lang="en">
<head>
	<!doctype html>
<html lang="en">
<head>
	<!-- Required Bootstrap meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!--STYLESHEETS BELOW-->
	
	<!--Bootstrap CSS, Put before other stylesheets-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
	<!--Homepage Stylesheet-->
	<link rel="stylesheet" href="Homepage.css">
	<link rel="stylesheet" href="Order Page.css">
	
	<!--STYLESHEETS ABOVE-->
	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="263497103303-17ogd1h18iu2go6re752gt8jo7tfh2l2.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
	

	<!--title-->
	<title>Find Your Order</title>
	
	<style type="text/css">
		table{
		border-collapse: collapse;
		width: 100%;
		color: #d96459;
		font-family: monospace;
		font-size:25px;
		text-align: left;
		}
	</style>

</head>

<body>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="Homepage.html"><img id="main-logo"src="Logos/Burger Logo.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="Order Page.html">Order Page</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="Order_Queue.html">Order Queue</a>
      </li>
	  <li class="nav-item">
        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
		
		<script>
		  function onSignIn(googleUser) {
			// Useful data for your client-side scripts:
			var profile = googleUser.getBasicProfile();
			console.log("ID: " + profile.getId()); // Don't send this directly to your server!
			console.log('Full Name: ' + profile.getName());
			console.log('Given Name: ' + profile.getGivenName());
			console.log('Family Name: ' + profile.getFamilyName());
			console.log("Image URL: " + profile.getImageUrl());
			console.log("Email: " + profile.getEmail());

			// The ID token you need to pass to your backend:
			var id_token = googleUser.getAuthResponse().id_token;
			console.log("ID Token: " + id_token);
			}
		  
		  // auth2 is initialized with gapi.auth2.init() and a user is signed in.

		if (auth2.isSignedIn.get()) {
		  var profile = auth2.currentUser.get().getBasicProfile();
		  console.log('ID: ' + profile.getId());
		  console.log('Full Name: ' + profile.getName());
		  console.log('Given Name: ' + profile.getGivenName());
		  console.log('Family Name: ' + profile.getFamilyName());
		  console.log('Image URL: ' + profile.getImageUrl());
		  console.log('Email: ' + profile.getEmail());
		}
		</script>
      </li>
	  
	  <li class="nav-item">
		<button class="btn btn-primary btn-md" onclick="signOut();">Sign out</button>
		<script>
		  function signOut() {
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function () {
			  console.log('User signed out.');
			  location.reload();
			});
		  }
		</script>
	  </li>
    </ul>
  </div>
</nav>

<!--CODE TO DISPLAY THE ORDERS BELOW-->

<table>
<!--CODE FOR TABLE-->
	<tr>
		<th>Order Number</th>
		<th>First Name</th>
		<th>Contact Number</th>
		<th>Address</th>
		<th>Baked Macaroni</th>
		<th>Carbonara</th>
		<th>Cheese Burger</th>
	</tr>
	
<!--CODE FOR TABLE LOGIC, SHOWING DATABASE-->

<?php

	// Create connection
	$con = mysqli_connect('localhost', 'root', '');
	// Check connection
	if(!$con){
		echo 'Failed to connect to Server';
	}
	
	if(!mysqli_select_db($con,'orders')){
		echo 'Database Not Selected';
	}

	$sql = "select order_no, First_Name, Last_Name, Contact_Number, Address, Baked_Macaroni, Carbonara, Cheese_Burger, from orders";
	$result = $con-> query($sql);

	if ($result-> num_rows > 0){
	

	
?>

	
</table>

<!--CODE TO DISPLAY THE ORDERS ABOVE-->




	
	<!--
	<h1 style="text-align:center; padding-top:20%"> THIS PAGE IS UNDER CONSTRUCTION! </h1>
	-->
	
	<!--Bootstrap JS-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>