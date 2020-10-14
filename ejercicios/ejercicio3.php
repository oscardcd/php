<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel WC</title>
    <link rel="stylesheet" href="navbar.css">
    <?php include_once 'navbar.php' ?>
</head>
<body>
<!-- 
    El hotel WC, está interesado en realizar la automatización de los precios a cobrar por habitación dependiendo de la cantidad de huéspedes; a los que se les deberá cobrar una tarifa acorde a los días de estadía. Y al final se le debe realizar un descuento. Tener presente: 
    TARIFAS

    INDIVIDUAL	$2.500
DOBLE	$4.600
FAMILIAR	$5.200

Para los cobros:
●	En caso de que llegue un solo huésped, el precio de la habitación será la cantidad de días que se va a hospedar por la tarifa individual.
●	En caso de que llegue una pareja de huéspedes, el precio de la habitación será la cantidad de días que se van a hospedar por la tarifa doble.
●	Y en el caso de que lleguen tres o más huéspedes, el precio de la habitación será la cantidad de días que se van a hospedar por la tarifa familiar.
Para los descuentos:
●	Para un solo huésped se le aplicará un descuento del 5% sobre el cobro con IVA
●	Para la pareja de huéspedes se les aplicará un descuento del 9% sobre el cobro con IVA
●	Y para tres huéspedes se les aplicará un descuento del 15% sobre el cobro con IVA

-->
    <div class="ejercicio2">
    <div class="navegador" id="navegador">
        <?php echo $navbar;?>
    </div>
    <h1>Empresa WC</h1>
    

    <form action="ejercicio3.php" method="POST">
        <label for="canpersonas">cantidad de personas</label>
        <input type="text" name="personas">
        <label for="dias">DIAS</label>
        <input type="text" name="dias" >
        <input type="submit">
        
    </form><br>
    </div>

    <?php
        if (strtoupper($_SERVER['REQUEST_METHOD'])=='POST') {
            $tarifas=["individual"=>2500,"doble"=>4600,"familiar"=>5200];
            
            if(isset($_POST['personas'])&& $_POST['dias']!=0){
                $personas=$_POST['personas'];
                $dias=$_POST['dias'];
            }
            else
            {
                $personas=0;
            }
            switch ($personas) {
                case '1':
                         $precio=$dias*$tarifas["individual"];
                         $civa=$precio+(($precio*16)/100);
                         $des=$civa-(($civa*5)/100);
     
                         echo "precio sin iva: ".$precio."<br>";
                         echo "precio con iva: ".$civa."<br>";
                         echo "precio con descuento: ".$des;
                    break;
                 
                    case '2':
                     $precio=$dias*$tarifas["doble"];
                     $civa=$precio+(($precio*16)/100);
                     $des=$civa-(($civa*9)/100);
     
                     echo "precio sin iva: ".$precio."<br>";
                     echo "precio con iva: ".$civa."<br>";
                     echo "precio con descuento: ".$des;
                break;
     
                case '3' or '>3':
                 $precio=$dias*$tarifas["familiar"];
                 $civa=$precio+(($precio*16)/100);
                 $des=$civa-(($civa*15)/100);
     
                 echo "precio sin iva: ".$precio."<br>";
                 echo "precio con iva: ".$civa."<br>";
                 echo "precio con descuento: ".$des;
            break;
     
                default:
                    echo "ingrese datos"; 
                    break;
            }
        }
    ?>
</body>
</html>