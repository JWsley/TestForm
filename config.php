<?php 



    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbn = "formulario";

    $conn = mysqli_connect($host,$user,$pass,$dbn);


    if(!$conn){
        echo "<span class='spantxt'>error</span>";
    }

    // }  echo "<span class='spantxt'>OK!</span>";}





?>