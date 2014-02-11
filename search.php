<?php

include 'functions/wrapper.php';
include 'functions/table.php';
include 'functions/item.php';

if (isset($_GET['q'])) $q = $_GET['q'];
else $q = "";

head($q,$q." /");
if ($q != "")  {
echo "<section>SKINS : </section>";
getMod("select * from `MOD` M, TYPEMOD T where M.idTypeMODAssociated = T.idTypeMOD AND M.idTypeMODAssociated = 1 AND M.nameMOD LIKE '%".$q."%'") ;
echo "<section>MAPS : </section>";
getMod("select * from `MOD` M, TYPEMOD T where M.idTypeMODAssociated = T.idTypeMOD AND M.idTypeMODAssociated = 2 AND M.nameMOD LIKE '%".$q."%'") ;
}
else echo "<section> Empty search </section>"; 
footer();

?>