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

	$existinginfo = array("title" => "Calvin and Hobbes");
	$newinfo = array('$set' => array("genre" => "nonfiction"));
	$col->update($existinginfo, $newinfo);
	
	echo "WE UPDATED IT!";

?>
