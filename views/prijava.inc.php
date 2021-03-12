<?php 
session_start();

include_once('../controller/loginController.php');

if(isset($_GET['greska']))
$greska = $_GET['greska'];
else $greska = "";

if(isset($_GET['error']))
$error = $_GET['error'];
else $error = "";

if(isset($_POST["potvrdi"])){
       // funkcija koja gi cisti vleznite podatoci 
    function test_input($data){
		trim($data);
		htmlspecialchars($data);
		htmlentities($data);
		return $data;
	}
    $email = test_input($_POST["eadresa"]);
    $lozinka = test_input($_POST["lozinka"]);

    // podatocite procisteni se prakjaat na funkcijata na kontrolorot
    $obj = new loginControlor();
    $obj->loginProverka($email, $lozinka); 
 }   
?>