<?php

include "realdebrid2.php";
if(empty($_GET['url'])) die();
$array_url = explode(',', $_GET['url']);
//var_dump($array_url);
$realDebrid = new RealDebridFileHost( $array_url,"benoit2600","md5password",array());
$realDebrid->GetDownloadInfo();
//var_dump($realDebrid->array_url);
echo json_encode($realDebrid->array_url);
/*if(strlen($monUrl['filename']==0) || $monUrl ==  false) // si real-debrid echoue, on renvoie la valeur de base.
	echo $_GET['url']; 

else
	echo $monUrl['downloadurl'];*/
?>
