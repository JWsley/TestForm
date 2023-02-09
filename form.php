
<?php 

    include 'config.php';

?>




<!doctype html>
<html lang="pt-br">
  <head>
    <title>form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="cleave.js/dist/Cleave-angular.min.js"></script>
  </head>
  <body>
  <!-- <a class="caleicon" href="https://fonts.google.com/icons?icon.query=calendar"><span class="material-symbols-outlined ">
calendar_month
</span></a>

<a href="exib.php"><span class="material-symbols-outlined view">
	visibility
</span></a> -->

<a href="exib.php">
  <span class="material-symbols-outlined view">
  visibility
  </span>
</a>

<a href="calendar.php"><span class="material-symbols-outlined caleicon">calendar_month</span></a>


<form class="form" action="action.php" method="post">
                    <h1 class="title">Teste.</h1>

                        
                        <div class="inptslot"><span>Nome</span><input     required type="text" class="inpt " placeholder="Nome:" name="nome" id="nome"></div>               
                        <div class="inptslot"><span>Email</span><input    required type="email" class="inpt " placeholder="Email:" name="email" id="email"></div>                  
                        <div class="inptslot"><span>Telefone</span><input required  type="text" data-cleave="0000-0000" class="inpt t3l" placeholder="(00) 0 0000-0000" name="tel" id="tel"></div>
                        <BUtton type="submit" name="sub" value="send">Enviar</BUtton>
                    </form>







                    
                    <!-- Optional JavaScript -->
    <script src="./plugins/cleave.js"></script>
    <script src="js/cleave.min.js"></script>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>