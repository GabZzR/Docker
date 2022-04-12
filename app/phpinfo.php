<?php
$db = new PDO('mysql:host=db;dbname=test', 'root', 'root');

$dh = $db->prepare("select * from test");
$dh->execute();
$data = $dh->fetchAll(PDO::FETCH_ASSOC);
// var_dump($data);
echo "WELCOME ".$data[0]["nom"];
// phpinfo();

?>
