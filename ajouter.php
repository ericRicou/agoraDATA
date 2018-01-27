<?php include'connexionBDD_auth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Life ARE</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>

<body>
<?php


	//*
	$histo = $bdd->prepare("INSERT INTO `repertoire_are` (`Nom` ,`Prenom` ,`pass` , `adresse`, `e_mail`,`port`, `fixe`, `fonction`, `pass1`  )
		VALUES ('', '', '', '', '', '', '', '', '', '', '')");
	$histo->execute();
	//*/
	$reqrecherche = $bdd->prepare('SELECT * FROM `repertoire_are` WHERE ID IN (SELECT MAX(ID) AS ID FROM `repertoire_are`)');
	$reqrecherche->execute();
	$donneesrecherche=$reqrecherche->fetch();
	$_SESSION['rechercheagent']=$donneesrecherche['ID'];
	
	header('Refresh: 0.5; URL="./modificationrepertoire.php"');

?>

</body>

</html>
