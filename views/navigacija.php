<div class="center">
<p class="desno"><a href="views/registracija.php">Registracija</a>&nbsp;&nbsp;<?php if(isset($_SESSION['login']) && ($_SESSION['login']) === true){?>
<a href="index.php?prijava=false">Odjava</a><?php } else {?>
<a href="views/prijava.php">Prijava</a><?php } ?></p>
