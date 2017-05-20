s<?php
/** Modifying the html file code
$html=new DOMDocument();
$html->loadHTMLFile('Application Form v1.1.php');
$html->getElementsByName('email')->defaulvalue='pranjale.ks@gmail.com';
*/
  // $_POST['email']='ketangonsalvis@email.com';
  // header("location:Application Form v1.1.php");

$emailID=$_GET[email];

/** // Fetching data from database as per the email */
$client = new MongoClient();
$db = $client->selectDB('appforms');
$coll = $db->partdata;
$rowval= $coll->findOne(array('email'=>$emailID));
  // $rowval['email'] = 'manenamane@gmail.com';
  include 'index.php';
  // echo "<url>http://localhost/Application%20Form.php</url>";
?>
