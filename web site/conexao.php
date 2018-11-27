<?php

$co = mysqli_connect("localhost","root","","imo") or die("Conexão falhou");


    if(mysqli_connect_error()):
        echo "Falha na conexão: ".mysqli_connect_error();
    endif;
    

?>


