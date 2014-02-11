-- MOD :
-- idMOD
-- nameMOD
-- descMOD
-- linkMOD
-- picMOD
-- idTypeMODAssociated

-- TYPEMOD :
-- idTypeMOD
-- nameTypeMod


create table `MOD` (
    `idMOD` INT NOT NULL AUTO_INCREMENT,
    `nameMOD` VARCHAR(15) NOT NULL,
    `descMOD` VARCHAR(100),
    `linkMOD` VARCHAR(100) NOT NULL,
    `picMOD` VARCHAR(100),
    `idTypeMODAssociated` INT NOT NULL,
    PRIMARY KEY (`idMOD`)
);

create table `TYPEMOD` (
    `idTypeMOD` INT NOT NULL AUTO_INCREMENT,
    `nameTypeMOD` VARCHAR(15) NOT NULL,
    PRIMARY KEY (`idTypeMOD`)
);

INSERT INTO `TYPEMOD`(`idTypeMOD`,`nameTypeMOD`) VALUES (1,"skin");
INSERT INTO `TYPEMOD`(`idTypeMOD`,`nameTypeMOD`) VALUES (2,"map");

INSERT INTO `MOD`(`nameMOD`,`descMOD`,`linkMOD`,`picMOD`,`idTypeMODAssociated`) VALUES ("unskin","une desc de skin","#","img/skins/skinsample.jpg",1);
INSERT INTO `MOD`(`nameMOD`,`descMOD`,`linkMOD`,`picMOD`,`idTypeMODAssociated`) VALUES ("unskin","une desc de skin","#","img/skins/skinsample.jpg",1);
INSERT INTO `MOD`(`nameMOD`,`descMOD`,`linkMOD`,`picMOD`,`idTypeMODAssociated`) VALUES ("unskin","une desc de skin","#","img/skins/skinsample.jpg",1);
INSERT INTO `MOD`(`nameMOD`,`descMOD`,`linkMOD`,`picMOD`,`idTypeMODAssociated`) VALUES ("unskin","une desc de skin","#","img/skins/skinsample.jpg",1);
INSERT INTO `MOD`(`nameMOD`,`descMOD`,`linkMOD`,`picMOD`,`idTypeMODAssociated`) VALUES ("unskin","une desc de skin","#","img/skins/skinsample.jpg",1);

INSERT INTO `MOD`(`nameMOD`,`descMOD`,`linkMOD`,`picMOD`,`idTypeMODAssociated`) VALUES ("unemap","une desc de map","#","img/maps/mapsample.jpg",2);
INSERT INTO `MOD`(`nameMOD`,`descMOD`,`linkMOD`,`picMOD`,`idTypeMODAssociated`) VALUES ("unemap","une desc de map","#","img/maps/mapsample.jpg",2);
INSERT INTO `MOD`(`nameMOD`,`descMOD`,`linkMOD`,`picMOD`,`idTypeMODAssociated`) VALUES ("unemap","une desc de map","#","img/maps/mapsample.jpg",2);
INSERT INTO `MOD`(`nameMOD`,`descMOD`,`linkMOD`,`picMOD`,`idTypeMODAssociated`) VALUES ("unemap","une desc de map","#","img/maps/mapsample.jpg",2);
INSERT INTO `MOD`(`nameMOD`,`descMOD`,`linkMOD`,`picMOD`,`idTypeMODAssociated`) VALUES ("unemap","une desc de map","#","img/maps/mapsample.jpg",2);

-- function showtable() {
-- 	include'config.php';
-- 	try {	
-- 	$connection=new PDO($serveur, $utilisateur, $motDePasse, $option);
-- 	$select = $connection->query("select * from `MOD`");
-- 	}
-- 	catch(PDOException $e) {
--     $msg = 'PDO ERROR at' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
--     die($msg);
-- 	}
-- 	$select->setFetchMode(PDO::FETCH_OBJ);
-- 	$colcount = $select->columnCount();

-- 	echo '<section><table id="tables">';
-- 	echo '<tr class="tabletr">';
-- 	for ($i = 0 ; $i<$colcount ; $i++) {
-- 		$meta = $select->getColumnMeta($i);
-- 		echo '<th class="tableth">', $meta["name"], '</th>';
-- 	}
-- 	echo '</tr>';
-- 	while ($ligne = $select->fetch() ) {
-- 		echo '<tr class="tabletr">';
-- 		for ($i = 0 ; $i<$colcount ; $i++) {
-- 			$meta = $select->getColumnMeta($i);
-- 			echo '<td class="tabletd">',$ligne->$meta["name"],'</td>';
-- 		}
-- 		$meta = $select->getColumnMeta(0);
-- 		$nom = $ligne->$meta["name"];
-- 		$meta = $select->getColumnMeta(1);
-- 		$intitule = $ligne->$meta["name"];
-- 		echo '</tr>';
-- 		}
-- 	echo '</table></section>';
-- }