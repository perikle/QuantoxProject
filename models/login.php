<?php
include_once("connection.php");

class Login extends Connection {

    protected function proverka($email, $lozinka){

        $sql = "SELECT * FROM users WHERE email = ? AND lozinka = ?";

        $stmt = $this->konekcija()->prepare($sql);
        $stmt->execute([$email, $lozinka]);
        $names = $stmt->fetch();

        if($names['lozinka'] != $lozinka || $names['email'] != $email)
        {
            $greska = "Pogrešna email adresa ili lozinka! Obidete se povtorno!";
            header("location: prijava.php?greska=$greska");
           
        } else return $names;              
        }
    }
