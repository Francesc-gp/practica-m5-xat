<?php

$con = mysqli_connect('isp-mysql.lanvnet.com', 'jofumods_com', '6ba8edef', 'jofumods_com');
if (mysqli_connect_errno()) {
    echo 'No es pot accedir a la base de dades: '.mysqli_connect_error();
}
