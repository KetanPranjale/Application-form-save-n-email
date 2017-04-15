<?php

// if($_POST['name']){  // $_POST array stored as key->value pair
// 	echo $_POST['name'];
// 	echo "<br>Email given is ";
// 	echo $_POST['email'];
// }
// TESTing code
/*
echo "about to print ",count($_POST)," values in post ";
ftruncate($_POST["termsnconditions"]);

foreach ($_POST as  $key=>$value) {
	if($key!="termsnconditions")
		echo "<br>$key ->	$value";
}
echo '<br>wel past terms contions<br>';

echo "<title>Writing database</title>";
*/

// // Saving data from Application form into mongodb dataBase
$client = new MongoClient();
$db = $client->selectDB('AppForms');
$coll = $db->partdatacoll; // $coll = $client->AppForms->partdatacoll; alternate way to select collection
// $coll->insert( [ 'name' => $_POST['name'], 'email' => $_POST['email'] ] );

// Specify unique key for collection in database commnadis : db.partdatacoll.createIndex({email:1},{unique:true})
//db.partdatacoll.createIndex({name:1,email:1},{unique:true}) : apply both createIndex unique value for making
// (email unique) & (name & email unique), if same name with different email dataBase will accept

//Creating array from POST variable
if(!empty($_POST)){ //Check if no data has been submitted
	foreach ($_POST as $key=>$value) {
		if($key!="termsnconditions" && !empty($value)) {//To avoid the 'termsnconditions' field as it common & big size and empty fields
			$eqvPost[$key]=$value; //creating array[key=>value] without empty data & without termsnconditions field
			// echo '<br>',$key,"->",$value;
		}
	}
}
// echo '<br> equivalent post',$eqvPost;

$coll->insert($eqvPost); // adding the equivalent post array with key->value pair to the collection in database
if($client->close()){
	echo "<h3>Updated dataBase</h3><br>Successfully closed mongodb connection";
}
//// Saving data over

//// Sending email to specified emailId


// header("Location:Application Form v1.1.php"); // after processing data, redirect to new Application form
//header("location:Application Form v1.1.php"); // sent to blank application form
header("location:javascript://history.go(-1)"); // after processing data, redirect to Same Application form

// exit;
?>
