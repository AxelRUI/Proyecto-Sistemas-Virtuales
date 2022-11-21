<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorias UPSLP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
                <div>
                    <fieldset>
                        <h1>Bienvenido, profesor</h1>
                        <h2>Menú</h2>
                        <form method="POST" id="signup-form" class="signup-form" action="formulario_1.html">
                            <br><p class="desc">Para dar de alta nuevos tutelados</p>
                            <button type="submit">Dar de alta nuevo tutelado</button><br><br><br><br>
                        </form>

                        <form method="POST" id="signup-form" class="signup-form" action="formulario_1.php">
                            <div class="form-group">
                                <label class="form-label">Buscar tutelados por matrícula </label>
                                <input type="text" name="matricula" id="matricula" />
                                <span class="text-input"> </span>
                                
                            </div>
                            <button type="submit">Buscar</button><br><br>

                            <form method="POST" id="signup-form" class="signup-form" action="formulario_1.php">
                            <div class="form-group">
                                <label class="form-label">Buscar tutelados por status </label>
                                <input type="text" name="matricula" id="matricula" />
                                <span class="text-input"> Regular / Irregular</span>
                                
                            </div>
                            <button type="submit">Buscar</button><br><br><br><br>
                    </fieldset>
                    
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="vendor/minimalist-picker/dobpicker.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="js/main.js"></script>
</body>

</html>