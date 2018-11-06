<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="style.css">
   <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="../public/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">   
  <!-- Brand -->
  <a class="navbar-brand" href="../index.php" id="logo">Sénémania</a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="../index.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../model/realisateur.php">les realisateurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../model/acteur.php">les acteurs</a>
      </li> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="lister.php" >supprimer un film</a>
          <a class="dropdown-item" href="ajout.php">ajouter un film</a>
          <!-- <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
    </ul>
  </div> 
</nav>
  <div class="couleurssss">
  <center>
<h1>SénéMania</h1>
</center>
<div class="container">
  <form method="POST">
    <input type="text" name="nom_film" placeholder="Nom film">
    <input type="text" name="type" placeholder="Type">
    <input type="text" name="description" placeholder="Description">
    <input type="text" name="an_sortie" placeholder="Annee de sortie">
    <input type="text" name="genre" placeholder="Genre">
    <input type="text" name="realisateur" placeholder="le realisateur">
    <input type="text" name="photo_film" placeholder="lien photo film">
    <input type="submit" name="valide" value="INSERT">

  </form>

  <?php
  //ouverture d'une connexion a la base de donnee
  $objetPdo = new PDO('mysql:host=localhost;dbname=annuaire','root','');

  //preparation requete

  $pdoStat = $objetPdo->prepare('INSERT INTO film(nom_film, type, description, an_sortie, genre, realisateur, photo_film) VALUES (:nom_film, :type, :description, :an_sortie, :genre, :realisateur, :photo_film)');

  //on lie les marquers

  $pdoStat->bindParam("nom_film",$_POST['nom_film']);
  $pdoStat->bindParam("type",$_POST['type']);
  $pdoStat->bindParam("description",$_POST['description']);
  $pdoStat->bindParam("an_sortie",$_POST['an_sortie']);
  $pdoStat->bindParam("genre",$_POST['genre']);
  $pdoStat->bindParam("realisateur",$_POST['realisateur']);
  $pdoStat->bindParam("photo_film",$_POST['photo_film']);


  //execution
  

  if (isset($_POST['valide']))
  {$insertIsok = $pdoStat->execute();
   echo 'Le film a bien été ajouter';
  }
  else
  {
    $message = '';
  }
   ?>

  


</div>

</body>
</html>
