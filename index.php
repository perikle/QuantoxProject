<?php
session_start();

if(isset($_GET['ime']))
$ime = $_GET['ime'];

if(isset($_GET['poraka']))
$poraka = $_GET["poraka"];
else $poraka="";

 if(isset($_GET['prijava']))
 session_unset();
?>
<html>
  <head>
  <title>Početna</title>
    <link rel="stylesheet" href="views/css/style.css" />
  </head>
   <body>
   <?php include("views/navigacija.php"); ?>

        <!-- poraka za dobredojde ili uspesna registracija -->
     <p class="poraka"><?php if(isset($ime)) echo "Dobredojde  " . $ime; ?></p>
     <p style="color: green; font-size: 1.2em"><?php echo $poraka; ?></p>
     
     <!-- forma i nejzina validacija -->
     <form name="searchForm" action="views/results.php" method="post"
      onSubmit="return proveriSearch(this.search.value)">
        <fieldset>
      <legend>Pronajdi developer</legend>
         <label for="search">Email ili Ime</label>
         <input type="text" name="search" id="search" /><br><br>
         <label for="">Tip na korisnik</label>
         <select name="user_type" id="userType">
         <option value="">Izberi tip na korisnik</option>
         <option value="Front-end">Front End Developer</option>
         <option value="Back-end">Back End Developer</option>
         </select><br ><br >
         <input type="submit" name="submit" id="submit" value="potvrdi" />
        </fieldset>
     </form>
     <!-- kraj na formata -->
    </div>
    
    <!-- skripta za validacija  -->
<script type="text/javascript" src="js/indexVal.js" ></script>
</body>
</html>