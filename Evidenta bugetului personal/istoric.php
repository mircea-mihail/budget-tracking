<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<title>Login</title>

<style>

.formular1{
	position: absolute;
	top: 48%;
	left: 21.1%;
	transform: translate(-50%, -50%);
	
	font-weight: 610;
	font-size: 20px;
	margin: auto;
	color: #E5E4E2;
	
	width: 550px;
	height:30px;
	cell-padding: 100px;
	margin-bottom: 5px;
	background-color: #DA70D6;
	border: solid 1px;
	font-weight: bold;
	border-radius: 7px;
}

.formular2{
	position: absolute;
	top: 48%;
	left: 79%;
	transform: translate(-50%, -50%);
	
	font-weight: 610;
	font-size: 20px;
	margin: auto;
	color: #E5E4E2;
	
	width: 550px;
	height:30px;
	cell-padding: 100px;
	margin-bottom: 5px;
	background-color: #DA70D6;
	border: solid 1px;
	font-weight: bold;
	border-radius: 7px;
}

body {
  font-family: 'Poppins', sans-serif;
  background-image: url("galaxie.png");
  background-size: cover;
  color: #E5E4E2;
}

.inapoi{
	overflow: hidden;
	text-decoration: none;
	font-size: 60px;
	text-align: center;
	color: #E5E4E2;
	
	position: absolute;
	top: 90%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.inapoi:hover {
	color: #FF00FF;
}

.TitluTabel{
	font-size: 25px;
	color: black;
	font-weight: bolder;
}

.suma{
	font-size:50px;
	position: absolute;
	top: 15%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.balance{
	font-size:50px;
	position: absolute;
	top: 7%;
	left: 50%;
	transform: translate(-50%, -50%);
}

</style>
</head>

<body>


<?php
session_start();
$server='localhost';
$user='buget';
$parola='1234';
$bd='buget';

$conexiune=@mysqli_connect($server,$user,$parola,$bd);

$conexiune
or
die("<b>Eroare la conectare</b>");



$interogare='select suma1, provenienta, data1 from venituri where id1=';
$interogare.=$_SESSION['id'];

$rezultat=mysqli_query($conexiune,$interogare);
 if(mysqli_affected_rows($conexiune) > 0)
    {
        echo '<table class = formular1>';
		echo '<tr align="center" class = "TitluTabel"><td><td><b>VENITURI</b>';
        echo '<tr align="center" class = "TitluTabel"> <td width="25%"> Suma <td width="50%"> Provenienta <td width="25%"> Data ';
        while ($row=$rezultat->fetch_assoc())
        {
            echo '<tr align=center>';
            echo '<td>'.$row['suma1'];
            echo '<td>'.$row['provenienta'];
			echo '<td>'.$row['data1'];
		}
        echo '</table>';
	}
	
	$interogare2='select suma2, destinatie, data2 from cheltuieli where id2=';
$interogare2.=$_SESSION['id'];

$rezultat=mysqli_query($conexiune,$interogare2);
	if(mysqli_affected_rows($conexiune) > 0)
    {
        echo '<table class = "formular2">';
		echo '<tr align="center" class = "TitluTabel"><td><td><b>CHELTUIELI</b>';
        echo '<tr align="center" class = "TitluTabel"> <td width="25%"> Suma <td width="50%"> Destinatie <td width="25%"> Data';
        while ($row=$rezultat->fetch_assoc())
        {
            echo '<tr align=center>';
            echo '<td>'.$row['suma2'];
            echo '<td>'.$row['destinatie'];
			echo '<td>'.$row['data2'];
		}
        echo '</table>';
	}
	$id = $_SESSION['id'];
	$sql = "select sum(suma1) from venituri where id1 = $id;";
		$result = mysqli_query($conexiune, $sql);
				
		if (mysqli_affected_rows($conexiune) == 1)
		{
			$row = mysqli_fetch_assoc($result);
			$maxid1 = $row["sum(suma1)"];
		}
		else
		{
			echo "EROARE";
		}

	$sql = "select sum(suma2) from cheltuieli where id2 = $id;";
		$result = mysqli_query($conexiune, $sql);
				
		if (mysqli_affected_rows($conexiune) == 1)
		{
			$row = mysqli_fetch_assoc($result);
			$maxid2 = $row["sum(suma2)"];
		}
		else
		{
			echo "EROARE";
		}
	$balance = $maxid1-$maxid2;
	echo "<div class = 'suma'>$balance</div>"
		
?>
<a class = "inapoi" href="venituri&cheltuieli.php">Inapoi</a>
<div class = "balance">balance:</div>
<?php
mysqli_free_result($rezultat);
@mysqli_close($conexiune);
?>
</body>
</html>