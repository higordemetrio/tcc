<!DOCTYPE html>
<html lang="en">
<head>
  <title>FIFA SCOUT RECORTE CAMPO</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.Jcrop.js"></script>
<link rel="stylesheet" href="files/main.css" type="text/css" />
<link rel="stylesheet" href="files/demos.css" type="text/css" />
<link rel="stylesheet" href="../css/jquery.Jcrop.css" type="text/css" />

</head>
<body>




  <!-- This is the image we're attaching Jcrop to -->

  <!-- This is the form that our event handler fills -->

  


    <img src="files/imgrecortada.png" onclick="showCoords(event)" id="campo">

        <p id="info" style="font-size: 30px">
            <span> Clique no campo para pegar as cordenadas.</span>

            <?php 
                if (isset($_GET['w']) && isset($_GET['h']))
                {
                    $targ_w = $_GET['w'];
                    $targ_h = $_GET['h'];

                echo "<br><br><span> W: ".$targ_w." | H: ".$targ_h."</span>";
                }
            ?>

        </p><p id="cord" class="coords" style="font-size: 30px">

        </p>

        <script>
        function showCoords(event) {
            var x = event.clientX;
            var y = event.clientY;
            var coords = "X: " + x + " | Y: " + y;
            document.getElementById("cord").innerHTML = coords;
        }
        </script>


    <a class="btn" href="recorteimagem.html"> Voltar </a>
    <a class="btn" href="upload.php"> Upload </a>
  

</body>
</html>

