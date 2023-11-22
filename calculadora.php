<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con MDB</title>

    <!-- Enlaces a los archivos CSS de Bootstrap y MDB -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyET1zIve00j2mIcd/4Uo9ifwB6f/R4L2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdb-ui-kit/css/mdb.min.css" integrity="sha384-lQsoNKGbQlQ2oBkkDikOIym9aDk5g7GMaDpGGutjwJvfF6doSmiv93D6rMU2OzL3" crossorigin="anonymous">

    <!-- Enlaces a los archivos JavaScript de Bootstrap y MDB -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-Pn53802DH7ZlV4HS9OPqDmMftLp5lWI+HZfcSfEz7saH2i7/MX2exMiEm5czMQ/d" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyET1zIve00j2mIcd/4Uo9ifwB6f/R4L2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/mdb-ui-kit/js/mdb.min.js"></script>
</head>
<body class="bg-info">

    <!-- Contenedor principal con clase 'container' de Bootstrap -->
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <!-- Card con fondo blanco -->
        <div class="card p-4" style="width: 400px;">
            <h2 class="text-center mb-4">Calculadora de Vaca y Jatziry</h2>

            <!-- Formulario con clases de Bootstrap -->
            <form method="post" action="" class="row g-3">
                <div class="col-md-12">
                    <label for="num1" class="form-label">Número 1:</label>
                    <input type="number" name="num1" class="form-control" required>
                </div>

                <div class="col-md-12">
                    <label for="operation" class="form-label">Operación:</label>
                    <select name="operation" class="form-select" required>
                        <option value="add">Sumar</option>
                        <option value="subtract">Restar</option>
                        <option value="multiply">Multiplicar</option>
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="num2" class="form-label">Número 2:</label>
                    <input type="number" name="num2" class="form-control" required>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Calcular</button>
                </div>
            </form>
        <?php
        // Verificar si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los valores del formulario
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            // Realizar la operación seleccionada
            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    echo "<p class='mt-3 alert alert-success'>Resultado: $num1 + $num2 = $result</p>";
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    echo "<p class='mt-3 alert alert-success'>Resultado: $num1 - $num2 = $result</p>";
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    echo "<p class='mt-3 alert alert-success'>Resultado: $num1 * $num2 = $result</p>";
                    break;
                default:
                    echo "<p class='mt-3 alert alert-danger'>Operación no válida</p>";
            }
        }
        ?>
   </div>
    </div>
</body>
</html>