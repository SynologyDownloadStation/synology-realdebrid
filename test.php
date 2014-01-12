<?php

include "realdebrid2.php";

$realDebrid = new RealDebridFileHost("url","username","password",array());
echo $realDebrid->Verify(true);
var_dump($realDebrid->GetDownloadInfo());

?>