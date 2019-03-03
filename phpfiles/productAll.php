<?php
include 'configuration/config.php';
try
{
    $servername=$config['DB_HOST'];
    $dbname=$config['DB_DATABASE'];
	$username=$config['DB_USERNAME'];
	$password=$config['DB_PASSWORD'];
	
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `id`, `address`, `city`, `email_id`, `mobile_number`, `name`, `pincode`, `state`, `surname`, `product_id` FROM `address` WHERE 1";
$result = mysqli_query($conn, $sql);
$myJson = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

$myObj =  new \stdClass();
       
$myObj->id =$row['id'];
$myObj->address =$row['address'];
$myObj->city =$row['city'];
$myObj->email_id =$row['email_id'];
$myObj->mobile_number =$row['mobile_number'];
$myObj->name =$row['name'];
$myObj->pincode =$row['pincode'];
$myObj->state =$row['state'];
$myObj->surname =$row['surname'];

$myObj->product_id =$row['product_id'];

array_push($myJson, $myObj);

	   }
} else {
    echo "0 results";
}

$myJSON = json_encode($myJson);

print_r($myJSON);

mysqli_close($conn);


}
catch(PDOException $e)
{
    echo "Error:".$e->getMessage();
}
?>