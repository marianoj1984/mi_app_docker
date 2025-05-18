<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes desde MySQL</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Mensajes guardados en la base de datos</h1>
        <div class="messages">
            <?php
            $conn = new mysqli("mysql_server", "root", "1234", "web_data");

            if ($conn->connect_error) {
                echo "<p class='error'>Error de conexión: " . $conn->connect_error . "</p>";
            } else {
                $result = $conn->query("SELECT * FROM registros");
                while ($row = $result->fetch_assoc()) {
                    echo "<p class='message'>{$row['mensaje']}</p>";
                }
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>

