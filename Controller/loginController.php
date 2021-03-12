<?php
   include_once("../models/login.php");

  class LoginControlor extends Login {

     public function loginProverka($email, $lozinka){
        //  prvo proveruva dali korisnikot doagja preku početnata stranica 
        if(isset($_SESSION["search"]))
        {
            if($param = $this->proverka($email, $lozinka))
            {
            $search = $_SESSION['search'];
            $tip = $_SESSION['user_type'];
            $_SESSION['login'] = true;
            header("location: ../views/results.php?search=$search&&user_type=$tip"); }
        } else {
            if($param = $this->proverka($email, $lozinka)){
            $_SESSION['login'] = true;
            $_SESSION['ime'] = $param["ime"];
            $ime = $param['ime'];
            header("location: ../index.php?ime=$ime"); }
        }     
    }
}
