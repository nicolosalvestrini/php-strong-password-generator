<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Generatore di password casuali
    </h1>

    <form action="password.php" method="get">
        <label for="lunghezza">Lunghezza password:</label>
        <input type="number" name="lunghezza" id="lunghezza" min="1" max="100" required>
        <button type="submit">Genera</button>
    
</body>
</html>