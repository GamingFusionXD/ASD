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
            <h2>Zadanie 1 - przeglądanie zdjęć</h2>
            <button>Poprzednie</button>
                <img src="zdj1.jpg" alt="galeria" class="duze">
            <button onclick="zdjecia()">Następne</button>
            <hr>
            <img src="zdj1.jpg" alt="miniatura" class="miniatura" onclick="zdjecia(1)">
            <img src="zdj2.jpg" alt="miniatura" class="miniatura" onclick="zdjecia(2)">
            <img src="zdj3.jpg" alt="miniatura" class="miniatura" onclick="zdjecia(3)"> 
            <img src="zdj4.jpg" alt="miniatura" class="miniatura" onclick="zdjecia(4)">
            <img src="zdj5.jpg" alt="miniatura" class="miniatura" onclick="zdjecia(5)">
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
        function zdjecia(nr){
             if(nr=="1"){
                 document.getElementById("duzy").src="1.jpg"
             }
             if(nr=="2"){
                 document.getElementById("duzy").src="2.jpg"
             }
             if(nr=="3"){
                 document.getElementById("duzy").src="3.jpg"
             }
             if(nr=="4"){
                 document.getElementById("duzy").src="4.jpg"
             }
             if(nr=="5"){
                 document.getElementById("duzy").src="5.jpg"
             }
         } 
         
     </script>
 
    <footer>
        Stronę wykonał Przemek
    </footer>
</body>
</html>
