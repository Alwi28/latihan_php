<?php
session_start();
if(isset($_SESSION['isLoggedIn'])){
	if($_SESSION['isLoggedIn']==false){
		header("location:login.php");
	}
}else{
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
	<li><a href="?p=condition">Condition</a></li>
	<li><a href="?p=variabel">Variabel &amp;
	Operator</a></li>
	<li><a href="?p=looping">Looping</a></li>
	<li><a href="?p=array">Array</a></li>
</ul>
<?php
// ganti if dengan switch case break
		switch ($_GET['p']) {
	// if switch ($_GET['p']=="condition"){
			case 'array':
				echo "<h1>Array</h1>";
				include 'array.php';
				break;

			
			
		}
	if ($_GET['p']=="condition"){
		echo "<h1>Condition</h1>";
		include 'condition.php';
	}
	else if ($_GET['p']=="variabel"){
		echo "<h1>Variabel</h1>";
		include 'variabel_operator.php';
	}
	else if ($_GET['p']=="looping"){
		echo "<h1>Looping</h1>";
		include 'looping.php';
	}
	?>
</body>
</html>