<?php
session_start();
if (!isset($_SESSION['comments'])) {
    $_SESSION['comments'] = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'];
    $_SESSION['comments'][] = $comment;
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>XSS Almacenado</title>
</head>
<body>
    <h1>Deja un comentario</h1>
    <form method="POST" action="">
        <textarea name="comment" rows="5" cols="40" placeholder="Escribe tu comentario aquí..."></textarea><br>
        <button type="submit">Enviar</button>
    </form>
    <h2>Comentarios:</h2>
    <?php
    foreach ($_SESSION['comments'] as $com) {
        echo "<p>$com</p>";  }
    ?>
</body>
</html>
