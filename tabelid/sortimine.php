<?php
require("abifunktsioonid.php");
if(isSet($_REQUEST["sort"])){
    $kaubad=kysiKaupadeAndmed($_REQUEST["sort"]);
} else {
    $kaubad=kysiKaupadeAndmed();
}
?>
<!DOCTYPE html >
<html lang="et">
<head>
    <title>Kaupade leht</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />  </head>
<body>
<h1>Kaupade leht</h1>
<table>
    <tr>
        <th><a href="?sort=nimetus">Nimetus</a></th>
        <th><a href="?sort=grupinimi">Kaubagrupp</a></th>
        <th><a href="?sort=hind">Hind</a></th>
    </tr>
    <?php foreach($kaubad as $kaup): ?>
        <tr>
            <td><?=$kaup->nimetus ?></td>
            <td><?=$kaup->grupinimi ?></td>
            <td><?=$kaup->hind ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>