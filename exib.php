<?php 

    include 'config.php';
    $selct = "SELECT * FROM qtable";

    $dados = mysqli_query($conn,$selct);


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
  <body>
    <a href="form.php"><img src="https://cdn-icons-png.flaticon.com/512/60/60793.png" class="retrn" alt=""></a>
      <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>EMAIL</td>
                    <td>TEL</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <form action="action.php" method="post" class="crudform">
                    <td scope="row"></td>
                    <td><input  class="inpt inpmenu" type="text" name="nome"></td>
                    <td><input  class="inpt inpmenu" type="text" name="email"></td>
                    <td><input  class="inpt inpmenu" type="text" name="tel"></td>
                    <td><input  class="inpt inpmenu" type="text" name="id" placeholder="Insira o Id para Editar:"></td>
                    <td><button class="btmenu" type="submit" name="sub" value="edit" ><span class="material-symbols-outlined">
edit
</span></button></td>
                
                    </form>
                </tr>
                <?php 
                    while($recive = mysqli_fetch_array($dados)){

                        $id = $recive['id'];
                        $nome = $recive['nome'];
                        $email = $recive['email'];
                        $tel = $recive['tel'];




                   
                
                
                
                
                
                ?>
                <tr>
                    <td class="td" scope="row"><?php echo $id  ?></td>
                    <td class="td"><?php echo $nome   ?></td>
                    <td class="td"><?php echo $email   ?></td>
                    <td class="td"><?php echo $tel   ?></td>
                    <form action="action.php" method="post">
                        <td><input type="hidden" name="id" value="<?php echo $id   ?>"></td>
                        <td><button class="btmenu" type="submit" name="sub" value="del" ><span class="material-symbols-outlined">
                        delete
                        </span></button>
                    </form></td>
                
                </tr>
                <?php  }; ?>
            </tbody>
        </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>