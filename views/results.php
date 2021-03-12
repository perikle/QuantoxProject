<?php 
session_start();

include_once('../models/rezultat.php');
include_once('../models/broj.php');
?>
<html>
    <head>
       <link rel="stylesheet" href="css/results.css"/> 
          </head>
    <body>
        <div class="center">
               <div class="content">
                   <p class="desno"><a href="../index.php">Početna</a>&nbsp; &nbsp; 
                   <a href="../index.php?prijava=false">Odjava</a></p>
                   <h3><?php

                  //  podatocite koi gi isprakja loginController
                     if(isset($_GET['search'])){

                        $search = $_GET['search'];
                        $user_type = $_GET['user_type'];

                        $rez = new Rezultat();
                        $rez->obrabotka($search, $user_type);
                     }
                //  za korisnikot koj doagja od pocetnata strana se zemaat i se procistuvaat podatocite  
                      if(isset($_POST['submit']))
                      { 
                      function test_input($data){
                        trim($data);
                        htmlspecialchars($data);
                        htmlentities($data);
                        return $data;
                        }                        
                        $search = test_input($_POST['search']);
                        $user_type = test_input($_POST['user_type']);
                       
                        $rez = new Rezultat();
                        $rez->obrabotka($search, $user_type);                  
                      }?>
                      </div>
                      <div class="sidebar">
                      <?php  
                    // prikaz na broj na developeri po kategorii    
                        $br = new Broj($rez);
                        $br->brojTip();
                        $br->brojTehnologija();
                        $br->brojPottip();
                     ?>
                 </div>                   
          </div>                  
    </body>
</html>