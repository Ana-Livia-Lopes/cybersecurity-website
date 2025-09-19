<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seta de Retorno</title>
    <style>
        .back-arrow {
            position: fixed;
            top: 20px;
            left: 20px;
            width: 50px;
            height: 50px;
            background-color: #115192;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .back-arrow:hover {
            background-color: #0a4b8f;
            transform: scale(1.1);
        }
        
        .back-arrow i {
            font-size: 24px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <p href="./conteudo.php" class="back-arrow">
        <i class="fas fa-arrow-left"></i>
    </p>
</body>
</html>