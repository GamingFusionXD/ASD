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

