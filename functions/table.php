<?php
function selectSkins() {
	include'config.php';
	try {	
	$connection=new PDO($serveur, $utilisateur, $motDePasse, $option);
	$select = $connection->query("select * from `MOD` M, TYPEMOD T where M.idTypeMODAssociated = T.idTypeMOD AND M.idTypeMODAssociated = 1");
	}
	catch(PDOException $e) {
    $msg = 'PDO ERROR at' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
	}

	while ($ligne = $select->fetch() ) {
		$image = $ligne['picMOD'];
		$user = $ligne['nameMOD'];
		$description = $ligne['descMOD'];
		$link = $ligne['linkMOD'];
		item($image,$user,$description,$link);
	}
}

function selectMaps() {
	include'config.php';
	try {	
	$connection=new PDO($serveur, $utilisateur, $motDePasse, $option);
	$select = $connection->query("select * from `MOD` M, TYPEMOD T where M.idTypeMODAssociated = T.idTypeMOD AND M.idTypeMODAssociated = 2");
	}
	catch(PDOException $e) {
    $msg = 'PDO ERROR at' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
	}

	while ($ligne = $select->fetch() ) {
		$image = $ligne['picMOD'];
		$user = $ligne['nameMOD'];
		$description = $ligne['descMOD'];
		$link = $ligne['linkMOD'];
		item($image,$user,$description,$link);
	}
}

function getMod($sql) {
	include'config.php';
	try {	
	$connection=new PDO($serveur, $utilisateur, $motDePasse, $option);
	$select = $connection->query($sql);
	}
	catch(PDOException $e) {
    $msg = 'PDO ERROR at' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
	}

	while ($ligne = $select->fetch() ) {
		$image = $ligne['picMOD'];
		$user = $ligne['nameMOD'];
		$description = $ligne['descMOD'];
		$link = $ligne['linkMOD'];
		item($image,$user,$description,$link);
	}
}

?>