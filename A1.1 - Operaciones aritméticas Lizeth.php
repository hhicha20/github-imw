//Implementa una aplicación en PHP que permita realizar al usuario operaciones aritméticas. Para ello, le daremos a escoger entre tres tipos de operaciones diferentes. 
//La aplicación debe tener las siguientes características:
// - Una de las operaciones debe ser la multiplicación.
// - Tras escoger el tipo de operación, solicitaremos al usuario los dos (o más) operandos necesarios para realizar la operación y mostraremos el resultado.
// - Todas las operaciones se deben implementar mediante el uso de funciones.
// - La multiplicación se debe calcular empleando un bucle.
// - La aplicación se ejecutará en un bucle de forma que tras terminar de ejecutar cualquier operación, se le volverá a pedir al usuario cuál es la siguiente operación que desea realizar. 
// - Se le debe proporcionar al usuario la posibilidad de salir de la aplicación de forma controlada a través del mecanismo que estimes oportuno.

<?php
function menu()
{
    echo "\ Bienvenido a la aplicación PHP Lizeth\n";
    echo "\ Opción 1 Suma\n";
    echo "\ Opción 2 Resta\n";
     echo "\ Opción 3 Multiplicación\n";
     echo "\ Opción 4 Salir\n";
 }


// Operación de suma

function suma()
{
    echo "\ Has selccionado la Opción 1 Suma\n";
    $sum1 = readline("Introduce un primer número: ");
    $sum2 = readline("Introduce un segundo número: ");
    echo "El resultado es: ". ($sum1 + $sum2);
    
}
// Operación de Resta

function resta()
{
    echo "\ Has selccionado la Opción 2 Resta\n";
    $res1 = readline("Introduce un primer número: ");
    $res2 = readline("Introduce un segundo número: ");
    echo "El resultado es: ".($res1 - $res2);
    
}
// Operación de Multiplicación

function multiplicacion()
{
    echo "\ Has selccionado la Opción 3 Multiplicación\n";
    $multi1 = readline("Introduce un primer número: ");
    $multi2 = readline("Introduce un segundo número: ");
    $total= 0;
    for ($i = 0; $i < ($multi2); $i++){
        $total += $multi1;
    }
    echo "El resultado es: ".$total;
    
}

while (true){
    menu();
    $opc = readline("Selecione una opción: ");
    switch($opc){
        case 1:{
            suma();
            break;
        }
        case 2:{
            resta();
            break;
        }    
        case 3:{
            multiplicacion();
            break;
        }    
        case 4:{    

            echo "Al que madruga dios le ayuda :)";
            
            exit(0);
        }  
    }
}

?>