        <?php

    switch ($_REQUEST["lampada"])
    {
    case "Acender" : $acao = "1"; break;
    case "Apagar" : $acao = "0"; break;
    }
     sleep(1);
     $conexaoarduino = fopen("COM3","w");
    fwrite($conexaoarduino,$acao);
    fclose($conexaoarduino);

    ?>

    <html>
    <head>
    <title> Exemplo com HTML - Acendendo LED com PHP</title>
    </title>
    <body>
    <h1><center> Exemplo com HTML - Acendendo LED com PHP</center></h1>
    <form action="ExemploHTML1.php" method="get">
    <center><img src="imagens/lampada.jpeg"></center>
    <center><input type="submit" name="lampada" id="botaoLigar" value="Acender"></center>
    <center><input type="submit" name="lampada" id="botaoApagar" value="Apagar"></center>
    </form>
    </body>
    </html>
