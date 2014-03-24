<?php
include 'functions/wrapper.php';
include 'functions/table.php';
include 'functions/item.php';
head("add","<a href='add.php'>Add</a> /");

function unzip($path) {
	 $zip = new ZipArchive;
	 if($path == "skin") $res = $zip->open('tmp/skin.zip');
	 elseif($path == "map") $res = $zip->open('tmp/map.zip');
	 if ($res === TRUE) {
	 if ($path == "skin" ) $zip->extractTo('tmp');
	  elseif ($path == "map") $zip->extractTo('tmp');
	  $zip->close();
	  echo 'It works';
	} else {
	  echo 'Fail !';
	}
}

function submitFile($type) {
	system('mkdir tmp');
	if ($type == "skin") {
		system('cp *.pk3 tmp/skin.zip');
		system('mv *.pk3 mods/skins');
		unzip("skin");
		system('mv `find -name icon_default.jpg` img/skins/avatar.jpg');
		}
	else if($type == "map") {
		system('cp *.pk3 tmp/map.zip');
		system('mv *.pk3 mods/maps');
		unzip("map");
		system('cd tmp && mv `find -name *jpg` ../img/maps/mapscreen.jpg');
	}
	system('rm -Rf tmp');
}
?>

<form id="sendfile" method="get" action="add.php">
    <section>
        <table>
            <tr>
                <td class="label">
                    <label>Name :</label>
                </td>
                <td>
                    <input name="name" type="text" required />
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label>Description (optional) :</label>
                </td>
                <td>
                    <textarea rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label>Type of mod :</label>
                </td>
                <td>
                    <SELECT name="type">
                        <OPTION VALUE="skin" selected>Skin</OPTION>
                        <OPTION VALUE="map">Map</OPTION>
                    </SELECT>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label>PK3 File :</label>
                </td>
                <td>
                    <input name="file" type="file" required />
                </td>
            </tr>
            <tr><td></td><td>
        <input type="submit" value="submit" />
</td></tr>
        </table>
    </section>
</form>




<?php
footer();
?>