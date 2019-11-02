<?php
header("Content-type: text/xml");

$schemafile = fopen("uilo.owl", "r") or die("Unable to open file!");
echo fread($schemafile, filesize("uilo.owl"));
fclose($schemafile);
