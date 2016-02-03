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

	$col->remove(array("title" => "Calvin and Hobbes"));

	echo "WE DELETED THE CALVIN AND HOBBES ONE!";

?>