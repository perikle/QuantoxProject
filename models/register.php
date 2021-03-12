<?php
include_once ('connection.php');

class Register extends Connection {
  // funkcija za vnesuvanje na korisnicite vo bazata
    public function registracija($ime, $email, $lozinka, $tip, $tehnologija, $pottip){

        try{
        $sql = "INSERT INTO users(ime, email, lozinka, tip, tehnologija, pottip)
                VALUES (?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->konekcija()->prepare($sql);
        $stmt->execute([$ime, $email, $lozinka, $tip, $tehnologija, $pottip]);
        $poraka = "Uspešna registracija!";
        header("location: ../index.php?poraka=$poraka");

    } catch (Exeption $e) {        
        echo "Greska pri registracijata! :" . $e->get_message();
    }
  }
}