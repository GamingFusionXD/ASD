$<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Szkoła ponadgimnazjalna</title>
    
    <style>
       
        body {
            font-family: Tahoma, Arial, sans-serif;
        }
        .banner {
            background-color: #af8c4b;
            
            text-align: center;
            height: 60px;
        }
        .left-panel {
            float: left;
            width: 30%;
            
            background-color: #af8c4b;
            height: 500px;
            text-align: right;
        }
        .right-panel {
            float: right;
            width: 70%;
            
            background-color: #ffd87e;
            height: 500px;
            overflow-y: scroll;
        }
        .footer {
            clear: both;
            text-align: center;
            
            background-color: #af8c4b;
            height: 25px;
        }
        .horizontal-line {
            border-top: 1px solid #ffd87e;
            margin: 20px 0;
        }
        h1, h3, h4 {
            margin-top: 0;
        }
        a {
            color: #ffd87e;
        }
        ul {
            list-style-type: circle;
        }
        table {
            border-collapse: collapse;
            border: 1px dotted black;
            width: 100%;
        }
        th, td {
            border: 1px dotted black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <section class="banner">
        <h1>Projekt strony internetowej szkoły ponadgimnazjalnej</h1>
    </section>

    <section class="left-panel">
        <h3>Do pobrania</h3>
        <ul>
            <li><a href="baza/zapytania.txt">Zapytania SQL</a></li>
            <li><a href="baza/szkola_nowa.sql">Baza danych</a></li>
        </ul>

        <hr class="horizontal-line">

        <h3>Wyznaczenie najwyższej średniej</h3>
        <ul>
            <li>Polak: <input type="text" /></li>
            <li>Nowak: <input type="text" /></li>
            
        </ul>

        <button>Wyznacz</button>

        <h3>Najwyższa średnia</h3>
    </section>

    <section class="right-panel">
        <table>
            <tr>
                <th>Treść zapytania</th>
                <th>Zrzut ekranu</th>
            </tr>
            <tr>
                <td>Treść zapytania 1</td>
                <td><img src="zrzut1.jpg" alt="zrzut1.jpg" /></td>
            </tr>
            <tr>
                <td>Treść zapytania 2</td>
                <td><img src="zrzut2.jpg" alt="zrzut2.jpg" /></td>
            </tr>
            <tr>
                <td>Treść zapytania 3</td>
                <td><img src="zrzut3.jpg" alt="zrzut3.jpg" /></td>
            </tr>
            <tr>
                <td>Treść zapytania 4</td>
                <td><img src="zrzut4.jpg" alt="zrzut4.jpg" /></td>
            </tr>
            <tr>
                <td>Treść zapytania 5</td>
                <td><img src="zrzut5.jpg" alt="zrzut5.jpg" /></td>
            </tr>
        </table>
    </section>

    <section class="footer">
        <h4>Stronę wykonał Sebastian<h4>
    </section>
</body>
</html>

    
    
    
    
   // Zmienne globalne
var activePhoto = 1;

// Funkcja obsługująca kliknięcie przycisku "Następne"
function nextPhoto() {
  activePhoto++;
  if (activePhoto > 7) {
    activePhoto = 1;
  }
  displayActivePhoto();
}

// Funkcja obsługująca kliknięcie przycisku "Poprzednie"
function previousPhoto() {
  activePhoto--;
  if (activePhoto < 1) {
    activePhoto = 7;
  }
  displayActivePhoto();
}

// Funkcja obsługująca kliknięcie miniatury zdjęcia
function selectPhoto(photoNumber) {
  activePhoto = photoNumber;
  displayActivePhoto();
}

// Funkcja wyświetlająca aktywne zdjęcie
function displayActivePhoto() {
  var activePhotoElement = document.getElementById("active-photo");
  activePhotoElement.src = "photos/photo" + activePhoto + ".jpg";
}

// Inicjalizacja skryptu po załadowaniu strony
document.addEventListener("DOMContentLoaded", function(event) {
  displayActivePhoto();

  var nextButton = document.getElementById("next-button");
  nextButton.addEventListener("click", nextPhoto);

  var previousButton = document.getElementById("previous-button");
  previousButton.addEventListener("click", previousPhoto);

  var thumbnailElements = document.getElementsByClassName("thumbnail");
  for (var i = 0; i < thumbnailElements.length; i++) {
    thumbnailElements[i].addEventListener("click", function() {
      var photoNumber = parseInt(this.getAttribute("data-photo-number"));
      selectPhoto(photoNumber);
    });
  }
});
 
