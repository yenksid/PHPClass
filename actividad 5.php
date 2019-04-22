<!DOCTYPE html>
<html>
<body>

<?php
  //Diskney Cabrera
  //Actividad 1
  $A=3; 
  $B=5; 
  $C=7; 
  $D=2; 
  $E=3;
  
  echo "A = 3<br>B = 5<br>C = 7<br>D = 2<br>E = 3<br><br>";
    
  echo "Cuanto es la adicion de A y B?<br>(A + B)<br>";
  $resultado = $A + $B;
  echo "Este es el resultado = $resultado <br><br>";
  
  echo "A aumenta su valor en 4<br>(A = 4)<br>";
  $A = 4;
  echo "A valdrá 4 de ahora en adelante <br><br>";
  
  echo "Expresar que D y A no son iguales.<br>(D != A)<br>";
  $diferencia = $D != $A;
  if ($diferencia == 1) {
    echo "D vale $D y A vale $A por ende no son iguales.<br><br>";
  } else {
    echo "Son la misma gente, Israelito.<br><br>";
  }
  
  echo "Es C mayor que A?<br>(C > A)<br>";
  $Cmayor = $C > $A;
  if ($Cmayor == 1) {
    echo "Si, C que vale $C es mayor que A que vale $A<br><br>";
  } else {
    echo "No, A es mayor que C, Israelito.<br><br>";
  }
  
  echo "Es B menor que A? O Es D menor que E?<br>Es verdadero si una es de las sentencias es verdadera.<br>((B < A) | (D < E)).<br>";
  $mayor = (($B < $A) | ($D < $E));
  if ($mayor == 1) {
    echo "Verdadera! D que vale $D es menor que E que vale $E<br><br>";
  } else {
    echo "La sentencia es Falsa, Israelito.<br><br>";
  }
  //Actividad 2
  
  $a = 6;
  $b = 8;
  $c = 3;
  $z = 0;
  
  $_1 = (($a + $b == 14) && ($b > $c));
  if ($_1 == 1) {
    echo "Verdadero<br><br>";
  } else {
    echo "Falso<br><br>";
  }
  
  $_2 = (($b + $c == 11) && ($a + $c == 15));
  if ($_2 == 1) {
    echo "Verdadero<br><br>";
  } else {
    echo "Falso<br><br>";
  }
  
  $_3 = (($a < $z) | ($b < $c));
  if ($_3 == 1) {
    echo "Verdadero<br><br>";
  } else {
    echo "Falso<br><br>";
  }
  
  $_4 = (($a + $b == 15) | ($a + $b > $c));
  if ($_4 == 1) {
    echo "Verdadero<br><br>";
  } else {
    echo "Falso<br><br>";
  }
  
  $_5 = (($a + $b == 14 > $c) | ($z > $c));
  if ($_5 == 1) {
    echo "Verdadero<br><br>";
  } else {
    echo "Falso<br><br>";
  }
  
?> 

</body>
</html>
