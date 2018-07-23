    <?php
    echo "Exemplo 2: Lendo Acoes.<br>";
    echo "Acao Lida: " ;
    echo $_REQUEST["lampada"];
    $conexaoarduino = fopen("COM3","w");
    sleep(1);
   /*   if ($_REQUEST["lampada"] == "acender"){
    $acao = "1";
     }
    else if ($_REQUEST["lampada"] == "apagar"){
    $acao = "0";
    }        */
    
    switch ($_REQUEST["lampada"])
    {
    case "acender" : $acao = "1"; break;
    case "apagar" : $acao = "0"; break;
    }
    fwrite($conexaoarduino,$acao);
    fclose($conexaoarduino);
    ?>
