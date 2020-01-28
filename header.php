<?php
session_start();
$config = include "config.php";
echo "<!DOCTYPE html>";
echo "<html lang=es-MX>";
echo "<head>";

echo "<meta charset=UTF-8>";
echo "<title>$title</title>";
echo "<script 
	src=https://code.jquery.com/jquery-3.4.1.min.js
  integrity=sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=
  crossorigin=anonymous></script>";
echo "<link rel=stylesheet href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css integrity=sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T crossorigin=anonymous>";
echo "<script src=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js integrity=sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM crossorigin=anonymous></script>";
echo "<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css' integrity='sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=' crossorigin='anonymous' />";
echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/jquery.tablesorter.js' integrity='sha256-vtbCELc4mfidIiNdxWDVPvAK5AI86PbpSotyWoGUyxE=' crossorigin='anonymous'></script>";
echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/extras/jquery.tablesorter.pager.min.js' integrity='sha256-t1OsUny1JnHT2Vct43Q4Rg5WRkQkcUgs8iQIFuAnkMw=' crossorigin='anonymous'></script>";
echo "<link type=image/x-icon href=papirhos_im.ico rel=icon />";               
echo "<link rel=stylesheet type=text/css href=$config[doc_root]css/menu2.css>";               
echo "<link rel=stylesheet type=text/css href=$config[doc_root]css/general.css>";
echo "<link rel=stylesheet type=text/css href=$config[doc_root]css/media.css>";                 
echo "<link rel=stylesheet type=text/css href=$config[doc_root]css/grid.css>";
echo "</head>";


echo"
<body>
<div id=contenedor>

<div id=encabezado>
<div id=logoizq onclick=window.open('http://www.unam.mx'); style=cursor:pointer;>
</div>
<div id=logomid>
</div>
<div id=logoder onclick=window.open('http://www.matem.unam.mx'); style=cursor:pointer;>
</div>
</div>
<div id=menuencabezado>";
include $config["base_dir"]."menu.php";
echo "</div>";

?>
