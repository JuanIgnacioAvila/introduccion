<html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" herf="estiloconcatenacion2.css">
</head>
<body>

    <h1> Consumo final </h1>
    <?php
        
        $manzanakg = 5;
        $preciomanzana = 50;
        $preciototalmanzana = ($manzanakg * $preciomanzana);
        $bananakg = 2;
        $preciobanana = 75;
        $preciototalbanana = ($bananakg * $preciobanana);
        echo '<div class="form-floating mb-3">';
        echo "el precio de $manzanakg";
        echo "kg de manzana es $preciomanzana <br>";
        echo "el precio de $bananakg";
        echo "kg de banana es $preciobanana <br>";
        $total=$preciobanana+$preciomanzana;
        echo "total: $total";
        echo  '</div>';
    ?>
</body>
</html>