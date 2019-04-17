<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>insertar.php</title>
  </head>
  <body>


    Hola <?php echo htmlspecialchars($_POST['nombre']); ?>. <br><br>
Aquest és el teu missatge: <?php echo htmlspecialchars($_POST['mensaje']); ?>.

<?php
include 'connexioDB.php';
$name = htmlspecialchars($_POST['nombre']);
$message = htmlspecialchars($_POST['mensaje']);
$horario = date('Y-m-d H:i:s');

$validarnombre = mysqli_real_escape_string($con, $name);
$validarmensaje = mysqli_real_escape_string($con, $message);
 
if ($validarnombre==null) {
  die("ERROR: Has d'introduir un nom per poder escriure al xat. " . mysqli_errno($con));
} 

if ($validarnombre==null) {
  die("ERROR: Has d'introduir un missatge per poder escriure al xat. " . mysqli_errno($con));
}
 
$sql = "INSERT INTO missatges (usuari, texto, hora)
VALUES ('{$name}', '{$message}', '{$horario}')";


if (mysqli_query($con, $sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_errno($con);
}

header("Location: index.php");
exit();



$con->close();



 ?>



</body>
</html>
