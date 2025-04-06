<?php
	include 'konfiguracja.php';
	$haslo = hash("sha256", $_GET["pwd"]);

	echo $haslo;

	$login = $_GET["lgn"];
	$connect = new mysqli_connect('artkoc7548.dhosting.pl', 'xoh7yu_jackiewi', 'Pee6oogh0AHo', 'jackiewicz');
	if ($conn->connect_error) {
	    die("Połączenie nieudane: " . $conn->connect_error);
	}
	$stmt = $conn->prepare("SELECT id FROM uzytkownicy WHERE login = ? AND haslo = ?");
	$stmt->bind_param("ss", $login, $haslo);
	$stmt->execute();
	$stmt->store_result();
	//if ($mysqli_num_rows($rezultat) == 1) {
		//$mysqli_close();
		//setcookie('login', $login, time()+3600*24);
		//setcookie('haslo', $haslo, time()+3600*24);
		//header("Location: menu.php");
		//die();
	//}
	mysqli_close();
	
	//header("Location: logowanie.php");
	//die();
?>