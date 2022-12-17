<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Logout</title>
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

</style>

</head>
<body>
<h1>De-autentificare</h1>
<?php
echo "<p><b>Sesiune:</b> ",session_id();
session_unset();//elimină toate variabilele
session_destroy();
header("location: index.php");
//doar distruge sesiunea, fara ca utilizatorul sa vada
?>
<p>Succes!
<p><a href='login.php'>Autentificare!</a>