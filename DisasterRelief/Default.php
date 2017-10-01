<!--


-->



<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<script src="js/jquery-3.1.1.min.js"></script>

		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/myStyle.css">

	</head>
<body onload="getLocation()">
<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {

        navigator.geolocation.getCurrentPosition(showPosition);

    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    // alert("before 2");
 	// alert(x.innerHTML);
    // x.innerHTML = "Latitude: " + position.coords.latitude + 
    // "<br>Longitude: " + position.coords.longitude;
    // alert(x.innerHTML);
    document.getElementById("latitude").value = position.coords.latitude;
    document.getElementById("longitude").value = position.coords.longitude;

    document.getElementById("latitude1").value = position.coords.latitude;
    document.getElementById("longitude2").value = position.coords.longitude;
    // alert("done")

    // alert();
    // alert("in");
}
</script>



<nav class="navbar navbar-inverse">
	        <div class="container">
	          <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	              <span class="sr-only">Toggle navigation</span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="#">UTAHackthon</a>
	          </div>
	          <div class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
           		 <li class="active"><a href="default.php">DisasterRelief</a></li>
	              <li><a href="About.php">About us</a></li>
	                  
	                </ul>
	              </li>
	             

	            </ul>
			        

	          </div>
	        </div>
        </nav>


        <p id="demo">
        	
        </p>
<div class="jumbotron">
      <div class="container">
      	<div class="row">
      		<form class="form-horizontal col-md-6 span6 mycontent-left">
				<fieldset>

					<!-- Form Name -->
					<legend class="text-center">Request Help</legend>
						<input class="form-group" type="hidden" id="latitude" name="latitude" value='lat' />
						<input class="form-group" type="hidden" id="longitude" name="longitude" value='long'/>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="name">Name</label>  
					  <div class="col-md-4">
						  <input id="name" name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="">
						    
					  </div>

					</div>

					<!-- phone input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="phone">Phone</label>
					  <div class="col-md-4">
					    <input id="phone" name="phone" type="phone" placeholder="Enter a phone" class="form-control input-md" required="">
					    
					  </div>
					</div>


					<!-- Urgency input-->
					<div class="form-group">
					    <label class="col-md-4 control-label" for="email">Availability</label>  
						   <div class="dropdown col-md-4">
						    <!-- <button class="btn btn-default dropdown-toggle col-md-12" type="button" id="menu1" data-toggle="dropdown">select
						    <span class="caret"></span></button> -->

						    <select class="form-control" id="urgency" name="urgency">
							    <option value="1">High</option>
							    <option value="2">Medium</option>
							    <option value="3">Low</option>
							</select>

						  <!--   <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1 day<input type="hidden" id="vl" name="vl" value=""></a></li>
						      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2 day</a></li>
						      <li role="presentation" selected><a role="menuitem" tabindex="-1" href="#">3 day</a></li>
						     
						     
						    </ul> -->
						  </div>
					</div>

					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="signup"></label>
					  <div class="col-md-4">
					    <button id="request" name="request" class="btn btn-success">Request</button>
					  </div>
					</div>
				</fieldset>
			</form>

			<form class="form-horizontal col-md-6 span6">
				
					<fieldset>
						<input class="form-group" type="hidden" id="latitude1" name="latitude" value='lat' />
						<input class="form-group" type="hidden" id="longitude2" name="longitude" value='long'/>

							<!-- Form Name -->
						<legend class="text-center">Volunteer</legend>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="name">Name</label>  
						  <div class="col-md-4">
							  <input id="name" name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="">
							    
						  </div>

						</div>

						<!-- phone input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="phone">Phone</label>
						  <div class="col-md-4">
						    <input id="phone" name="phone" type="phone" placeholder="Enter a phone" class="form-control input-md" required="">
						    
						  </div>
						</div>


						<!-- Urgency input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="email">Availability</label>  
						   <div class="dropdown col-md-4">
						    <!-- <button class="btn btn-default dropdown-toggle col-md-12" type="button" id="menu1" data-toggle="dropdown">select
						    <span class="caret"></span></button> -->

						    <select class="form-control" id="availability" name="availability">
							    <option value="1">1 day</option>
							    <option value="2">2 day</option>
							    <option value="3">3 day</option>
							</select>

						  <!--   <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1 day<input type="hidden" id="vl" name="vl" value=""></a></li>
						      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2 day</a></li>
						      <li role="presentation" selected><a role="menuitem" tabindex="-1" href="#">3 day</a></li>
						     
						     
						    </ul> -->
						  </div>
						</div>

						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="signup"></label>
						  <div class="col-md-4">
						    <button id="submit" name="submit" class="btn btn-success">Request</button>
						  </div>
						</div>
					</fieldset>
				</form>
      	</div>
      

      </div>
</div>




</body>
</html>
<?php
function getDB()
{
	try {	

			  $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=disasterrelief","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			  
			
		 return $dbh;
		  
		} catch (PDOException $e) {
		  print "Error!: " . $e->getMessage() . "<br/>";
		  die();
		}

}


if(isset($_GET['request']))
{


try
{
 $dbh=getDB();

	 $dbh->beginTransaction();
 	$stmt = $dbh->prepare(	"INSERT INTO helpseeker (name, phone, Urgency, latitude,longitude) VALUES ('".$_GET['name']."','".$_GET['phone']."','".$_GET['urgency']."','".$_GET['latitude']."','".$_GET['longitude']."')");
	
	$stmtMatch = $dbh->prepare(	"SELECT * from Volunteer;");	
	$stmtMatch->execute();

	$flag="false";
			  $Searchcontent='';
			  while ($row = $stmtMatch->fetch()) {

			  	$flag="true";
			  	echo '
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<p><div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

							</div>
							<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<h4>name :'. $row["name"] . ' </h4> 
									<h5>phone:'.$row["phone"].' </h5>
									
									<h5>Available : '. $row["availability"].'</h5>

									

							</div></p>
						</div>

						';


				}	 


	 $stmt->execute();

	 $dbh->commit(); 

	 if($flag == "false")
	 {
	 	echo '<div class="alert alert-success fade in alert-dismissable" style="margin-top:18px;">
   			 <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
   			 <strong>Success!</strong> Request registered Successfully ! 
				</div>';
	
	 }
	 

}

catch(PDOException $e) {

		echo '<div class="alert alert-danger fade in alert-dismissable">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
			    <strong>Error!</strong> ' .$e->getMessage().'This alert box indicates a dangerous or potentially negative action.
			</div>';

		  die();
		}

}

if(isset($_GET['submit']))
{


try
{
 $dbh=getDB();

	 $dbh->beginTransaction();
 	$stmt = $dbh->prepare(	"INSERT INTO volunteer (name, phone, availability, latitude,longitude) VALUES ('".$_GET['name']."','".$_GET['phone']."','".$_GET['availability']."','".$_GET['latitude']."','".$_GET['longitude']."')");
			 
 	// echo $_GET['latitude'] . $_GET['longitude'];

	 $stmt->execute();

	 $dbh->commit(); 

	 echo '<div class="alert alert-success fade in alert-dismissable" style="margin-top:18px;">
   			 <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
   			 <strong>Success!</strong> Request registered Successfully ! 
				</div>';


}

catch(PDOException $e) {

		echo '<div class="alert alert-danger fade in alert-dismissable">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
			    <strong>Error!</strong> ' .$e->getMessage().'This alert box indicates a dangerous or potentially negative action.
			</div>';

		  die();
		}

}


?>

