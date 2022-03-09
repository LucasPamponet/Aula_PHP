<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <h1>Texto HTML</h1>
    <?php echo '<p>Hello World</p>'; ?> 

    
    <?php
    //    echo "<h2>Texto em PHP</h2";

    echo "Frase em PHP<br/>";

    $dia = 8;
    $mes = 3;
    $ano = 2022;
    $data_Atual;
    $nome = "Lucas Sousa Pamponet";

    echo "Hoje é : ".$dia."/".$mes."/".$ano."<br/><br/>";

    $data_Atual  = "";
    $data_Atual .= $dia;
    $data_Atual .= "/".$mes;
    $data_Atual .= "/".$ano;
    $data_Atual .= "<br/>";

    echo "Eu sou o: ".$nome;
    echo "<br/>Exemplo de data: <b>".$data_Atual;
    echo "soma = ".($dia + $mes);

    define("ANO_NASCIMENTO", 1996);
    echo "<br/> Ano de Nascimento: ".ANO_NASCIMENTO;

    $num = 5;

    if ($num % 2 == 0)
    {
      echo "<br/>Numero Par ".$num;
    }
    else
    {
      echo "<br/>Numero Impar ".$num;
    }  

?>
  </body>
</html>