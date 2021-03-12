<?php

  include_once('connection.php');

  class Rezultat extends Connection {
    
      private $poruka;
      protected $user_type;
      protected $tehnologija;
      protected $pottip;
   
      public function obrabotka($search, $user_type){

        // ako korisnikot doagja preku pocetnata strana a ne e prijaven
        if($_SESSION['login'] == false)
        {
            $_SESSION['search'] = $search;
            $_SESSION['user_type'] = $user_type;

            $error = "Mora prvo da se prijavite!";
            header("location: prijava.php?error=$error");

      } else {

      //  vo sprotivno se ispisuva poraka na results stranata so podatocite za korisnikot
            $this->user_type = $user_type;
            
            $sql = "SELECT * FROM users WHERE 
            (email= ? OR ime = ?) AND tip= ?";

            $stmt = $this->konekcija()->prepare($sql);
            $stmt->execute([$search, $search, $this->user_type]);
            $names = $stmt->fetchAll();
      
            foreach ($names as $name){
            $this->poruka .= 'Developer:  Ime: ' . $name["ime"] . '<br> Email: ' . $name["email"]. '<br> Tip:' . $name["tip"];
            $this->tehnologija = $name["tehnologija"];
            $this->pottip = $name['pottip'];
            }
            echo $this->poruka;
        }
      }
    }
