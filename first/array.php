<head>
	<title>Stan Golanka PHP Arrays</title>
</head>
<body>
<h1>Stan Golanka PHP Arrays</h1>

<?php
	$stuff = array("name" => "Stan", "course" => "WA4E");
	echo 'My name is '.$stuff["name"].' and this course is '.$stuff["course"].'.';
	echo "<br/>";
	print_r($stuff);
	echo "<br/>";
	foreach($stuff as $k => $v){
		echo "Key = ",$k, " Val =",$v,"<br/>";
	}

	$other_stuff = array("Dolphins", "Jets", "Patriots", "Bills");
	for($i = 0; $i < count($other_stuff); $i++){
		echo"i = ",$i, " val = ", $other_stuff[$i], "<br/>";
	}

	$f_team = array();
	$f_team['Name'] = "Dolphins";
	$f_team['Conference'] = "American";
	$f_team['Division'] = 'East';

	print_r($f_team);
	echo"<br/>";

	if(array_key_exists("Conference", $f_team)){
		echo("Conference exists.<br/>");
	} else {
		echo("Conference does not exist.<br/>");
	}



	echo isset($f_team['Name']) ? "Name is set.<br/>" : "Name is not set.<br/>";
	echo isset($f_team['Address']) ? "Address is set.<br/>" : "Address is not set.<br/>";
	echo isset($f_team['Address']);

	$my_string = "This is a sentence that we'll turn into an array.";
	$my_array  = explode(' ', $my_string);
	echo"<br/>";
	print_r($my_array);

?>
</body>