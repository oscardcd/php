<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <title>Almacen WC</title>
    <?php include_once 'navbar.php' ?>


</head>

<body>
    <div class="ejercicio1">
    <div class="navegador" id="navegador">
        <?php echo $navbar;?>
    </div>
        <h1>Almacen WC</h1>
        <?php
        #arreglo con los productos
        $productos = ["zapatos" => 350000, "tenis" => 280000, "camisetas" => 175000, "jeans" => 200000];
        #hallar el costo total
        $costot = array_sum($productos);
        #hallar promedio
        $promedio = $costot / (count($productos));
        #subir el valor a los jeans 6.2
        $subjeans = $productos["jeans"] + ($productos["jeans"] * 6.2 / 100);
        #●	Disminuir el precio de los Zapatos en un 0.8%
        $diszap = $productos["zapatos"] - ($productos["zapatos"] * 0.8 / 100);

        #arreglos con las operaciones
        $operaciones = ["Costo total" => $costot, "Promedio de venta" => $promedio, "Nuevo valor jean" => $subjeans, "Nuevo Valor zapatos" => $diszap];

        ?>
        <table>
            <?php
            foreach ($productos as $titulo => $producto) {
                echo " <tr>
                        <td>" .
                    $titulo .
                    "</td>
                        <td>" .
                    $producto .
                    "</td>
                        </tr>";
            }
            ?>
            <tr>
                <td>
                    <hr>
                </td>
                <td>
                    <hr>
                </td>
            </tr>

            <?php
            foreach ($operaciones as $titulos => $operacion) {
                echo " <tr>
                        <td>" .
                    $titulos .
                    "</td>
                        <td>" .
                    $operacion .
                    "</td>
                        </tr>";
            }
            ?>

        </table>
    </div>
    <br><br>
    
    <div class="ejercicio"></div>
  
</body>

</html>