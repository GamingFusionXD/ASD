<!DOCTYPE html>
<html>
<head>
	<title>Praktyki uczniów - strona główna</title>
	<meta charset="UTF-8">
</head>
<body>

<header>
	<h1>Praktyki uczniów technikum</h1>
</header>

<nav>
	<button>Wyświetl zakłady pracye</button>
</nav>

<main>
	
	<section>
		<h2>Wprowadź dane</h2>
		<form method="POST">
			<label for="osoby">Osoba:</label>
			<select id="osoby" name="osoby">
				<option value="">Wybierz osobę</option>
			</select><br>

			<label for="prace">Zatwierdzone prace:</label>
			<select id="prace" name="prace">
				<option value="">Wybierz zatwierdzoną pracę</option>
			</select><br>

			<label for="datastart">Data rozpoczęcia praktyk:</label>
			<input type="date" id="data-start" name="data-start"><br>

			<label for="datakoniec">Data zakończenia praktyk:</label>
			<input type="date" id="data-koniec" name="data-koniec"><br>

			<label for="ocena">Ocena z praktyk:</label>
			<input type="number" id="ocena" name="ocena" min="1" max="6"><br>

			<button type="submit">Zatwierdź</button>
			<button type="reset">Resetuj</button>
		</form>
	</section>

	<section>
		<h2>Komunikaty</h2>
	</section>

	<section>
		<h2>Zakłady</h2>
	</section>
</main>

<footer>
	Wykonane przez Sebastian Słanek
</footer>
<?php
	$polaczenie=mysqli_connect('localhost','root','','praktyki');
	if ($polaczenie) {
                echo "Połączyliśmy się z bazą danych";
			   
				
			   
			   $zapytanie="select * from osoba";
			   $wynik=mysqli_query($polaczenie,$zapytanie);
			   while($wiersz=mysqli_fetch_array($wynik)){
				$imie[]= $wiersz['imie'];
				$nazwisko[]= $wiersz['nazwisko'];
				$iddane[]=$wiersz['id'];
			   }
			   if($_SERVER["REQUEST_METHOD"]=="POST"){
					$osoby=$_POST['id_osoba'];
                    $prace=$_POST['id_zaklad_pracy'];
                    $datastart=$_POST['data_rozpoczecia_praktyk '];
					$datakoniec=$_POST['data_rozpoczecia_praktyk '];
					$insert="insert into praktyka values(null,'$praca','$osoby','$datastart','$datakoniec'";
					if(mysqli_query($polaczenie,$insert)){
                        echo "Dodano do bazy";
                    }
                    else{
                        echo "Bład";

			   		}
			}
		}
?>
<?php
                for ($x=0;$x<count($imie);$x++){
                    echo "<option value=$iddane[$x]>$imie[$x] $nazwisko[$x]</option>";
                }
				
                    
                ?>
</body>
</HTML>
