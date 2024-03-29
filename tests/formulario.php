<?php
    if(isset($_POST['submit'])){
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);
        $conn = conectarBase();
        $sql = "INSERT INTO `usuarios` (email, senha) VALUES ('$email', '$hashedPassword')";
        $stmt = $conn->prepare($sql);
    
        try{
            $stmt->execute();
            echo "Sucesso";
        } catch(PDOException $e) {
            echo "Erro". $e->getMessage();
        }
    }
    
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jogos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
        <form method="POST" action="formulario.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>