<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa WC</title>
    <link rel="stylesheet" href="navbar.css">
    <?php include_once 'navbar.php' ?>
</head>

<body>
    <div class="ejercicio2">
        <div class="navegador" id="navegador">
            <?php echo $navbar; ?>
        </div>
        <h1>Empresa WC</h1>
        <form action="ejercicio2.php" method="post">
            <label for="tproyecto">Ingrese el tipo de Proyecto</label>
            <input type="text" name="tproyecto">
            <input type="submit" value="Enviar">
        </form>
        <?php
        $valorhoras = ["a" => 20000, "b" => 10000, "c" => 5000, "d" => 35000, "e" => 25000, "f" => 4500];
        if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
            $tproyecto = $_POST['tproyecto'];
            if ($tproyecto != "" && key_exists($tproyecto, $valorhoras)) {

                $sueldomensual = ($valorhoras[$tproyecto] * 8) * 30;

                if ($sueldomensual > 1500000) {
                    $mensaje = "Salario es mayor a tope máximo <br><br>";
                } else {
                    $vhora_ext = ($valorhoras[$tproyecto] + ($valorhoras[$tproyecto] * 6 / 100));
                    $thoras_ext = $vhora_ext * 3;
                    $mensaje = "valor hora extra: " . $vhora_ext . "<br>" .
                        "nuevo sueldo: " . ($sueldomensual + $thoras_ext) . "<br><br>";
                }


                foreach ($valorhoras as $tipo => $valor) {
                    switch ($tproyecto) {
                        case $tipo:
                            echo "valor hora: " . $valor . "<br>";

                            echo "sueldo mensual: " . $sueldomensual . "<br>";

                            echo $mensaje;
                            break;
                    }
                }
            }
            else{
                echo "ingrese un dato que corresponda";
            }
            
        }

        ?>
    </div>
   
</body>

</html>