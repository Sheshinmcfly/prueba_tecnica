
// Referencias del HTML.
const formFibonacci = document.querySelector('#FormFibonacci');
const formInvertir = document.querySelector('#FormInvertir');
const formMultiplicacion = document.querySelector('#FormMultiplicacion');
const divArrnum = document.querySelector('#ArrayNumb');
const divPrimos = document.querySelector('#ArrayPrimos');


// Evento submit del formulario fibonacci.
formFibonacci.addEventListener('submit', (event) => {

    // Previene la recarga automática de la página al hacer submit.
    event.preventDefault();

    // Desestructuración de datos obtenidos del formulario.
    const { numero, serie } = event.target;

    // Se asigna resultado al value del elemento del DOM.
    serie.value = fibonacci(parseInt(numero.value));
});


// Evento submit del formulario de string invertido.
formInvertir.addEventListener('submit', (event) => {

    // Previene la recarga automática de la página al hacer submit.
    event.preventDefault();

    // Desestructuración de datos obtenidos del formulario.
    const { palabra, invertida } = event.target;

    // Se asigna resultado al value del elemento del DOM.
    invertida.value = invertirString(palabra.value);
});


// Evento submit del formulario de multiplicación.
formMultiplicacion.addEventListener('submit', (event) => {

    // Previene la recarga automática de la página al hacer submit.
    event.preventDefault();

    // Desestructuración de datos obtenidos del formulario.
    const { numero1, numero2, resultado } = event.target;

    // Se asigna resultado al value del elemento del DOM.
    resultado.value = multiplicar(numero1.value, numero2.value);
});


// 1.- Función fibonacci ---> Fórmula F(0)=0; F(1)=1; F(n) = F(n-1) + F(n-2);
const fibonacci = (num) => {

    // Declaración e inicialización vacía del arreglo de la secuencia a obtener.
    let secuencia = [];

    // Se valida que el número ingresado y que no sea posible ingresar otro tipo de carácter.
    if (num > 1) {

        // Por regla la secuencia siempre empieza en 0 y 1.
        secuencia = [0, 1];

        // A través del bucle for, se inserta en el arreglo la suma de los dos números anteriores.
        for (let i = 2; i <= num; i++) {

            secuencia.push(secuencia[i - 2] + secuencia[i - 1]);
        }

    } else if (num == 1) {

        secuencia = [0, 1];

    } else if (num <= 0) {

        secuencia = 0;

    } else if (isNaN(num)) {

        secuencia = 'Ingrese un número válido';
    }

    return secuencia;
};


// 2.- String invertido.
const invertirString = (palabra) => {

    // Se edclara e inicializa en un string vacío la variable.
    let palabraInvertida = '';

    // Esta es la forma comúnmente vista.
    /*
    for (let i = palabra.length - 1; i >= 0; i--) {
        palabraInvertida += palabra[i];
    }
    */

    // A través de un ciclo for in se recorre la palabra en su posición invertida y se concatena en la variable.
    for (const index in palabra) {
        palabraInvertida += palabra[palabra.length - index - 1];
    }

    return palabraInvertida;
};


// 3.- Multiplicar sin signo.
const multiplicar = (a, b) => {

    // Se declara e inicializa en 0 el resultado, y la variable negativo en false (multiplicación positiva o negativa).
    let resultado = 0;
    let negativo = false;

    // Se valida que los argumentos sean numéricos.
    if (!isNaN(a) && !isNaN(b)) {

        // Parseo a enteros ya que se obtienen como string desde el formulario.
        a = parseInt(a);
        b = parseInt(b);

        // Se valida si el primer argumento es negativo.
        if (Math.sign(a) === -1) {

            a = Math.abs(a);
            negativo = true;
        }

        // Se suma el segundo argumento en la variable y se repite de acuerdo al número del primer argumento.
        for (let i = 1; i <= a; i++) {
            resultado += b;
        }

        // Se valida si la variable negativo está en true para convertir a negativa la multiplicación.
        if (negativo === true) {
            resultado = -resultado;
        }

    } else {
        resultado = 'Ingrese números válidos';
    }

    return resultado;
};


// 4.- Sumar números primos (Función anónima autoinvocable).
(() => {

    // Declaración y asignacion del arreglo de números
    let numArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28,
        29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51,
        52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74,
        75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97,
        98, 99, 100];

    // Declaración e inicialización vacía del arreglo de números primos.
    let primosArr = [];


    //Función para saber si el número es primo
    const primo = (numero) => {
        
        // Valida si el número obtenido es primo y si es mayor a 1.
        for (let i = 2; i < numero; i++) {
            
            if (numero % i === 0) return false;
        }
        
        return numero > 1;
    }
    
    // Recorre el arreglo de números, si el número[i] es primo, se inserta en el arreglo primosArr.
    for (let i = 2; i < numArr.length; i++) {
        
        if (primo(i)) { primosArr.push(i) }
    }
    

    // Se asignan los arreglos a los value de los elementos del DOM.
    divArrnum.value = numArr;
    divPrimos.value = primosArr;
})();