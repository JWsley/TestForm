<?php 

    include 'config.php';
    

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    
    $sub = $_POST['sub'];


    switch($sub){
            case 'send':


                $sqlSend = "INSERT INTO qtable(nome,email,tel) VALUES ('$nome','$email','$tel')";
                $execute = mysqli_query($conn,$sqlSend);
             
                echo "<script type='javascript'>alert('usuario cadastradi com Sucesso!');";
                echo "javascript:window.location='exib.php';</script>";
                break;

            case 'edit':
                $sqledit = "UPDATE qtable SET nome='$nome',email='$email',tel='$tel' WHERE id='$id' ";
                $execute = mysqli_query($conn,$sqledit);
                break;
            case 'del':
                $sqldel = "DELETE FROM  qtable WHERE id='$id'";
                $execute = mysqli_query($conn,$sqldel);
                break;
            



    }

    header('location:exib.php');




?>