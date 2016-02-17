<!DOCTYPE html>
<html>
<head>
	<title>Array of Object IDs!!!</title>
	<style type="text/css">
	.timeline {
		border:1px solid #000;
		width:200px;
		display:inline-block;
		margin:10px;
	}
	</style>

	<script>
	function hello() {
		console.log(document.getElementById("hiclass"));
		document.getElementById("hiclass").remove();
		// console.log(this);
		// querySelector()
		// this.parentNode.remove();
	}
	</script>
</head>
<body>

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
	// INITIALIZE DB
	$col->drop();
	$info = array("title" => "Thing 1", "author" => "Author 1");
	$col->insert($info);
	$info = array("title" => "Thing 2", "author" => "Author 2");
	$col->insert($info);
	$info = array("title" => "Thing 3", "author" => "Author 3");
	$col->insert($info);
	$info = array("title" => "Thing 4", "author" => "Author 4");
	$col->insert($info);
	
	echo "Initialized Db. <br/><br/>";


	//READ DATA
	echo "Reading all documents in the collection. <br/><br/>";
	$cursor = $col->find();

	echo "Displaying each document's object ID in little timeline-like divs... and its title! <br/>";


	// $i = 0;
	// foreach($cursor as $id => $value)
	// {
	// 	echo "<div class='timeline'>";													// starting little timeline div
	// 	echo "<b>Object ID #" . $i . ":</b><br/>" . $id . "<br/>";						// listing that document's ID
	// 	echo "<b>Content:</b><br/> '" . $value["title"] . "' by " . $value["author"];	// listing "title" name of that document
	// 	$i++;
	// 	echo "</div>";																	// ending little timeline div
	// }

	// COPY OBJECT IDS INTO AN ARRAY
	$i = 0;
	$objectIdArray = [];
	foreach($cursor as $id => $value)
	{
		$objectIdArray[$i] = $id; 
		$i++;	
	}

	// GENERATE DIVS FROM OBJECT ID ARRAY
	for($i=0; $i<count($objectIdArray); $i++) {
		echo "<div class='timeline'>";													// starting little timeline div
		echo "<b>Object ID #" . $i . ":</b><br/>" . $objectIdArray[$i] . "<br/>";		// listing that document's ID
		echo '<button id="hiclass" onclick="hello()">delete</button>';
		echo "</div>";	
	}

?>

</body>

</html>

