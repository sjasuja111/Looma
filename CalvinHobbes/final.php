<?php
try
{
	$m = new MongoClient(); 
	$db = $m->selectDB("example");
	$collection = $db->loomatest;
}
catch(MongoConnectionException $e)
{
	echo "Error connecting to MongoDB. Make sure you have run the command mongod --dbpath data/";
	//echo $e;
	exit();
}

$query = array("title"=>"Parent");
// find() returns a cursor to a set of documents
$cursor = $collection->find($query);
foreach($cursor as $doc)
{
	var_dump($doc);
	echo "<br/>";
}
?>
