<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie bazy</title>
</head>
<body>
    <form method="post" action="#">
        <label for="imie">Podaj imie</label>
        <input type="text" name="imie" id="imie">
        </br> 
        <label for="nazwisko">Podaj nazwisko</label>
        <input type="text" name="nazwisko" id="nazwisko">
        </br> 
        <label for="pesel">Podaj pesel</label>
        <input type="text" name="pesel" id="pesel">  
        </br>
        <label for="kod_pocztowy">Podaj kod pocztowy</label>
        <input type="text" name="kod_pocztowy" id="kod_pocztowy">  
        </br>
        <label for="miejscowosc">Podaj miejscowosc</label>
        <input type="text" name="miejscowosc" id="miejscowosc">  
        </br>
        <label for="ulica">Podaj ulice</label>
        <input type="text" name="ulica" id="ulica">  
        </br>
        <label for="numer">Podaj numer</label>
        <input type="text" name="numer" id="numer">  
        </br>
        <input type="submit" value="zapisz">
    </form> 
    <?php
    $polaczenie=mysqli_connect('localhost','root','','4tie');
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($polaczenie){
            $imie=$_POST['imie'];
            $nazwisko=$_POST['nazwisko'];
            $pesel=$_POST['pesel'];
            $kodpocztowy=$_POST['kod_pocztowy'];
            $miejscowosc=$_POST['miejscowosc'];
            $ulica=$_POST['ulica'];
            $numer=$_POST['numer'];
            if(empty($pesel)){
                echo "Dopisz pesel";
            }
        else{
            $insert="insert into dane values(null,'$imie','$nazwisko','$pesel','$kodpocztowy','$miejscowosc','$ulica','$numer')";
            if(mysqli_query($polaczenie,$insert)){
                echo "dodano do bazy";
            }
            else{
                    echo "Błąd";
            }
        }
    }
    }
    ?>
</body>
</html>