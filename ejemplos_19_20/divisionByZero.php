<?php
//Comentario de prueba
function modulo($dividend, $divisor) {
    try {
        $result = $dividend % $divisor;
        echo "Modulo result of ($dividend % $divisor): $result";
    } catch (DivisionByZeroError $error) { // Output expected ArithmeticError.
        echo $error;
    } catch (Error $error) { // Output any unexpected errors.
        echo $error, false;
    }
}
modulo(10, 3); echo "<br/>";
modulo(10, 0); echo "<br/>";

echo "<br/><br/>";

function divide($dividend, $divisor) {
    try { // Perform the operation.
        $result = $dividend / $divisor;
        echo "Division result of ($dividend / $divisor): $result";
    } catch (DivisionByZeroError $error) { // Output expected ArithmeticError.
        echo $error;
    } catch (Error $error) { // Output any unexpected errors.
        echo $error;
    }
}
divide(10, 2); echo "<br/>";
divide(10, 0); echo "<br/>";

echo "<br/><br/>";

function performIntDiv($dividend, $divisor) {
    try { // Perform the operation.
        $result = intdiv($dividend, $divisor);        
        echo "Cociente result of ($dividend / $divisor): $result";
    } catch (DivisionByZeroError $error) { // Output expected ArithmeticError.
        echo $error;
    } catch (Error $error) {// Output any unexpected errors.
        echo $error;
    }
}
performIntDiv(15, 2); echo "<br/>";
performIntDiv(15, 0); echo "<br/>";