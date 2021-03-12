<?php
include("prijava.inc.php");
?>
<html>
    <head>
    <title>Prijava</title>
        <link rel="stylesheet" href="css/style.css" />

    </head>
    <body>
        <div class="center"><p class="greska"><?php echo $greska . $error; ?></p>
        <p class="desno"><a href="../index.php">Početna</a>&nbsp; <a href="registracija.php" class="link">Registracija</a>

        <!-- proveruva dali korisnikot e prijaven i prikazuva link za odjava -->
        <?php if(isset($_SESSION['login']) && ($_SESSION['login']) === true){?>
        <a href="../index.php?prijava=false">Odjava</a><?php } ?></p>
          <div class="prijava">

           <!-- login forma i nejzina validacija-->
           <form name="prijava" id="prijava" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onSubmit="return proveriEmail(this.eadresa.value)
            && proveriLozinka(this.lozinka.value)">
            <fieldset>
            <legend>Prijava</legend>
               <label for="eadresa">Email </label>
               <input type="email" name="eadresa" id="eadresa" /><br><br>
               <label for="lozinka">Lozinka </label>
               <input type="password" name="lozinka" id="lozinka"  /><br><br>
               <input type="submit" name="potvrdi" value="Prijavi se" />
            </fieldset>
           </form>
           <!-- kraj na formata -->
          </div>

          <!-- skripta za validacija na formata -->
        </div><script type="text/javascript" src="../js/prijavaValidacija.js"></script>
    </body>
</html>