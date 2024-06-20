<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verkehrslicht-Simulation</title>
    <link rel="stylesheet" href="Ampel.css">
</head>
<body>
    <div class="man">
    <img src="Bilder/Man.gif" alt="gif" class="gif2" style="width: 80%;">
</div>
    <div class="traffic-lights-container">
        <div class="traffic-light-container">
            <div class="traffic-light" id="car-traffic-light">
                <div class="light" id="car-light-red"></div>
                <div class="light" id="car-light-yellow"></div>
                <div class="light" id="car-light-green"></div>
            </div>
            <img src="Bilder/Ample.png" class="background-image" alt="Background Image">
        </div>

        <div class="traffic-light-container">
            <div class="traffic-light" id="ped-traffic-light">
                <div class="light red" id="ped-light-red"></div>
                <div class="light green" id="ped-light-green"></div>
            </div>
            <img src="Bilder/Ample2.png" class="background-image2" alt="Background Image2">
        </div>
    </div>


    <button id="walk-button" onclick="changeLights()">Graphische Demonstration</button>

    <img src="Bilder/Strasse.png" class="background-image3" alt="Background Image3">

    <div id="status-box" class="status-box">...</div>




    <div class="container">
        <img src="Bilder/Video.gif" alt="Animated GIF" class="animated-gif">
           <form method="post">
        <button class="button2" name="command" id="button2" onclick="php()">Praktische Demonstration</button>
           </form>
    </div>

    <img id="smallImg" src="Bilder/AnLeitung.jpg" alt="Small Image">

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content"  id="largeImg">
</div>

<div id="Car" class="Car">
    <img src="Bilder/Car.png" alt="Car" class="Carimage">
</div>

<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
    <h1>
    <span id="info" style="margin-top: -300px;">
        Zum Homescreen kommst du mit &nbsp;&nbsp;
        <span id="homebutton" onclick="location.href='/'">
          <img src="Bilder/shifticon.png" />&nbsp;&nbsp; + H
        </span>
      </span>
    </h1>

    <script src="Ampel.js"></script>

<?php


$output  = shell_exec('python3 /var/www/html/group1/python/servo2.py');
echo $out;

?>

</body>
</html>



