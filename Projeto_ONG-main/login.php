<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <header>
        <form action="" method="post"> 
             
             
            </form>
        <div class="titulo">PATAS SOLIDARIAS</div>
        <a class="link_menu" href="principal.php"> Menu principal </a></div>
    </header>
    <form action="login.php" method="POST">
        <div class="login_texto">Login</div>
        <div class="quadrado_login">
            <div class="texto_usuario"> Usuário <br><input type="text" name="email" class="usuario"> </div>
            <br>
            <div class="texto_senha"> Senha <br> <input type="password" name="senha" class="senha_login"> </div>
            <input type="submit" value="Fazer login" class="login_botao">
        </div>
        
    </form>
    
    <div class="texto_cadastro">Usuário novo?<a href="cadastro.html">Faça seu cadastro!</a> </div>
</body>
</html> 

<?php
session_start();
$_SESSION['user_type'] = 'COMUM'; 


$host = 'localhost'; 
$db = 'patassolidarias';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $stmt = $conn->prepare("SELECT id, senha FROM pessoa WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $senha_armazenada);
        $stmt->fetch();
        

        if ($senha === $senha_armazenada) {
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;

            $_SESSION['logado'] = true; 
            header("Location: principal.php"); 
            exit();
        } else {
            echo "<script>alert('Senha incorreta!');</script>";
        }
    } else {
        echo "<script>alert('Email não encontrado!');</script>";
    }
    
    $stmt->close();
}

$conn->close();
?>