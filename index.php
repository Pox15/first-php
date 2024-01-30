<?php
// index.php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["username"], $_GET["email"], $_GET["password"])) {
    // Processar o formulário e realizar outras ações necessárias...

    // Redirecionar apenas se não estivermos já redirecionando
    if (!isset($_GET["redirected"])) {
        header("Location: index.php?redirected=1");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="username" placeholder="name">
        <br>
        <input type="text" name="email" placeholder="email">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <input type="submit" value="Registrar">
    </form>

    <?php
        $username = isset($_GET["username"]) ? $_GET["username"] : "";
        $email    = isset($_GET["email"]) ? $_GET["email"] : "";

        echo "Oi $username confirme se esse email $email eh o seu verdadeiro <br>";
    ?>
</body>
</html>
