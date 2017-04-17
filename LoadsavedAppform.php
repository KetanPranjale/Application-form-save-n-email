<?php
/** Modifying the html file code
$html=new DOMDocument();
$html->loadHTMLFile('Application Form v1.1.php');
$html->getElementsByName('email')->defaulvalue='pranjale.ks@gmail.com';
*/
  // $_POST['email']='ketangonsalvis@email.com';
  // header("location:Application Form v1.1.php");
  $rowval['email'] = 'pranjale.ks@gmail.com';
  include 'Application Form v1.1.php';
?>
