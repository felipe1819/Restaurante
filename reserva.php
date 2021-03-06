<?php
include_once 'crud_reserva.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Coltello Nell'impasto</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="stylesheet" type="text/css" href="css/reserva.css">
  
  
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-4KIc2mnKfAA7VjirNLk2Sqp7jxFNq1q8+FhYGxhW2l52lt4HJsfksL+hjswHfbl/" crossorigin="anonymous">
  

</head>
<body>
  

 
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php"><i>Coltello Nell'impasto</a></i>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="container">
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">História <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cardapio.html">Cardápio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bebidas.html">Bebidas</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="reserva.php">Reserva</a>
      </li>
    </ul>
  </div>
</div>
    
    <form class="form-inline my-2 my-lg-0" action="busca.php" method="post">
      <input name="buscar" class="form-control mr-sm-2" type="text" placeholder="Busca">
      <button class="btn btn-danger my-2 my-sm-0" type="submit">Buscar</button>
      
    </form>
  </div>
</nav>
<br><br><br><br><br>
<div class="container">

    <div class="row">
     <div class="col-sm-4"> 
    
    <center><b><i><h1>Faça a sua reserva</h1><hr></i></b></center>
    <br></div></div>

<div class="row">
<div class="col-sm-4">

<p>Charmoso e elegante, o Coltello Nell'impasto é um verdadeiro oásis da gastronomia italiana na Cidade Maravilhosa! Com uma decoração sofisticada, o restaurante se caracteriza por ter um ambiente extremamente delicado e acolhedor, a que se soma um serviço rápido e atencioso. <br></p>
<p>Horário de Funcionamento:<br><br>

<a>terça-feira à sexta-feira:</a> 12:00-15:00, 19:00-00:00<br>
<a>sábado:</a> 12:00-17:00, 19:00-00:00<br>
<a>domingo:</a> 12:00-17:00<br>
</a>segunda-feira: Fechado<br>
</p>

</div>

<!-- classe 2 -->


<div id ="classe2" class="col-sm-4">


</div>
<div class="col-sm-4">
<form action="" method="post">
  <fieldset>
    <legend><h2><i>Reserve sua mesa grátis</i></h2></legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label"></label>
      
    </div>
    <div class="form-group">
      <label>Seu nome</label>
      <input type="text" class="form-control" name="nome">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label>Quantidade de pessoas?</label>
      <select class="form-control" name="q_pessoas">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
       </select> 
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Horário desejado?</label>
      <select class="form-control" name="horario">
        <option>11:20</option>
        <option>11:00</option>
        <option>12:00</option>
        <option>13:00</option>
        <option>14:00</option>
        <option>15:00</option>
        <option>16:00</option>
        <option>17:00</option>
        <option>18:00</option>
        <option>19:00</option>
        <option>20:00</option>
        <option>21:00</option>
        <option>22:00</option>
        <option>23:00</option>
       </select>
     </div>
     <div class="form-group">
      <label for="exampleInputEmail1">Dia</label>
      <input type="date" class="form-control" name="data">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>


    <div class="form-group">
      <label for="exampleInputPassword1">Telefone</label>
      <input type="text" class="form-control" name="telefone" placeholder="(21) 9999-9999   ">
    </div>
    

    <button id="botao" type="submit" class="btn btn-danger" name="save">Reservar</button>
</form>
<br><br><br><br><br><br>
</div>
<center><strong>


</div></div></div>

<center>

<div class="footer">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #282828; border-color: #00000;">
<div class="container">
<a class="navbar-brand"> Rua Senador Dantas, 23, loja A  | Centro | Rio de Janeiro </a><br><br><a>reservas@coltellonellimpasto.com.br / +55 (21) 2269-2296</a>




  </div>
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>