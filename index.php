<!DOCTYPE html>
<html lang="es">
 <head>
   <meta charset="UTF-8" />
 <title>xateja-ho!</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
 </head> 

 <body>
 <section id="titol">
 <h1>xateja-ho!</h1><br>
 </section>

 <section id="missatges">
<?php
    include 'connexioDB.php';
    $sql = "SELECT usuari, texto, hora FROM missatges ORDER BY hora";
    $result = mysqli_query($con, $sql);
?>
  <p>
  <?php while ($row = mysqli_fetch_assoc($result)) {
    printf("%s %s %s <p />", $row['hora'], $row['usuari'], $row['texto']);
  } ?> </p>
  <?php mysqli_free_result($result); ?>
  <?php mysqli_close($con); ?>
 </section>
<br>


<section id="formulari">
<form method="post" action="insertar.php">

<!-- COMPLETA EL CONTINGUT DEL FORMULARI -->
<input type="text" name="nombre" placeholder="el teu nom"><br>
<input type="text" name="mensaje" placeholder="el teu missatge"><br><br>
<input type="submit" name="enviar" value="xateja-ho"><br><br>
</form>
</section>


<section id="errors">
<p>línia per mostrar missatges d'error</p>
</section>



 </body>

</html>
