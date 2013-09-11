<?


$mi_variable = "Probando";

$combo = "<select >";

for($i=1;$i<=10;$i++){
	$combo .= "<option> Opcion ".$i."</option>";
}
$combo .= "</select>";

?>



<!html >

<head>
	<title> Hola </title>
</head>

<body>
	<h1> <?=($mi_variable)?> </h1>
	<br />
	<br />
	<br />
	<fieldset>
		<label>Combo generado con PHP</label><br />
		<?=$combo?>
	</fieldset>
</body>

</html>
