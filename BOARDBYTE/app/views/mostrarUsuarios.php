
<?php
include '../app/includes/comprobarSesion.php';
include '../app/includes/comprobarRol.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="/boardbyte/resources/css/normalize.css">

    <link rel="stylesheet" href="/boardbyte/resources/css/body.css">
    <link rel="stylesheet" href="/boardbyte/resources/css/navbar.css">
    <link rel="stylesheet" href="/boardbyte/resources/css/adminTablas.css">
</head>

<body>
    <?php
    include '../resources/commons/navbar.php';
    ?>
    <div class="container">
        <h1>Lista de Usuarios</h1>
        <div class="create">
            <a href="/boardbyte/usuarios/crear" class="btn-create">Crear Usuario</a>
        </div>
        <?php
        include '../app/includes/generarUsuarios.php';
        ?>
    </div>
</body>
</html>