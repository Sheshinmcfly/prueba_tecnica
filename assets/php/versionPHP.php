<!-- Se incluye el archivo de funciones. -->
<?php include("funciones.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba técnica</title>

    <!-- Bootstrap 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="container">

    <!-- Fibonacci -->
    <div class="col-5">

        <h2 class="my-3">1- Serie Fibonacci</h2>

        <!-- Formulario -->
        <form class="row pt-3" method="post">

            <!-- Numero -->
            <div class="w-75 mb-3">
                <input type="text" name="numero" class="form-control" placeholder="Ingrese un número">
            </div>

            <!-- Serie -->
            <div class="w-75 mb-4">
                <input type="text" name="serie" class="form-control" placeholder="Serie fibonacci" disabled 
                value="<?php
                            if (is_array($ejec_fibonacci) || is_object($ejec_fibonacci)) {
                                
                                foreach ($ejec_fibonacci as $serie) {
                                    echo "$serie,";
                                }
                            }
                        ?>"
                >
            </div>

            <!-- Calcular -->
            <div class="w-75">
                <button class="btn btn-outline-primary w-50" type="submit">Calcular</button>
            </div>

        </form>

    </div>

    <hr class="my-5">

    <!-- String invertido -->
    <div class="col-5">

        <h2 class="my-3">2- String invertido</h2>

        <!-- Formulario -->
        <form class="row pt-3" method="post">

            <!-- Palabra -->
            <div class="w-75 mb-3">
                <input type="text" name="palabra" class="form-control" placeholder="Ingrese una palabra">
            </div>

            <!-- Serie -->
            <div class="w-75 mb-4">
                <input type="text" name="invertida" class="form-control" placeholder="Palabra invertida" disabled value="<?= $ejec_palabra ?>">
            </div>

            <!-- Invertir -->
            <div class="w-75">
                <button class="btn btn-outline-primary w-50" type="submit">Invertir</button>
            </div>

        </form>

    </div>

    <hr class="my-5">

    <!-- Multiplicación sin símbolo -->
    <div class="col-5">

        <h2 class="my-3">3- Multiplicación sin símbolo</h2>

        <!-- Formulario -->
        <form class="row pt-3" method="post">

            <!-- Número 1 -->
            <div class="w-25 mb-3">
                <input type="text" name="numero1" class="form-control" placeholder="Número 1">
            </div>

            <i class="col-auto pt-2">*</i>

            <!-- Número 2 -->
            <div class="w-25 mb-3">
                <input type="text" name="numero2" class="form-control" placeholder="Número 2">
            </div>

            <!-- Resultado -->
            <div class="w-75 mb-4">
                <input type="text" name="resultado" class="form-control" placeholder="Resultado" disabled value="<?= $ejec_multiplicacion ?>">
            </div>

            <!-- Calcular -->
            <div class="w-75">
                <button class="btn btn-outline-primary w-50" type="submit">Calcular</button>
            </div>

        </form>

    </div>

    <hr class="my-5">

    <!-- Números primos -->
    <div class="col-5">

        <h2 class="my-3">4- Números primos</h2>

        <div class="row pt-3">

            <!-- Array recibido -->
            <div class="w-75 mb-5 col-auto">
                <label class="form-label">Array recibido</label>
                <textarea cols="50" rows="7" disabled>
                    <?php
                        if (is_array($numArr) || is_object($numArr)) {

                            foreach ($numArr as $numero) {
                                echo "$numero,";
                            }
                        }
                    ?>
                </textarea>
            </div>

            <!-- Números primos -->
            <div class="w-75 mb-3 col-auto">
                <label class="form-label">Números primos</label>
                <textarea cols="50" rows="3" disabled>
                    <?php
                        if (is_array($primosArr) || is_object($primosArr)) {

                            foreach ($primosArr as $numero) {
                                echo "$numero,";
                            }
                        }
                    ?>
                </textarea>
            </div>

        </div>

    </div>

    <hr class="my-5">

</body>

</html>