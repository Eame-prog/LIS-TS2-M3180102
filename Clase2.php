
<html>
	<head>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="num1">
			<br><br>
            <input type="text" name="num2">
			<br><br><br>
			<input type="submit" name="suma" value="Suma">
			<input type="submit" name="resta" value="Resta">
			<input type="submit" name="division" value="Division">
			<input type="submit" name="multiplicacion" value="Multiplicacion">
			<input type="submit" name="modulo" value="Modulo">
		</form>
	</body>
</html>

<?php

	if(isset($_POST["suma"]) && !empty($_POST["suma"])) {

        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $suma = $numero1+$numero2;

		echo "<b>La suma " .$numero1. " con " .$numero2. " es: " .$suma. "</b><br>";

		if($suma >5){
			echo "Su suma es mayor a 5";
			}else{
				echo "Su suma es menor a 5";
			}

			$var=" No hay limites para concatenar ";
			echo $var;
	}
	else
	if(isset($_POST["resta"]) && !empty($_POST["resta"])) {
	
        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $resta = $numero1-$numero2;

		echo "<b>La resta de " .$numero1. " con " .$numero2. " es: " .$resta. "</b><br>";

		if($resta >5){
			echo "Su resta es mayor a 5";
			}else{
				echo "Su resta es menor a 5";
			}

			$var=" No hay limites para concatenar ";
			echo $var;
	}
	else
	if(isset($_POST["division"]) && !empty($_POST["division"])) {
	
        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $division = $numero1/$numero2;

		echo "<b>La division de " .$numero1. " con " .$numero2. " es: " .$division. "</b><br>";

		if($division >5){
			echo "Su division es mayor a 5";
			}else{
				echo "Su division es menor a 5";
			}

        $var=" No hay limites para concatenar ";
        echo $var;
	}
	else
	if(isset($_POST["multiplicacion"]) && !empty($_POST["multiplicacion"])) {
	
        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $multiplicacion = $numero1*$numero2;

		echo "<b>La multiplicacion de" .$numero1. " con " .$numero2. " es: " .$multiplicacion. "</b><br>";

		if($multiplicacion >5){
			echo "Su multiplicacion es mayor a 5";
			}else{
				echo "Su multiplicacion es menor a 5";
			}

        $var=" No hay limites para concatenar ";
        echo $var;
	}
	else
	if(isset($_POST["modulo"]) && !empty($_POST["modulo"])) {
	
        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $modulo = $numero1%$numero2;

		echo "<b>El modulo de " .$numero1. " con " .$numero2. " es: " .$modulo. "</b><br>";

		if($modulo >5){
			echo "Su modulo es mayor a 5";
			}else{
				echo "Su modulo es menor a 5";
			}

        $var=" No hay limites para concatenar ";
        echo $var;
	}
?>