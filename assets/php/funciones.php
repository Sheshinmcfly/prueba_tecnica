<?php

// Se inicializan las variables en valores vacíos o 0.
$numero = 0;
$numero1 = 0;
$numero2 = 0;
$palabra = '';


// Extraemos todas las variables de los formularios.
extract($_POST);


// 1.- Función fibonacci ---> Fórmula F(0)=0; F(1)=1; F(n) = F(n-1) + F(n-2);
function fibonacci($num)
{

    // Declaración e inicialización vacía del arreglo de la secuencia a obtener.
    $secuencia = [];

    // Se valida que el número ingresado y que no sea posible ingresar otro tipo de carácter.
    if ($num > 1) {

        // Por regla la secuencia siempre empieza en 0 y 1.
        $secuencia = [0, 1];

        // A través del bucle for, se inserta en el arreglo la suma de los dos números anteriores.
        for ($i = 2; $i <= $num; $i++) {

            array_push($secuencia, $secuencia[$i - 2] + $secuencia[$i - 1]);
        }
    } elseif ($num == 1) {

        $secuencia = [0, 1];
    } elseif ($num <= 0) {

        $secuencia = 0;
    }

    return $secuencia;
};


// 2.- String invertido.
function invertirString($palabra)
{

    // Se edclara e inicializa en un string vacío la variable.
    $palabraInvertida = '';

    $index = strlen($palabra) - 1;

    while ($index >= 0) {

        $palabraInvertida .= $palabra[$index];

        $index--;
    }

    return $palabraInvertida;
};


// 3.- Multiplicar sin signo.
function multiplicar($a, $b)
{

    // Se declara e inicializa en 0 el resultado, y la variable negativo en false (multiplicación positiva o negativa).
    $resultado = 0;
    $negativo = false;

    // Se valida que los argumentos sean numéricos.
    if (!is_nan($a) && !is_nan($b)) {

        // Se valida si el primer argumento es negativo.
        if ($a < 0) {

            $a = -$a;
            $negativo = true;
        }

        // Se suma el segundo argumento en la variable y se repite de acuerdo al número del primer argumento.
        for ($i = 1; $i <= $a; $i++) {
            $resultado += $b;
        }

        // Se valida si la variable negativo está en true para convertir a negativa la multiplicación.
        if ($negativo === true) {
            $resultado = -$resultado;
        }
    } else {
        $resultado = 'Ingrese números válidos';
    }

    return $resultado;
};


// 4.- Sumar números primos (Función anónima autoinvocable).
function numPrimos()
{

    // Declaración y asignacion del arreglo de números
    $numArr = [
        1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28,
        29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51,
        52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74,
        75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97,
        98, 99, 100
    ];

    // Declaración e inicialización vacía del arreglo de números primos.
    $primosArr = [];


    //Función para saber si el número es primo
    function primo($numero)
    {

        // Valida si el número obtenido es primo y si es mayor a 1.
        for ($i = 2; $i < $numero; $i++) {

            if ($numero % $i === 0) return false;
        }

        return $numero > 1;
    }

    // Recorre el arreglo de números, si el número[i] es primo, se inserta en el arreglo primosArr.
    for ($i = 2; $i < count($numArr); $i++) {

        if (primo($i)) {
            array_push($primosArr, $i);
        }
    }

    // Retorna en un arreglo las variables.
    return array($numArr, $primosArr);
};


// Se guarda función en variable para obtener el resultado.
$ejec_fibonacci = fibonacci($numero);

$ejec_palabra = invertirString($palabra);

$ejec_multiplicacion = multiplicar($numero1, $numero2);

// Listamos las variables retornadas de la función.
list($numArr, $primosArr) = numPrimos();