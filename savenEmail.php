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

// // Saving data from Application form into mongodb dataBase starts
$client = new MongoClient();
$db = $client->selectDB('AppForms');
$coll = $db->partdatacoll; // $coll = $client->AppForms->partdatacoll; alternate way to select collection
// $coll->insert( [ 'name' => $_POST['name'], 'email' => $_POST['email'] ] );

// Specify unique key for collection in database commnadis : db.partdatacoll.createIndex({email:1},{unique:true})
//db.partdatacoll.createIndex({name:1,email:1},{unique:true}) : apply both createIndex unique value for making
// (email unique) & (name & email unique), if same name with different email dataBase will accept

//Creating array from POST variable
if(!empty($_POST)){ //To Check if no data has been submitted
	foreach ($_POST as $key=>$value) {
		if($key!="termsnconditions" && !empty($value)) {//To avoid the 'termsnconditions' field as it common & big size and empty fields
			//$key= str_replace("medical_","medical.",$key);
			$eqvPost[$key]=$value; //creating array[key=>value] without empty data & without termsnconditions field
			//echo '<br>',$key,"=>",$value;
		}
	}
} 

// echo '<br> equivalent post',$eqvPost;
	if($coll->findOne(array('email'=>$eqvPost['email']))) {
		$coll->update(array('email'=>$eqvPost['email']),array('$set'=>$eqvPost));
		echo "<h3>Updated dataBase</h3>";
	}
	else {
		$coll->insert($eqvPost); // adding the equivalent post array with key->value pair to the collection in database
		echo "<h3>Added to dataBase</h3>";
	}
if($client->close()){
	echo "<br>Successfully closed mongodb connection";
}
//// Saving data is over


//// Sending email to specified emailId

// email format 1

// $to = 'pranjale.ks@gmail.com';
// $subject = 'Saved Application form link';
// $message = 'http://localhost/LoadsavedAppform.php?email=pranjale.ks@gmail.com';
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// $headers .= 'From: Noreply <noreply@example.com>' . "\r\n";
// // 'X-Mailer: PHP/' . phpversion();
// $mailsta=mail($to, $subject, $message, $headers);

// email format 2

// $msg = "First line of text\nSecond line of text";
// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);
// // send email
// $mailsta=mail("pranjale_ks@yahoo.com","My subject",$msg);
//
// echo "<br> mail is Successfully sent, status is $mailsta";

// link sending via email is over

// header("Location:Application Form v1.1.php"); // after processing data, redirect to new Application form
//header("location:Application Form v1.1.php"); // sent to blank application form
// header("location:javascript://history.go(-1)"); // after processing data, redirect to Same Application form
// exit;
?>
