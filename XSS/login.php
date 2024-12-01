<?php
session_start();
$userchk = 'esat';
$passchk = 'password';

// Verificamos si el usuario ya está autenticado
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo "<h1>Bienvenido, {$_SESSION['username']}!</h1>";
    echo "<p>Estás autenticado.</p>";
    echo "<a href='logout.php'>Cerrar sesión</a>";
    exit;
}
//Formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['username'];
    $contrasenya = $_POST['password'];
 if ($usuario === $userchk && $contrasenya === $passchk) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $usuario;
        header('Location: login.php');
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>
