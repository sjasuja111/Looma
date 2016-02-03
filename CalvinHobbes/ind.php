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

if(isset($_POST))
	foreach($_POST as $ind)
	{
		if($ind == 1)
		{
			$info = array("title" => "Calvin and Hobbes", "author" => "Bill Watterson");
			$col->insert($info);
		}
		if($ind == 2)
		{
			$info = array("title" => "Parent", "mom" => "your mom");
			$col->insert($info);
		}
		if($ind == 3)
		{
			$info = array("title" => "Parent", "dad" => "Barack Obama");
			$col->insert($info);
		}
	}
?>










