<!DOCTYPE html>
<html lang = 'ro'>
<head>
<title>Meniu</title>
<meta charset='utf-8'>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@100&display=swap"
rel="stylesheet">

<style>

body {
	font-family: 'calibri';
	background-color: black;
}

.log{
	position: absolute;
	top: 52%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.titlu{
	white-space: nowrap;
	font-family: 'Exo', sans-serif;
	overflow: hidden;
	text-decoration: none;
	font-size: 80px;
	color: #E5E4E2;
}

<!--
	PROPRIETATEA FLEX!! sa ma mai documentez!
-->
.linkuri{
	display: flex;
	align-items: center;
	justify-content: center;
}

.log a{
	overflow: hidden;
	text-decoration: none;
	font-size: 50px;
	text-align: center;
	color: #00FFFF;
}

.log a:hover {
	color: #FF00FF;
}

.noi{
	overflow: hidden;
	text-decoration: none;
	font-size: 40px;
	text-align: center;
	color: gray;
	white-space: nowrap;
	position: absolute;
	top: 94.4%;
	left: 92.5%;
	transform: translate(-50%, -50%);
	
}

.noi:hover{
	color: purple;
}

</style>
</head>
<body>
<!--<div class="topnav">
  <a href="#home">Meniu</a>
  <a href="buget.php">Utilizator nou</a>
  <a href="#contact">cheltuieli</a>
  <a href="#about">venituri</a>
</div>
-->
<div class = "log">
	<div class = 'titlu'>Evidenta bugetului</div><br>
	<div class = 'linkuri'>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href = "login.php">log in &nbsp;</a>
		<a href = "utilizator.php">&nbsp; new user</a>
	</div>
</div>

<a href = "DespreNoi.php" class = "noi">despre noi</a>

</body>
</html>