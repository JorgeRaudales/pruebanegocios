<?php
$numero1=0;
$numero2= 0;
$iteraciones=10;
$msg = "";

if(isset($_POST["btnsPrc"])){
// elevar el numero 1  a la potencia del numero 2
 $numero1 = intval($_POST["numero1"]);
 $numero2 = intval($_POST["numero2"]);
 $newvalue = $numero1;
 
 for($i = 0; $i<$numero2-1; $i++){
  $newvalue *= $numero1;  
 }
 
 $msg=" el valor de $numero1 a la potencia $numero2 es igual a $newvalue";
}
if(isset($_POST["btnRev"])){
// echo numero 1 * iteracion
  $numero1 = intval($_POST["numero1"]);
  $iteraciones = intval($_POST["iteraciones"]);
  $contador = 1;
  while($iteraciones>0){
    $msg.="$contador ).producto: ".($numero1 * $iteraciones). "</br>";
    $contador ++;
    $iteraciones --;
  }
  
}
if(isset($_POST["btnFac"])){
// factorial numero2
  $numero2 = intval($_POST["numero2"]);
  $xx=1;
  $factorial=1;
  
    while($xx <= $numero2)
      {
         $factorial = $factorial * $xx++;
      }
    $msg="el factorial es $factorial";
}
   //<?php echo $iteraciones; //tarea como no perder la iteracion seleccionada
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Ejercicio 2 PHP switch y ciclos</title>
</head>
    <body>
     
            <form action="ejercicio2.php" method="POST">
                <label for="txt1">Número 1</label>
                <input type="text"name="numero1" id="numero1" value="<?php echo $numero1; ?>"/>
                <br/>
                <label for="txt1">Número 2</label>
                <input type="text" name="numero2" id="numero2" value="<?php echo $numero2; ?>"/>
                <br/>
                <label for="iteraciones">Número de iteraciones </label>
                <select name="iteraciones" id="iteraciones" value="<?php echo $iteraciones; ?>">
                    <option selected value="10">10</option>
                    <option selected value="20">20</option>
                    <option selected value="30">30</option>
                </select>
                <br/>       
                <input type="submit" name="btnsPrc" value="Procesar"/>
                <input type="submit" name="btnRev" value="Reversa"/>
                <input type="submit" name="btnFac" value="Factorial"/>
            </form>
            <div>
                <?php echo $msg; ?>
            </div>
    </body>
</html>
