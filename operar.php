<?php

$op1=$_GET['num1'];
$op2=$_GET['num2'];
$operador =$_GET['operador'];

switch ($operador) {
    case 'suma':
        echo $op1+$op2;
        break;
    case 'resta':
        echo $op1-$op2;
        break;
    case 'multi':
        echo $op1*$op2;
        break;
    case 'divi':
    	if($op2!=0)
        echo $op1/$op2;
    	else
    	echo "No se permite division entre 0";
        break;
    case 'mod':
        echo $op1%$op2;
        break;
}
echo "<form method = 'POST' action = 'practica_calculadora.html'>";
echo "<br>","<input type = 'submit' value = 'Regresar'>";
?>
