
<!DOCTYPE html>
<html>
<head>
        <title></title>
</head>
<body>
<H1>Recherche du Nom: </H1>
  <DIV>
    <BR>
    <CENTER>
      <FORM ACTION="recherche.php" METHOD="POST">
      Entrer le ID : <INPUT TYPE="text" NAME="name">
      <BR><BR>
        <INPUT TYPE="submit" name="recherche" VALUE="Rechercher">
      </FORM>
    </CENTER>
    <BR><BR><BR>

  </DIV>
</body>
</html>
<?php
$db= new PDO('mysql:host=localhost;dbname=annuaire','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//On determine l'expression a rechercher
 $h = $_POST['name'];
 

  $rea = $db->prepare('SELECT * FROM `film` WHERE `nom_film`like "%":h"%"');
$rea->execute(array(
        'h' => $h));


if(isset($_POST['recherche']))

 while($rea1 = $rea->fetch()) {
    echo $rea1['nom_film'] .'<br>';
}
$rea->closeCursor();




?>