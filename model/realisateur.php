<?php 
 require_once '../vendor/autoload.php';

 function realisateur()
 {
	   try
    {
        $db = new PDO('mysql:host=localhost;dbname=annuaire;charset=utf8', 'root', '');
       
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

	    $rea = $db->query('SELECT * FROM `realisateur`,`film`  WHERE `nom_realisateur`=`realisateur` ');
	  
	   return $rea;
	    
    }
	$loader = new Twig_loader_Filesystem('../view/frontend');
    $twig= new Twig_Environment($loader,[
        'cache' =>false, //__DIR__.'/temp'
    ]);


    echo $twig->render("realisateur.twig",['rea'=>realisateur()]);

 ?>