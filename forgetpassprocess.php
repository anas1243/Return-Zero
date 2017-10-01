<?php

	$Email_error = $DB_error ="";
	$Email="";

$conn = new mysqli('sql105.epizy.com','epiz_20780607','ahrgsZmpNa','epiz_20780607_zero');

	if($conn->connect_error) {

	$DB_error ="database connection error!";
} else{

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 //email validation

	if (empty($_POST["Email"])) {
    $Email_error = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);


    // check if e-mail address is well-formed with a built in function in php ^^
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $Email_error = "Invalid email format";
    }else {

    	$result= $conn->query("SELECT * FROM user WHERE Email = '$Email' ");
		 if( $result->num_rows == 0 ){

		 $Email_error = "This Email is not exits";

		 }else {


		 	  include 'Mailprocess.php';


				header( "Refresh:2; url=http://return-zero.epizy.com" );



		 }

  }
  }


}

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
