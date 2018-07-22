    <?php
    echo "Exemplo 2: Lendo Numeros<br>";
    echo "Numero Lido: " ;
    echo $_REQUEST["numero"];
    $conexaoarduino = fopen("COM3","w");
    sleep(1);
    fwrite($conexaoarduino,$_REQUEST["numero"]);
    fclose($conexaoarduino);
    ?>
