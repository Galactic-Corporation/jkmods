<?php

function head($title,$breadcrumb) {
    echo'<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>JKMods | Downloads '.$title.'</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div id="content">

        <header>
            <div id="breadcrumb"><a href="index.php">Home</a> / ',$breadcrumb,'</div>
            <form method="get" action="search.php" id="search">
                <input name="q" type="text" size="40" placeholder="Search..." />
            </form>
            <ul id="nav">
                <li><a href="skins.php">SKINS</a>
                </li>
                <li></li>
                <li><a href="maps.php">MAPS</a>
                </li>

            </ul>


            <div id="bandenoir"></div>
            <img id="logo" src="img/logo.png" alt "Galactic Corporation" width="200">
        </header>';
}

function footer() {
    echo' </div>

    <footer>
        <div id="footer">
            <table id="footer-content">
                <tr>
                    <th>Mods
                        <hr>
                    </th>
                    <th>Jedi Academy
                        <hr>
                    </th>
                    <th>Tools
                        <hr>
                    </th>
                </tr>
                <tr>
                    <td><a target="_blank" href="http://kotf.com/">KotF</a>
                    </td>
                    <td><a target="_blank" href="http://councilmembers.forumotion.com">Jedi Council Order forum</a>
                    </td>
                    <td><a target="_blank" href="http://www.teamspeak.com/">Teamspeak</a>
                    </td>
                </tr>
                <tr>
                    <td><a target="_blank" href="http://www.japlus.net/">Japlus</a>
                    </td>
                    <td><a target="_blank" href="http://jediknight3.filefront.com/">JK3 Filefront</a>
                    </td>
                    <td><a target="_blank" href="http://incloak.com/">Online proxy</a>
                    </td>
                </tr>
                <tr>
                    <td><a target="_blank" href="http://www.moviebattles.com/">Movie Battles II</a>
                    </td>
                    <td>
                        <a target="_blank" href=""></a>
                    </td>
                    <td></td>
                </tr>

            </table>
        </div>
        <div id="footer2">Galactic Corporation © 2013-2014</div>
    </footer>
</body>

</html>';
}

?>