$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egzamin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT nazwaPliku, podpis FROM zdjęcia ORDER BY podpis DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<img src='" . $row["nazwaPliku"] . "' alt='" . $row["podpis"] . "'>";
  }
}
$conn->close()
