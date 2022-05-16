
<html>

<head>
<title>Tytuł strony</title>
</head>

<body>
<p>To jest nasza nowa strona internetowa.</p>
<?php
if(isset($_POST['ekran']))
{
	$dzialanie=$_POST['ekran'];
	$wynik=eval("return $dzialanie;");	
	echo $wynik;
}

	

?>
<p type="text" id="ekran"></p>
</body>

</html>



