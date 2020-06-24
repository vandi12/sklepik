<!DOCTYPE html>
<html lang="pl">
<head>
	<meta name="author" content="x" />
	<meta http-equiv="content-type" content="text/html: charset=utf-8"/>
	<title>Formularz</title>
<div id="wrapper">
</head>

       
		<img id="imgHeader" src="3.jpg" width="300px" height="300">
 
		<link rel="StyleSheet" type="text/css" href="style.css">


        <nav>
            <a class="menu active" href="index.html">Strona główna</a>
            <a class="menu" href="cennik.html">Logowanie</a>
            <a class="menu active" href="form.html">Formularz</a>
            <a class="menu" href="kontakt.html">Kontakt</a></nav>


        <section class="main home">
	<h1> Wprowadz dane </h1>

 
<?php 
		$imie=$_POST['name'];
		$nazw = $_POST['nazw'];
		$adr = $_POST['adr'];
		
		$login = $_POST['log'];
		$passwd = $_POST['passwd'];

		$connect = mysqli_connect('localhost','root','','test') or die('błąd połączenia bazy danych');
		

		if(empty($imie) || empty($nazw) || empty($adr)) 
		{
			echo "Nie podano danych użytkownika <br>";
		}
		else if (isset($imie) || isset($nazw) || isset($adr))
		{
			$sql = "INSERT INTO `uzytkownicy` (`id`, `imie`, `nazwisko`, `adres`) VALUES (NULL, '$imie', '$nazw', '$adr')";

			$result = mysqli_query($connect, $sql);
			echo 'Wprowadzono dane użytkownika <br> ';
		}

		if(empty($login) || empty($passwd))
		{
			echo "Nie podano danych logowania";
		}
		else if (isset($login) || isset($passwd))
		{
			$sql1 = "INSERT INTO `konta` (`id`, `login`, `haslo`) VALUES (NULL, '$login', '$passwd')";

			$result1 = mysqli_query($connect, $sql1);
			echo 'Wprowadzono dane logowania';
		}

		

		mysqli_close($connect);
	?>


		 <article>
			    </section>
		   <div class="lol5">
        <b><footer>Design: Damian Czerwiński Studio</footer></b>
	</div>
</body>
		
			</html>
		