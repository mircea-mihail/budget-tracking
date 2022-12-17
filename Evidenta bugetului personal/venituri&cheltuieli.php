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
  background-image: url("galaxie.png");
  background-size: cover;
  color: #E5E4E2;
}

.meniu{
	position: absolute;
	top: 91%;
	left: 60%;
	transform: translate(-50%, -50%);
}

.meniu a{
	overflow: hidden;
	text-decoration: none;
	font-size: 60px;
	text-align: center;
	color: #E5E4E2;
}

.meniu a:hover {
	color: #FF00FF;
}

.formular1{
	position: absolute;
	top: 53%;
	left: 25.1%;
	transform: translate(-50%, -50%);
	
	font-weight: 610;
	font-size: 23px;
	margin: auto;
	color: #E5E4E2;
}

.formular1 input{
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

.formular2{
	position: absolute;
	top: 53%;
	left: 75%;
	transform: translate(-50%, -50%);
	
	font-weight: 610;
	font-size: 23px;
	margin: auto;
	color: #E5E4E2;
}

.formular2 input{
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

.titlu2{
	font-size: 35px;
	position: absolute;
	top: 26.5%;
	left: 74.4%;
	transform: translate(-50%, -50%);
	white-space: nowrap;
}

.titlu1{
	font-size: 35px;
	position: absolute;
	top: 26.5%;
	left: 23.7%;
	transform: translate(-50%, -50%);
	white-space: nowrap;
}

.contur1{
	position: absolute;
	top: 50%;
	left: 25.1%;
	transform: translate(-50%, -50%);
	
	z-index:-1;
	width: 480px;
	height: 410px;
	background: #DA70D6;
	border-radius: 5px;
}

.contur2{
	position: absolute;
	top: 50%;
	left: 75%;
	transform: translate(-50%, -50%);
	
	z-index:-1;
	width: 480px;
	height: 410px;
	background: #DA70D6;
	border-radius: 5px;
}

.idprimit{
	white-space: nowrap;
	font-size: 80px;
	position: absolute;
	top: 10%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.istoric{
	overflow: hidden;
	text-decoration: none;
	font-size: 60px;
	text-align: center;
	color: #E5E4E2;
	
	position: absolute;
	top: 91%;
	left: 40%;
	transform: translate(-50%, -50%);
}

.istoric:hover {
	color: #FF00FF;
}

</style>
</head>
<body>

<?php
	session_start();
	$id = $_SESSION['id'];
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$server = 'localhost';
		$user = 'buget';
		$parola = '1234';
		$bd = 'buget';
		
		$conexiune = @mysqli_connect($server, $user, $parola, $bd); //conectarea la baza de date
		$conexiune or die("Nu prea merge :(");
		echo "Conexiune OK! <br>";
		
		$interogaree = 'INSERT INTO venituri(id1, suma1, provenienta, data1) VALUES (';
		$interogaree.=$id.",";
		$interogaree.= $_POST['suma1']. ",";
		$interogaree.= "'". $_POST['provenienta']. "',";
		$interogaree.= "'". $_POST['data1']. "')";
		mysqli_query($conexiune, $interogaree);
		if(mysqli_affected_rows($conexiune) == 1)
			header("location:venituri&cheltuieli.php");
		else
			echo "INSERT fara succes! :( <br>";
		
		$interogare = 'INSERT INTO cheltuieli(id2, suma2, destinatie, data2) VALUES (';
		$interogare.=$id.",";
		$interogare.= $_POST['suma2']. ",";
		$interogare.= "'". $_POST['destinatie']. "',";
		$interogare.= "'". $_POST['data2']. "')";
		mysqli_query($conexiune, $interogare);
		if(mysqli_affected_rows($conexiune) == 1)
			header("location:venituri&cheltuieli.php");
		else
			echo "INSERT fara succes! :( <br>";
		
		@mysqli_close($conexiune); //inchide conexiunea
	}
	else
	{
?>

<a class = "istoric" href="istoric.php">Istoric</a>

<div class="meniu">
  <a href="logout.php">Meniu</a>
</div>

<?php
	echo "<div class = 'idprimit'>NU UITA! ID-ul tau este $id!</div>";
?>

<div class = "titlu1">Introdu veniturile primite</div>
    <form name = "f1" class = "formular1" method = 'post' action = 'venituri&cheltuieli.php'>
        Suma:<br><input type = 'text' name = 'suma1' required oninvalid="this.setCustomValidity('Camp obligatoriu')" oninput="this.setCustomValidity('')"/> <br>
        Provenienta:<br><input type = 'text' name = 'provenienta' required oninvalid="this.setCustomValidity('Camp obligatoriu')" oninput="this.setCustomValidity('')"/> <br>
        Data:<br><input placeholder="YYYY/MM/DD" type = 'date' name = 'data1' required oninvalid="this.setCustomValidity('Camp obligatoriu')" oninput="this.setCustomValidity('')"/> <br>
        <input type = 'submit' value = 'Salveaza datele'>
    </form>
<div class = "titlu2">Introdu cheltuielile facute</div>
    <form name = "f2" class = "formular2" method = 'post' action = 'venituri&cheltuieli.php'>
        Suma: <input type = 'text' name = 'suma2' required oninvalid="this.setCustomValidity('Camp obligatoriu')" oninput="this.setCustomValidity('')"/> <br>
        Destinatie: <input type = 'text' name = 'destinatie' required oninvalid="this.setCustomValidity('Camp obligatoriu')" oninput="this.setCustomValidity('')"/> <br>
        Data: <input placeholder="YYYY/MM/DD" type = 'date' name = 'data2' required oninvalid="this.setCustomValidity('Camp obligatoriu')" oninput="this.setCustomValidity('')"/> <br>
        <input type = 'submit' value = 'Salveaza datele'>
    </form>
<div class = "contur1"></div>
<div class = "contur2"></div>
<?php
}
?>

</body>
</html>
