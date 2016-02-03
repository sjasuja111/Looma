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

	$col->drop();
	$info = array("title" => "Calvin and Hobbes", "author" => "Bill Watterson");
	$col->insert($info);
	$info = array("title" => "poopi", "author" => "Bill Watterson");
	$col->insert($info);
	$info = array("title" => "poopisupi", "author" => "Bill Watterson");
	$col->insert($info);
	$info = array("title" => "boobypoopy", "author" => "Bill Watterson");
	$col->insert($info);
	$info = array("title" => "Calvin and poops", "author" => "Bill Watterson");
	$col->insert($info);
	$info = array("title" => "Roshan the little boy", "author" => "Bill Watterson");
	$col->insert($info);
	$info = array("title" => "Computer my butt", "author" => "Bill Watterson");
	$col->insert($info);
	$info = array("title" => "IT HEAVEN", "author" => "Bill Watterson");
	$col->insert($info);
	$info = array("title" => "babyfriends", "author" => "Bill Watterson");
	$col->insert($info);
	$info = array("title" => "Adult frienz", "author" => "Bill Watterson");
	$col->insert($info);
	

			echo "WE DID IT!";

?>
