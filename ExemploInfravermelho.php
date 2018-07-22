        <?php

    switch ($_REQUEST["sky"])
    {
    case "Power" : $acao = "l"; break;
    case "Volume +" : $acao = "a"; break;
    case "Volume -" : $acao = "d"; break;
    case "Channel +" : $acao = "s"; break;
    case "Channel -" : $acao = "x"; break;
    }

     $conexaoarduino = fopen("COM3","w");
    fwrite($conexaoarduino,$acao);
    fclose($conexaoarduino);

    ?>

    <html>
    <head>
    <title> Testando o Aparelho Globalsat Gs 240 com Arduino</title>
    </title>
    <body>
    <h1><center> Testando o Aparelho Globalsat Gs 240 com Arduino</center></h1>
    <form action="ExemploInfravermelho.php" method="get">
    <center><img src="imagens/Globalsat GS 240 ACM.png"></center>
    <center><input type="submit" name="sky" id="BotaoPower" value="Power"></center>
    <center><input type="submit" name="sky" id="BotaoVolume +" value="Volume +"></center>
    <center><input type="submit" name="sky" id="BotaoVolume -" value="Volume -"></center>
    <center><input type="submit" name="sky" id="BotaoChannel +" value="Channel +"></center>
    <center><input type="submit" name="sky" id="BotaoChannel -" value="Channel -"></center>
    </form>
    </body>
    </html>
