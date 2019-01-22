<?php

     $num = $_GET["num1"];

     if(is_numeric($num)){
        echo $num . ' euros est égal à '.$num*1.085965. ' USD.';
     } 
     else {
          echo "Valeur invalide!";
     }

?>