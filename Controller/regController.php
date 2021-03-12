<?php

include_once("../models/register.php");

//   vnesuvanje na korisnicite vo bazata posredno preku kontrolorot
class RegController extends Register {

    public function registUser($ime, $email, $lozinka, $tip, $tehnologija, $pottip){
    $this->registracija($ime, $email, $lozinka, $tip, $tehnologija, $pottip);

    }
}

