<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <?php 
            // cotação copiada do Google
            $cotacao = 4.80;

            // valor do formulario
            $real = (int)$_REQUEST["din"] ?? 0;

            // converção em dolar
            $dolar = $real / $cotacao;

            //mostrar resultado
            echo "Seus R\$ " . number_format($real, 2, "," , ".") . " equivalem a Us\$ " .number_format($dolar, 2, ",", ".");  
        
        ?>
    </main>
</body>
</html>