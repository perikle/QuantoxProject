<?php
  include_once('../models/register.php');
  include_once('../Controller/regController.php');

if(isset($_POST['potvrdi'])){

  function test_input($data){
		trim($data);
		htmlspecialchars($data);
		htmlentities($data);
		return $data;
	}
    $ime = test_input($_POST['ime']);
    $email = test_input($_POST['email']);
    $pwd = test_input($_POST['pwd']);
    $pwd_pak = test_input($_POST['pwd_pak']);
    $tip = test_input($_POST['tip']);
    $tehnologija = test_input($_POST['tehnologija']);
    $pottip = test_input($_POST['pottip']);
    $poraka = test_input($_GET['poraka']);

    $reg = new RegController();
    $reg->registUser($ime, $email, $pwd, $tip, $tehnologija, $pottip);
}
?>