<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Egzamin - imię nazwisko</title>
    <link rel="stylesheet" href="styl5.css">
    <script src="skrypt6.js"></script>
</head>
<body>
    <header>
        <h1>Sprawdzenie moich umiejętności, a potem już tylko czekają mnie wakacje!!!</h1>
    </header>
    <section>
        <div id="lewy1">
            <h2>Barwy ich pochodne</h2>
            <table>
                <tr>
                    <th colspan="2">Kolory</th>
                    <th>Pochodne</th>
                </tr>
                <tr>
                    <td rowspan="2">Czerwony</td>
                    <td>Różowy</td>
                    <td>Fuksja</td>
                </tr>
                <tr>
                    <td>Pomarańczowy</td>
                    <td>Brązowy</td>
                </tr>
                <tr>
                    <td colspan="2">Żółty</td>
                    <td>Khaki</td>
                </tr>
            </table>
        </div>
        <div id="prawy1">
            <form action="zgloszenie.php" method="post">
                <label for="lowisko">Łowisko:</label>
                <input type="number" id="lowisko" name="lowisko" required><br>
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" required><br>
                <label for="sedzia">Sędzia:</label>
                <input type="text" id="sedzia" name="sedzia" required><br>
                <input type="reset" value="CZYŚĆ">
                <input type="submit" value="DODAJ">
            </form>
        </div>
    </section>
    <section>
        <div id="lewy2"></div>
        <div id="srodek2"></div>
        <div id="prawy2">
            <h3>Wycieczki, na które są wolne miejsca</h3>
        </div>
    </section>
    <footer>
        <div id="stopka"></div>
    </footer>
</body>
</html>



/* styl5.css */

/* Domyślne wartości */
body {
    font-family: Georgia;
}

/* Nagłówek i stopka */
header, footer {
    background-color: #C75839;
    color: white;
    padding: 10px;
    text-align: center;
}

/* Blok lewy2 */
#lewy2 {
    background-color: #FF8A65;
    width: 25%;
    height: 300px;
    padding-top: 50px;
}

/* Blok prawy1 */
#prawy1 {
    background-color: Snow;
    width: 75%;
    height: 300px;
    text-align: center;
    padding-top: 25px;
    padding-bottom: 25px;
}

/* Blok lewy2 */
#lewy2 {
    background-color: #7DA453;
    width: 400px;
    height: 250px;
    padding: 10px;
    border-radius: 20px;
}

/* Blok srodek2 */
#srodek2 {
    background-color: #AED581;
    width: 1050px;
    height: 230px;
    padding: 10px;
    margin: 10px;
    border-radius: 20px;
    text-align: center;
}

/* Blok prawy2 */
#prawy2 {
    background-color: #7DA453;
    width: 220px;
    height: 250px;
    padding: 10px;
    border-radius: 20px;
}

/* Selektor obrazu */
img {
    width: 350px;
    margin: 10px;
    box-shadow: 15px 15px 10px DimGray;
}

/* Selektor tabeli i komórki tabeli */
table, td, th {
    border: 1px solid DimGray;
}

/* Selektor tabeli */
table {
    width: 80%;
    margin: auto;
}

/* Selektor komórki */
td:hover {
    background-color: aqua;
}

/* Pierwsza litera nagłówka */
h1:first-letter, h2:first-letter, h3:first-letter {
    font-size: 150%;
    color: Olive;
}

/* Selektor elementu listy */
li {
    margin: 5px;
}

/* Znak markera w elemencie listy */
li::marker {
    color: Snow;
}


