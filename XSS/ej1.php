<?php
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    echo "<h1>Resultado de búsqueda:</h1>";
    echo "<p>Has buscado: $search</p>";
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Vulnerabilidad XSS</title>
</head>
<body>
    <form method="GET" action="">
        <label for="search">Buscar:</label>
        <input type="text" id="search" name="search">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
