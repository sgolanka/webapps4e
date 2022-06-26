<head>
	<title>Stan Golanka PHP</title>
</head>
<body>
<h1>Stan Golanka PHP</h1>
<pre>
	ssssss
	s
	s
	ssssss
	     s
	     s
	ssssss     
</pre>
<?php
	print(hash('sha256', 'Stan Golanka'));
	echo'Hi There
	 ';
	$x = rand(1,10) * rand(1, 10);
	echo"The answer is $x what was the question?\r\n";  #line breaks aren't working?
	echo "<br/>";
	echo'Using single quotes, the answer is '.$x.' and I still don\'t know the question.<br/>';

	echo"<br>Some function stuff:<br/>";
	echo'$a = 12<br> $b = 15 + $x++<br/>';
	$a = 12;
	$b = 15 + $a++;
	echo "a is $a and b is $b<br/>";

	$display_text = "The answer above ($x) is ";

	if($x >= 42){
		$display_text .= "a large number.<br>";
	} else {
		$display_text .= "not so large.<br/>";
	}
	
	echo$display_text;
	
	$count = $x;

	while($x > 0){
		$x--;
		echo"We are looping! $x more to go.<br/>";
	}

	echo"That last loop was a while loop. Here is a for loop.<br/>";

	for($i = 0; $i < $count; $i++){
		$remaining = $count - $i;
		echo"Looping; $remaining more to go.<br/>";
	}

?>
</body>