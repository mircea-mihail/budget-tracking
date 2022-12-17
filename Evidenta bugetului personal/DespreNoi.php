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
	font-family: 'Poppins', sans-serif;
	background-image: url("mirceavladi1.jpg");
	background-size: cover;
	color: #E5E4E2;
}

.contur1{
	position: absolute;
	top: 15%;
	left: 50%;
	transform: translate(-50%, -50%);
	
	z-index:-1;
	width: 310px;
	height: 60px;
	background: #282828;
	border-radius: 5px;
}

.noi{
	overflow: hidden;
	text-decoration: none;
	font-size: 40px;
	text-align: center;
	color: gray;
	white-space: nowrap;
	position: absolute;
	top: 15%;
	left: 50%;
	transform: translate(-50%, -50%);
	
}

.noi:hover{
	color: white;
}

.mircea{
	font-size: 25px;
	position: absolute;
	top: 96%;
	left: 61%;
	transform: translate(-50%, -50%);
	color: #282828;
}

.vladi{
	font-size: 25px;
	position: absolute;
	top: 96%;
	left: 39%;
	transform: translate(-50%, -50%);
	color: #282828;
}

.circle1{
    position: absolute;
	top: 39%;
	left: 59%;
	transform: translate(-50%, -50%);
	
	z-index:-1;
	width: 165px;
	height: 210px;
	border-radius: 50%;
}

.circle2{
    position: absolute;
	top: 42%;
	left: 40.5%;
	transform: translate(-50%, -50%);
	
	z-index:-1;
	width: 150px;
	height: 210px;
	border-radius: 50%;
}

.circle1:hover {
    position: relative;
}

.circle1:hover:after {
    content: url("sunglasses5.png");
    display: block;
    position: absolute;
	top: 200px;
	left: -300px;
	transform: scale(.25);
}

.circle2:hover {
    position: relative;
}

.circle2:hover:after {
    content: url("sunglasses4.png");
    display: block;
    position: absolute;
	top: 40px;
	left: -480px;
	transform: rotate(4deg) scale(.152);
}

</style>
</head>
<body>

<a href = "https://www.instagram.com/mircea__mihail/" class="circle1"></a>

<a href = "https://www.instagram.com/vladimirbucur23/" class="circle2"></a>

<div class = "contur1"></div>

<div class = "mircea">
Ionescu Mircea
</div>

<div class = "vladi">
Bucur Vladimir
</div>

<a href = "index.php" class = "noi">Inapoi la meniu</a>

</body>
</html>