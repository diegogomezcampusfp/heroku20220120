<?php
        echo "<h2>Variables y constantes</h2>";
        define("DATO", "un dato de ejemplo");  // para declarar una constante tambien se puede hacer con la palabra const
        echo "La constante dato es " . DATO;
        $numero = 5;
        $numero++;
        echo "<p>El numero es " . $numero . "</p>"; 
        echo "El numero es " . $numero++ . "</p>";
        echo "<h3>Operadores</h3>";
        $numero1=10;
        $numero2=6;
        if($numero1 >=$numero2){ // operador de comparacion 
            echo "<p>El primer numero es el mayor</p>";
        } else {
            echo "<p>el primer numero es menor</p>";
        }
        $aprobado= true;
        if($aprobado){
            echo "Has aprobado";

        } else {
            echo "No apto";
        }
        
        $nota="8";
        if($nota==8){
            echo "Tu nota es un notable";
        } else {
            echo "Tu nota no es un ocho";
        }
        echo "<hr>";
        echo "<h3>Operadores</h3>";
        for($i=0; $i<=10; $i++){ //recorrer un array con un for consume mucha memoria
            echo $i . "-";
        }
        $a=0;
        echo "<br />";
        while ($a <=10){
            echo $a++."-";
        }

    ?>
