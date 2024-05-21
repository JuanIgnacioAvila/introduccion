<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php 
        $kgBanana=$_REQUEST['pesoBanana'];
        $kgManzana=$_REQUEST['pesoManzana'];
        $costoBanana=$_REQUEST['precioBanana'];
        $costoManzana=$_REQUEST['precioManzana'];
        $costoxkgBanana=$costoBanana*$kgBanana;
        $costoxkgManzana=$costoManzana*$kgManzana;
        $total=$costoxkgBanana+$costoxkgManzana;
        echo "[".$kgBanana."]kg de bananas * $[".$costoBanana."] el kilo <br>
        [".$kgManzana."]kg de manzanas * $[".$costoManzana."el kilo <br>
        total: $[".$total."]";
    ?>
    </body>
    </html>