<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdzian JavaScript - zadania egzaminacyjne</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section class="baner">
        <h1>Strona z zadaniami z JavaScript</h1>
    </section>
    <section class="boki">
        <section class="lewy">
            <button>prev</button>
            <img src="zdj1.jpg" alt="galeria" id="duze">
            <button>next</button>
            <hr>
            <img src="zdj1.jpg" alt="miniatura" class="miniatura" onclick="wstawZdjecie(1)">
            <img src="zdj2.jpg" alt="miniatura" class="miniatura" onclick="wstawZdjecie(2)">
            <img src="zdj3.jpg" alt="miniatura" class="miniatura" onclick="wstawZdjecie(3)">
            <img src="zdj4.jpg" alt="miniatura" class="miniatura" onclick="wstawZdjecie(4)">
            <img src="zdj5.jpg" alt="miniatura" class="miniatura" onclick="wstawZdjecie(5)">
            <img src="zdj6.jpg" alt="miniatura" class="miniatura" onclick="wstawZdjecie(6)">
            <img src="zdj7.jpg" alt="miniatura" class="miniatura" onclick="wstawZdjecie(7)">
        </section>
        <section class="prawy">
            <h2>Podaj składową H koloru w kodzie HSL</h2>
                <p>0 do 30 czerwienie, do 60 żółcie, do 150 zielenie, do 250 niebieskie, do 360 fiolet i purpura</p>
                <img src="kolory.jpg" alt="Przestrzeń barw HSL"><br>
                <input type="number" max="360" placeholder="0 - 360" id="hsl">
                <input type="submit" value="Generuj paletę" onclick="guzik()">
                <table id="tabela">
                    <tr>
                        <td id="1" colspan="4">Kolor główny</td>
                    </tr>
                    <tr>
                        <td id="2">kolor 2</td>
                        <td id="3">kolor 3</td>
                        <td id="4">kolor 4</td>
                        <td id="5">kolor 5</td>
                    </tr>
                </table>
                <script>
                    function guzik(){
                        let wartosc=document.getElementById("hsl").value;
                        const tabela=document.getElementById("tabela");
                        tabela.rows[0].cells[0].style.background= 'hsl('+wartosc+',80%,50%)';
                        tabela.rows[1].cells[0].style.background= 'hsl('+wartosc+',70%,50%)';
                        tabela.rows[1].cells[1].style.background= 'hsl('+wartosc+',60%,50%)';
                        tabela.rows[1].cells[2].style.background= 'hsl('+wartosc+',50%,50%)';
                        tabela.rows[1].cells[3].style.background= 'hsl('+wartosc+',40%,50%)';
                    }
                </script>
        </section>
    </section>
    <section class="srodek">
        <h2>Zadanie 3 - Obliczanie wartości dla danej osoby</h2>
        <label for="wynik">Podaj wynik</label>
        <input type="number" name="wynik">
        <br>
        <button>Oblicz</button>
        <hr>
        <output>
            Wynik działania
        </output>
    </section>
   
         <script>
        function wstawZdjecie(numer){
            if(numer=="1"){
                document.getElementById("duze").src="zdj1.jpg";
            }
            if(numer=="2"){
                document.getElementById("duze").src="zdj2.jpg";
            }
            if(numer=="3"){
                document.getElementById("duze").src="zdj3.jpg";
            }
            if(numer=="4"){
                document.getElementById("duze").src="zdj4.jpg";
            }
            if(numer=="5"){
                document.getElementById("duze").src="zdj5.jpg";
            }
            if(numer=="6"){
                document.getElementById("duze").src="zdj6.jpg";
            }
            if(numer=="7"){
                document.getElementById("duze").src="zdj7.jpg";
            }
        }
    </script>
    
 
    <footer>
        Stronę wykonał Przemek
    </footer>
</body>
</html>


Sebastian

1. do czego służy i jak działa kopia częściowa w MS SQL Server?

2. Co to jest instancja MS SQL Server?

3. Jak dodać użytkownika w MS SQL Server?

4. Czym różni się uwierzytelnienie Windows od SQL Serwer w MS SQL Server
