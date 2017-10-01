<?php
ini_set('max_execution_time', 300); 
$directory = "test/";
$images = glob($directory . "*.jpg");

foreach($images as $image)
{
$file_name_with_full_path = realpath($image); //use path to your image
$curl_handle = curl_init("http://cl-api.vize.ai/2708");

curl_setopt($curl_handle, CURLOPT_POST, 1);
$args['image'] = new CurlFile($file_name_with_full_path, 'image/jpg'); // set your image TYPE (png, jpg, jpeg)
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $args);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array(
    "authorization: JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOjI2MjYsImlhdCI6MTUwNjgxMzA5MywiZXhwIjoxNTE0NTg5MDkzfQ.36np18a2F-p_q5kqdJEFIP4zR7TCCre42UTjRji-Hok",
    "cache-control: no-cache",));

//execute the API Call
$returned_data = curl_exec($curl_handle);
$output = json_decode($returned_data);

curl_close ($curl_handle);
//echo $returned_data; 
?>

</br>
<?php
$out1 = $output->{'scores'};
$people= $out1->{'People'};
//echo $people;
?>

</br>
<?php
$no_people= $out1->{'no people'};
//echo $no_people;


if ($people>0.999)
{
	?>
	<img src="<?php echo $image ?>">
	<?php 
	echo("Classfied as Image with people");
	$rand=rand(300561,300609);
	$longitude=$rand/10000;
	$rand=rand(954598,955012);
	$latitude= (-1)*($rand/10000);
	//echo($longitude);
	//echo(" ");
	//echo($latitude);
	try {
  $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=disasterrelief","root","",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 // print_r($dbh);
  $dbh->beginTransaction();
 
   $dbh->exec("insert into drone (latitude,longitude) values('$latitude','$longitude')")
        or die(print_r($dbh->errorInfo(), true));
  $dbh->commit();
        //$url='customer.php';
        //echo '<META HTTP-EQUIV=REFRESH CONTENT="0;'.$url.'">';
        //exit();
 
} catch (PDOException $e) {
  echo $e->getMessage();
 
}

}
else 
{
	?>
	<img src="<?php echo $image ?>">
	<?php 
	echo("Classfied as Image without people");
}
}
/*$servername = "localhost";
$username = "root";
$password = "qwerty";
$dbname = "artist";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ArtistID, FirstName, LastName, YearOfBirth, YearOfDeath  FROM artists";
$result = $conn->query($sql);
}*/



?>
