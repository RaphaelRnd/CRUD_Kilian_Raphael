<?php
include("vues/v_admin.php");
$fiches=$pdo->getFiches();
$etats=$pdo->getEtat();
include("vues/v_listeFiche.php");
include("vues/v_modif.php");
$action = $_REQUEST['action'];


switch($action){
	case 'changerEtat':{
            $etat = $_REQUEST['etat'];
            $id = $_REQUEST['idFiche'];
			$pdo->changeEtat($id, $etat);
            header('Location: /GSB-Frais-main/GSB-Frais-main/index.php?uc=ficheFrais');
		break;
	}
	case 'changerLibelle':{
			header('Location: /GSB-Frais-main-dep/index.php?uc=ficheFrais');
			echo "ok";
		break;
	}
}