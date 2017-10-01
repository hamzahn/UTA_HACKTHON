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
		<script type="text/javascript">
		 var username = "patilspranav";
		
		var markers = [];
		var marker;
		var map;
		var k=0;
		var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;



      function initMap() { 
        var myLatLng = ({lat: 29.979098, lng: -95.459125});

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }



      function yohoo(location) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.

        var marker = new google.maps.Marker({
          position: location,
          label: labels[labelIndex++ % labels.length],
          map: map
        });
      }

      </script>

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2uf5py-n33-Wb-57fL9h08Kfpj1s_wxY&callback=initMap" type="text/javascript"></script>

	</head>
<body onload="initialize();>

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
<div class="jumbotron">
      <div class="container">
      	<div class="row">
      		

				    <div id="map" style="width: 600px; height: 500px;"></div><br/>
				    
				    <div>

				    &nbsp;</div>
				  
				

			
      

      </div>
</div>




</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "disasterrelief";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *  FROM drone";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
        $latitude = $row["latitude"];
        $longitude = $row["longitude"];
        
        ?>
        <script type="text/javascript">
        var lat1 = <?php echo json_encode("$latitude", JSON_HEX_TAG); ?>;
        //alert(lat1);
        var lon1 = <?php echo json_encode("$longitude", JSON_HEX_TAG); ?>;
        var myLatLng = ({lat: float(lat1), lng: float(lon1)});
        
        //var myLatLng2 = ({lat: 29, lng: -95});
        //yohoo(myLatLng2, map);
        yohoo(myLatLng);
        </script>

        <?php


    }
} else {
        $url='error.php';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">';
        exit();
        }
$conn->close();


?>

