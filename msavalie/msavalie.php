<?php

if(isset($_POST['submit']))
{
  include_once('mysql.php');

  $stars = "";
  $text = "";
  
  if(isset($_POST['text']))
  {
    $text = $_POST['text'];
  }

  if(isset($_POST['stars']))
  {
    $stars = $_POST['stars'];
  }

  $result = mysqli_query($conexao,"INSERT INTO avaliacao(stars, text) VALUES ('$stars', '$text')");

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MS Avalie</title>

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<style>

@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

body
{
  background: #4a4a4c !important;
}

.starrating > input {display: none;}  /* Remove radio buttons */

.starrating > label:before { 
  content: "\f005"; /* Star */
  margin: 2px;
  font-size: 3em;
  font-family: FontAwesome;
  display: inline-block; 
}



.starrating > label
{
  color: #222222; /* Start color when not clicked */
}

.starrating > input:checked ~ label
{ color: #ffca08 ; } /* Set yellow color when star checked */

.starrating > input:hover ~ label
{ color: #ffca08 ; } /* Set yellow color when star hover */

.starrating > label:hover {
  cursor: pointer;
  cursor: hand;
}

</style>

</head>

<body>

<nav class="navbar bg-white p-0">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./imagens/MSavelie-270.png" alt="Logo" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>

<h1 class=" justify-content-center d-flex mt-5"> <span class="badge text-bg-danger ">Avalie a Móveis Simonetti </span></h1>
 
    <form action="msavalie.php" method="POST">

      <div class="container">
              <div class="starrating risingstar d-flex justify-content-center flex-row-reverse ">
                  <input type="radio" id="star5" name="stars" value="5" /><label for="star5" title="5 star"></label>
                  <input type="radio" id="star4" name="stars" value="4" /><label for="star4" title="4 star"></label>
                  <input type="radio" id="star3" name="stars" value="3" /><label for="star3" title="3 star"></label>
                  <input type="radio" id="star2" name="stars" value="2" /><label for="star2" title="2 star"></label>
                  <input type="radio" id="star1" name="stars" value="1" /><label for="star1" title="1 star"></label>
              </div>
      </div>

      <div class="container">
        <div class="col-5  mx-auto">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="color: white;">Escreva uma resenha</label>
            <input class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></input>
          </div>
        </div>
      </div>
      
      <div class="container col-4"><button type="submit" class="btn btn-primary " name="submit" value="enviar">Enviar</button></div>

    </form>
 
    
</body>
</html>