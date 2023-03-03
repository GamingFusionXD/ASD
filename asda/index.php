<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaskadowe arkusze stylów</title>
</head>
<body>
    <h1>Wstawianie stylów</h1>
    <ol type="a">
        <li>styl lokalny (w linii)</li>
        <li>wewnętrzny arkusz stylów</li>
        <li>zewnętrzny arkusz stylów</li>
    </ol>

    <h2>Styl lokalny</h2>
    <p>określamy styl w znaczniku podając jako atrybut style="właściwość: wartość;"</p>
    <p style="color: greenyellow;">Przykładowy akapit ze zmienionym kolorem</p>

    <p>Można rozciągnąć styl lokalny na kilka znaczników za pomocą znacznika &lt;span&gt;</p>
    <span style="color: brown;">
        <h3>Nagłówek 3 stopnia</h3>
        <p>Paragraf</p>
        <label>Etykieta</label>
    </span>
    <h2>Wewnętrzny arkusz stylów</h2>
    <p>Umieszczony jest wewnątrz dokumentu w sekcji "head" i wykorzystuje się do tego znacznik &lt;style&gt; i &lt;/style&gt;. Poniżej przedstawiamy przykładową zawartość w sekcji head z wykorzystaniem znaczników style</p>
    <p>
        &lt;style&gt;<br>
        body {background-color: cyan;}<br>
        h1 {font-size: 16px;}<br>
    </p>
</body>
</html>
