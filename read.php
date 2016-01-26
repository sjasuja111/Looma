<?php
try
{
	$m = new MongoClient(); 
	$db = $m->selectDB("example");
	$col = $db->loomatest;
}
catch(MongoConnectionException $e)
{
	echo "Error connecting to MongoDB. Make sure you have run the command mongod --dbpath data/";
	exit();
}

echo "READING BOOBYPOOY <br/>";
$query = array("title"=>"boobypoopy");
$cursor = $col->find($query);


foreach($cursor as $doc)
{
	echo var_dump($doc) . "<br/>";
}
?>
