<!DOCTYPE html>
<html lang = 'ro'>
<head>
<title>Meniu</title>
<meta charset='utf-8'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<style>

body {
  font-family: 'Poppins', sans-serif;
  background-image: url("retrobgg.jpg");
  background-size: cover;
  color: white;
}

.aspect{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.nav a{
	font-weight: 999;
	overflow: hidden;
	text-decoration: none;
	font-size: 35px;
	text-align: center;
	color: #8B008B;
}

.nav a:hover {
	font-weight: 610;
	color: #E5E4E2;
}

.formular{
	font-weight: 610;
	font-size: 23px;
	margin: auto;
	color: #E5E4E2;
}

.formular input{
	width: 450px;
	height:30px;
	cell-padding: 100px;
	margin-bottom: 5px;
	font-size: 20px;
	background-color: 	#8B008B;
	border: solid 1px;
	color: #E5E4E2;
	font-weight: bold;
	border-radius: 7px;
}

.titlu{
    color: #E5E4E2;
}

.contur{
	position: absolute;
	top: 51.2%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 480px;
	height: 470px;
	background: #DA70D6;
	border-radius: 5px;
}


</style>
</head>
<body>
<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$server = 'localhost';
		$user = 'buget';
		$parola = '1234';
		$bd = 'buget';
		
		$conexiune = @mysqli_connect($server, $user, $parola, $bd); //conectarea la baza de date
		$conexiune or die("Nu prea merge :(");
		echo "Conexiune OK! <br>";
		
		$interogare = 'INSERT INTO utilizator(id, nume, prenume, parola, meserie) VALUES (';
		$interogare.= "'". 'NULL'. "',";
		$interogare.= "'". $_POST['nume']. "',";
		$interogare.= "'". $_POST['prenume']. "',";
		$interogare.= "'". hash("sha256",$_POST['parola']). "',";
		
		$interogare.= "'". $_POST['meserie']. "')";
		mysqli_query($conexiune, $interogare);
		if(mysqli_affected_rows($conexiune) == 1)
			header("location:venituri&cheltuieli.php");
		else
			echo "INSERT fara succes! :( <br>";
		
		$sql = 'select max(id) from utilizator;';
		$result = mysqli_query($conexiune, $sql);
				
		if (mysqli_affected_rows($conexiune) == 1)
		{
			$row = mysqli_fetch_assoc($result);
			$id = $row["max(id)"];
		}
		else
		{
			echo "EROARE";
		}
		
		//paseaza id-ul generat pe pagina cu venituri
		$_SESSION['id'] = $id;
		
		@mysqli_close($conexiune); //inchide conexiunea
	}
	else
	{
?>
<div class = "contur"></div>
<div class = "aspect">
	<h1 class = 'titlu'>Introduceti datele personale</h1>
	<form method = 'post' action = 'utilizator.php' class = 'formular'>
		Nume:<br><input type = 'text' name = 'nume' required placeholder='Ex: Nicolescu' oninvalid="this.setCustomValidity('Camp obligatoriu')" oninput="this.setCustomValidity('')"/> <br>
        Prenume:<br> <input type = 'text' name = 'prenume' required placeholder='Ex: Alin' oninvalid="this.setCustomValidity('Camp obligatoriu')" oninput="this.setCustomValidity('')"/> <br>
        Parola:<br> <input type = 'password' name = 'parola' required placeholder='Recomandam o parola cu minim 4 caractere' oninvalid="this.setCustomValidity('Camp obligatoriu')" oninput="this.setCustomValidity('')"/> <br>
        Meserie:<br> <input type = 'text' name = 'meserie' required placeholder='Ex: profesor' oninvalid="this.setCustomValidity('Camp obligatoriu')" oninput="this.setCustomValidity('')"/> <br>
		<input type = 'submit' value = 'Salveaza datele'>
	</form>
	<div class="nav" >
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="index.php">Meniu</a>
		<!--
		<a class="active" href="buget.php">Utilizator nou</a>
		<a href="#contact">cheltuieli</a>
		<a href="#about">venituri</a>
		-->
	</div>
</div>
<?php
}
?>

</body>
</html>
