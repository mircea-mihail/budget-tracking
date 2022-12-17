<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<title>Login</title>

<style>

body {
  font-family: 'Poppins', sans-serif;
  background-image: url("blade2.png");
  background-size: cover;
  color: #E5E4E2;
}

.titlu{
	font-size: 40px;
	position: absolute;
	top: 35%;
	left: 50%;
	transform: translate(-50%, -50%);
	white-space: nowrap;
}

.gresit{
	font-size: 40px;
	position: absolute;
	top: 69%;
	left: 50%;
	transform: translate(-50%, -50%);
	white-space: nowrap;
}

.link{
	color: hotpink;
	white-space: nowrap;
	overflow: hidden;
	text-decoration: none;
	display: flex;
	align-items: center;
	justify-content: center;
}

.sesh{
	font-size: 10px;
	position: absolute;
	top: 96%;
	left: 92%;
	transform: translate(-50%, -50%);
	white-space: nowrap;
}

.link:hover {
	color: #E5E4E2;
}

</style>

</head>
<body>
<div class = "titlu"><h1>Pagina de Logare</h1></div>

<div class = "gresit">
Ai introdus incorect ID-ul sau parola.<br>
<a class = "link" href='login.php'>Încearcă din nou!</a>
</div>

<div class = "contur"></div>

<div class = "sesh">
	<?php
		echo "<p><b>Sesiune:</b> ",session_id();
	?>
</div>

</body>
</html>
