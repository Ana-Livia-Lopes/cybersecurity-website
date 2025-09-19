<?php
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin");
header("Permissions-Policy: geolocation=(), microphone=()");
session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
    $_SESSION['last_attempt'] = time();
}

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("Token CSRF inválido");
    }
    
    if ($_SESSION['login_attempts'] >= 3) {
        $wait_time = 60 * pow(2, $_SESSION['login_attempts'] - 3);
        if ((time() - $_SESSION['last_attempt']) < $wait_time) {
            $remaining = $wait_time - (time() - $_SESSION['last_attempt']);
            die("Muitas tentativas. Tente novamente em " . ceil($remaining/60) . " minutos.");
        }
    }

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $success = false; 

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Formato de email inválido");
    }

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $query = "SELECT * FROM usuarios WHERE email_usuario = ?";
    $stmt = $conexao->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario_logado = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario_logado['senha_usuario'])) {
            $success = true; 
            $_SESSION['id_usuario'] = $usuario_logado['id_usuario'];
            $_SESSION['nome'] = $usuario_logado['nome_usuario'];
            $_SESSION['tipo'] = $usuario_logado['tipo_usuario'];


            $log_message = date('Y-m-d H:i:s') . " - Login attempt - IP: " . $_SERVER['REMOTE_ADDR'] . " - Email: " . $email . " - Success: Yes";
            file_put_contents('security.log', $log_message . PHP_EOL, FILE_APPEND);

            $url_anterior = isset($_SESSION['url_anterior']) ? $_SESSION['url_anterior'] : 'index.php';
            unset($_SESSION['url_anterior']); 
            
            header("Location: $url_anterior");
            exit;
        } else {
            $success = false;
            echo "<p style='color:red;'>" . htmlspecialchars("Senha incorreta", ENT_QUOTES, 'UTF-8') . "</p>";
            $_SESSION['login_attempts']++;
            $_SESSION['last_attempt'] = time();
        }
    } else {
        $success = false;
        echo "<p style='color:red;'>" . htmlspecialchars("Usuário não consta no sistema!", ENT_QUOTES, 'UTF-8') . "</p>";
    }
    

    if (!$success) {
        $log_message = date('Y-m-d H:i:s') . " - Login attempt - IP: " . $_SERVER['REMOTE_ADDR'] . " - Email: " . $email . " - Success: No";
        file_put_contents('security.log', $log_message . PHP_EOL, FILE_APPEND);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/loginecadastro.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <title>cybersecurity website - Entrar</title>
    <script src="./js/login.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Reem+Kufi:wght@400..700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="./index.php"><?php include('seta.php'); ?></a>
    <section id="secao-login">
        <div id="box-login">
            <form action="" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <h1>Entre na sua conta</h1> 
                <label for="email">Email</label>
                <input class="inserir" name="email" type="email" required>
                <label for="senha">Senha</label>
                <input class="inserir" id="senha-campo" name="senha" type="password" required>
                <div id='mostrar'>
                        <input type='checkbox' onclick='mostrarSenha()'> Mostrar senha
                </div> 
                <input id="entrar" type="submit" value="Entrar">
                <p class="celular">Não possui uma conta? <a href="cadastro.php">Cadastre-se!</a></p>
            </form>
        </div>
    </section>
    <script>
    function mostrarSenha() {
        var x = document.getElementById("senha-campo");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>
</html>