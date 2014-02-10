<?php

include 'functions/wrapper.php';
include 'functions/table.php';
include 'functions/item.php';

if (isset($_GET['q'])) $q = $_GET['q'];
else $q = "";

head($q,$q." /");
echo "<section>SKINS : </section>";
if ($q != "") getMod("select * from `MOD` M, TYPEMOD T where M.idTypeMODAssociated = T.idTypeMOD AND M.idTypeMODAssociated = 1 AND M.nameMOD LIKE '%".$q."%'") ;
echo "<section>MAPS : </section>";
if ($q != "") getMod("select * from `MOD` M, TYPEMOD T where M.idTypeMODAssociated = T.idTypeMOD AND M.idTypeMODAssociated = 2 AND M.nameMOD LIKE '%".$q."%'") ;

footer();

?>