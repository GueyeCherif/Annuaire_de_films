<?php 
 require_once '../vendor/autoload.php';

 function acteur()
 {
	   try
    {
        $db = new PDO('mysql:host=localhost;dbname=annuaire;charset=utf8', 'root', '');
       
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

	    $rea = $db->query('SELECT  * FROM `acteur`');
	   return $rea;
	    
    }
	$loader = new Twig_loader_Filesystem('../view/frontend');
    $twig= new Twig_Environment($loader,[
        'cache' =>false, //__DIR__.'/temp'
    ]);


    echo $twig->render("acteur.twig",['act'=>acteur()]);

 ?>