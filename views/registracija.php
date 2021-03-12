<?php
include("reg.inc.php");
?>
<html>
    <head>
    <title>Registracija</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div class="center"><?php if(isset($poraka)) echo $poraka; ?><p class="desno"><a href="../index.php">Početna</a>&nbsp; 
        <a href="prijava.php">Prijava</a></p>

        <!-- forma za registracija i nejzina validacija -->
           <form name="register" id="register" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
            onSubmit="return proveriEmail(this.email.value) && proveriIme(this.ime.value) && 
            proveriLozinki(this.pwd.value, this.pwd_pak.value) &&proveriSifra(this.pwd.value);">
 
               <fieldset>
                   <legend>Registracija</legend>
                        <label for="tip">Tip</label>
                      <select name="tip" id="tip">
                        <option value="">Izberete tip</option>
                      </select><br><br>
                        <label for="tehnologija">Tehnologija</label>
                      <select name="tehnologija" id="tehnologija">
                        <option value="">Izberete tip prvo</option>
                      </select><br><br>
                        <label for="pottip">Pottip</label>
                      <select name="pottip" id="pottip">
                        <option value="">Izberete tehnologija prvo</option>
                      </select><br><br>
                        <label for="email">Email</label>
                      <input type="email" name="email" id="email"><br><br>
                        <label for="ime">Ime</label>
                      <input type="text" name="ime" id="ime"><br><br>
                        <label for="pwd">Lozinka</label>
                      <input type="password" name="pwd" id="pwd"><br><br>
                        <label for="pwd_pak">Lozinka potorno</label>
                      <input type="password" name="pwd_pak" id="pwd_pak"><br><br>
                      <input type="submit" name="potvrdi" value="Registriraj se">
                      </fieldset>
            </form>
           <!-- kraj na formata -->
          </div>
        <!-- skripti za select polinjata i validacija na formata -->
        <script type="text/javascript" src="../js/select.js"></script>
        <script type="text/javascript" src="../js/valRegistracija.js"></script>
    </body>
</html>