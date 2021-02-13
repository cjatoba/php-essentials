<?php 

    session_start(); 
    $_SESSION['hiddenKey'] = sha1(rand());

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="server_side.php" method="post">
        <input type="hidden" name="hiddenKey" value="<?= $_SESSION['hiddenKey'] ?>" required>
        <input type="text" name="nome" placeholder="nome" required>
        <input type="text" name="sobrenome" placeholder="sobrenome" required>
        <input type="number" name="cpf" placeholder="cpf" required>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>