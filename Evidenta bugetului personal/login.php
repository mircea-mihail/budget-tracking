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

.sesh{
	font-size: 10px;
	position: absolute;
	top: 96%;
	left: 92%;
	transform: translate(-50%, -50%);
	white-space: nowrap;
}

.formular{
	position: absolute;
	top: 69%;
	left: 50%;
	transform: translate(-50%, -50%);
	
	font-size: 23px;
	margin: auto;
	color: #E5E4E2;
}

.formular input{
	width: 310px;
	height:30px;
	cell-padding: 100px;
	margin-bottom: 5px;
	font-size: 20px;
	background-color: #8B008B;
	border: solid 1px;
	color: #E5E4E2;
	font-weight: bold;
	border-radius: 7px;
}

.contur{
	position: absolute;
	top: 73%;
	left: 50%;
	transform: translate(-50%, -50%);
	
	z-index:-11;
	width: 340px;
	height: 260px;
	background: #DA70D6;
	border-radius: 5px;
}


.meniu{
	font-weight: bold;
	color:#8B008B;
	font-size:30px;
	white-space: nowrap;
	overflow: hidden;
	text-decoration: none;
	display: flex;
	align-items: center;
	justify-content: center;
	position: absolute;
	top: 89%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.meniu:hover {
	color: #E5E4E2;
}

.indrumare{
	white-space: nowrap;
	display: flex;
	font-size:21.6px;
	position: absolute;
	top: 85%;
	left: 50%;
	transform: translate(-50%, -50%);
}

</style>

</head>
<body>
<div class = "titlu"><h1>Pagina de Logare</h1></div>
<?php
if(isset($_SESSION['id']))
{
    echo "<p>",date("d-m-Y H:i e");
    echo "<p><b>Id:</b> ",$_SESSION['id'];
    echo "<p><a href='secret.php'>Accesează informațiile secrete</a>";
    echo "<p><a href='logout.php'>De-autentificare</a>";
    exit();
}
?>
<p>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['id']) && isset($_POST['parola']))
    {
        $id=$_POST['id'];
        $form_parola_hash=hash("sha256",$_POST['parola']);

        $server='localhost';
        $mysql_id='buget';
        $bd='buget';
        $mysql_parola='1234';


        $link=@mysqli_connect($server,$mysql_id,$mysql_parola,$bd);
    
        if(!$link)
        {
            echo "<p><b>Eroare de conectare la BD!</b><br>";
            session_destroy();
            echo "<p><a href='login.php'>Încearcă din nou</a>";
        }

        $interogare='select parola from utilizator where id=?';

        if($comanda=@mysqli_prepare($link,$interogare))
        {
            mysqli_stmt_bind_param($comanda,"s",$id);
            mysqli_stmt_execute($comanda);
            mysqli_stmt_bind_result($comanda,$parola_hash);
            if(mysqli_stmt_fetch($comanda))
            {
                if($form_parola_hash===$parola_hash)
                {
                    $_SESSION['id']=$id;
                    echo "<p><b>Logat cu succes!</b><br>";
                    echo "<p><a href='venituri&cheltuieli.php'>Informații secrete</a>";
					header("location: venituri&cheltuieli.php");
                }
                else
                {
					header("location:gresit.php");
                    session_destroy();
                }
            }
            else
            {
                header("location:gresit.php");
                    session_destroy();
            }
            mysqli_stmt_close($comanda);
        }
        mysqli_close($link);
    }
    exit();
}

?>
	<table class = "formular">
	<tr>	<td>
		<form method='post' action='login.php'>
			Id:<br><input type='text' name='id'><br>
			Parola:<br><input type='password' name='parola'><br>
			<input type='submit' value='Log in'>
		</form>
	</table>

<div class = "contur"></div>

<div class = "sesh">
	<?php
		echo "<p><b>Sesiune:</b> ",session_id();
	?>
</div>

<div class = "indrumare"> Nu ai cont sau ai uitat parola?</div>

<a href="utilizator.php" class = "meniu">Creeaza un cont nou!</a>

</body>
</html>
