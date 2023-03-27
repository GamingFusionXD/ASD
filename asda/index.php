	<?php
				// łączenie z bazą danych
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "egzamin";

				$conn = mysqli_connect($servername, $username, $password, $dbname);

				// sprawdzanie połączenia
				if (!$conn) {
				    die("Nieudane połączenie: " . mysqli_connect_error());
				}

				// zapytanie do bazy danych
				$sql = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki";

				$result = mysqli_query($conn, $sql);

				// wyświetlanie wyników
				if (mysqli_num_rows($result) > 0) {
				    while($row = mysqli_fetch_assoc($result)) {
				        echo "<li>" . $row["id"] . ", dnia " . $row["dataWyjazdu"] . " jedziemy do " . $row["cel"] . ", cena " . $row["cena"] . "</li>";
				    }
				} else {
				    echo "Brak dostępnych wycieczek.";
				}

				// zamykanie połączenia
				mysqli_close($conn);
			?>
