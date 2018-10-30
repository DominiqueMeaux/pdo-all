
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="assets/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>Exercice PDO</title>
    </head>
    <body class="blue-light"  id="imgIndex">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PDO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" id="part1" href="#">par1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="hide" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Partie 1
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="view/viewExo1.php">Exercice1</a>
          <a class="dropdown-item" href="view/viewExo2.php">Exercice2</a>
          <a class="dropdown-item" href="view/viewExo3.php">Exercice3</a>
          <a class="dropdown-item" href="view/viewExo4.php">Exercice4</a>
          <a class="dropdown-item" href="view/viewExo5.php">Exercice5</a>
          <a class="dropdown-item" href="view/viewExo6.php">Exercice6</a>
          <a class="dropdown-item" href="view/viewExo7.php">Exercice7</a>
        </div>
      </li>
      <li class="nav-item active">
          <a class="nav-link" id="part2" href="#">par2 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Partie 2
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="view/part2v/ajout-patient.php">Exercice1</a>
          <a class="dropdown-item" href="view/viewExo2.php">Exercice2</a>
          <a class="dropdown-item" href="view/viewExo3.php">Exercice3</a>
          <a class="dropdown-item" href="view/viewExo4.php">Exercice4</a>
          <a class="dropdown-item" href="view/viewExo5.php">Exercice5</a>
          <a class="dropdown-item" href="view/viewExo6.php">Exercice6</a>
          <a class="dropdown-item" href="view/viewExo7.php">Exercice7</a>
        </div>
      </li>
      
      
    </ul>
  </div>
</nav>
        <div id="part1C">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/exo1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/exo2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/exo3.png" alt="Third slide">
    </div>
       <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/exo4.png" alt="Fourth slide">
    </div>
       <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/exo5.png" alt="Fifth slide">
    </div>
       <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/exo6.png" alt="Sixth slide">
    </div>
       <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/exo7.png" alt="Seventh slide">
    </div>
  </div>
  <a class="carousel-control-prev indigo darken-4" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next indigo darken-4" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon " aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>    
        
        <div id="part2C">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <a href='http://pdo/view/home.php#'><img  class="d-block w-100" src="assets/img/home.png"  alt="First slide"></a>
    </div>
    <div class="carousel-item">
        <a href='http://pdo/view/part2v/ajout-patient.php'><img class="d-block w-100" src="assets/img/exo1p2.png" alt="Second slide"></a>
    </div>
    <div class="carousel-item">
        <a href='http://pdo/view/part2v/liste-patients.php'><img class="d-block w-100" src="assets/img/exo2p2.png" alt="Third slide"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
        <script>
            $(document).ready(function(){
    $("#part1").click(function(){
        $("#part2C").hide();
             $("#part1C").show();
    });
    $("#part2").click(function(){
        $("#part1C").hide();
             $("#part2C").show();
    });
    
});
        </script>
    </body>
</html>