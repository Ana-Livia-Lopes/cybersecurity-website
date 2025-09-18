<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burp Suite - Ferramenta de Segurança</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f0f8ff;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        header {
            text-align: center;
            margin-bottom: 40px;
            padding: 30px;
            background: linear-gradient(135deg, #115192ff 0%, #0a4b8f 100%);
            border-radius: 12px;
            color: white;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        h1 {
            font-size: 2.8rem;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        h2 {
            color: #115192ff;
            margin: 35px 0 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #115192ff;
        }
        
        h3 {
            color: #0a4b8f;
            margin: 15px 0 10px;
        }
        
        p {
            margin-bottom: 15px;
        }
        
        .intro {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
            line-height: 1.8;
        }
        
        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }
        
        .card {
            background: linear-gradient(145deg, #ffffff, #f5f9ff);
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 25px;
            transition: all 0.3s ease;
            border-top: 5px solid #115192ff;
            position: relative;
            overflow: hidden;
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #115192ff, #0a4b8f);
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }
        
        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .card-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #115192ff, #0a4b8f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 1.5rem;
        }
        
        .card h3 {
            color: #115192ff;
            margin: 0;
            font-size: 1.4rem;
        }
        
        .card-content {
            color: #444;
            line-height: 1.6;
        }
        
        .highlight {
            background-color: #e8f4ff;
            padding: 12px 15px;
            border-radius: 8px;
            margin: 15px 0;
            border-left: 4px solid #115192ff;
            font-size: 0.95rem;
        }
        
        .highlight code {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: monospace;
        }
        
        .exercise {
            background: linear-gradient(to right, #e8f4ff, #f0f8ff);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
            margin: 40px 0;
            border-left: 5px solid #115192ff;
        }
        
        .code {
            background-color: #2d2d2d;
            color: #f8f8f2;
            padding: 18px;
            border-radius: 8px;
            margin: 20px 0;
            overflow-x: auto;
            font-family: 'Fira Code', monospace;
            font-size: 0.95rem;
            line-height: 1.5;
            border-left: 4px solid #115192ff;
        }
        
        .exercise-link {
            display: inline-block;
            background: #115192ff;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            margin: 10px 0;
            transition: background 0.3s;
        }
        
        .exercise-link:hover {
            background: #0a4b8f;
        }
        
        footer {
            text-align: center;
            margin-top: 50px;
            padding: 25px;
            color: #666;
            font-size: 0.95rem;
            border-top: 1px solid #ddd;
        }
        
        @media (max-width: 768px) {
            .cards-container {
                grid-template-columns: 1fr;
            }
            
            header {
                padding: 20px;
            }
            
            h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>BURP SUITE</h1>
            <p class="subtitle">Framework completo para testes de segurança em aplicações web</p>
        </header>
        
        <section class="intro">
            <h2>O que é o Burp Suite?</h2>
            <p>O Burp Suite é um framework de captura que permite manipular todo o tráfego HTTP/HTTPS entre o navegador e o servidor web. Ao interceptar as requisições, é possível encaminhá-las para diversos módulos internos do Burp Suite, facilitando a exploração de vulnerabilidades.</p>
        </section>
        
        <h2>Principais Módulos</h2>
        <div class="cards-container">
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>Proxy</h3>
                </div>
                <div class="card-content">
                    <p>Permite interceptar, visualizar e modificar as requisições feitas entre o navegador e o servidor. É por onde tudo começa.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-bomb"></i>
                    </div>
                    <h3>Intruder</h3>
                </div>
                <div class="card-content">
                    <p>Permite enviar várias requisições automatizadas para vários endpoints. É muito utilizado para ataques de força bruta.</p>
                    <div class="highlight">
                        <strong>Endpoints</strong> são páginas de um site que recebem requisições, como <code>/login</code>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-redo"></i>
                    </div>
                    <h3>Repeater</h3>
                </div>
                <div class="card-content">
                    <p>Permite capturar uma requisição, alterá-la e reenviá-la várias vezes. Muito útil para testar payloads manualmente.</p>
                    <div class="highlight">
                        <strong>Payload</strong> é um conteúdo que você envia na aplicação para fazer o sistema se comportar de maneira inesperada como <code>' OR t=1 --</code>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-random"></i>
                    </div>
                    <h3>Sequencer</h3>
                </div>
                <div class="card-content">
                    <p>Analisa o nível de aleatoriedade de valores gerados por um sistema, como cookies ou tokens. Ele ajuda a descobrir se esses valores seguem um padrão suspeito ou são realmente imprevisíveis.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Decoder</h3>
                </div>
                <div class="card-content">
                    <p>Permite codificar e decodificar dados, útil para entender ou preparar payloads (ex: Base64, URL encode, etc).</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-compare"></i>
                    </div>
                    <h3>Comparer</h3>
                </div>
                <div class="card-content">
                    <p>Permite comparar dois conjuntos de dados, como respostas de requisições diferentes, e identificar diferenças facilmente.</p>
                </div>
            </div>
        </div>
        
        <section class="exercise">
            <h2>Exercício Prático PicoCTF</h2>
            <a href="https://play.picoctf.org/practice/challenge/419?category=1&difficulty=1&page=1" target="_blank" class="exercise-link">
                <i class="fas fa-external-link-alt"></i> Acessar Exercício
            </a>
            
            <h3>Descrição do Cenário:</h3>
            <p>Ao tentar fazer login com "teste", o sistema exibe que precisa de OTP (One-Time Password) para segunda autenticação.</p>
            
            <h3>Análise:</h3>
            <p>Caso não acerte o OTP, o sistema retorna "Invalid OTP". Interceptando com o Burp Suite, identificamos que a requisição usa o método POST.</p>
            
            <h3>Solução:</h3>
            <p>Como a requisição usa o método POST, os dados são enviados no corpo da requisição. A ideia é remover completamente o campo OTP do corpo, pois algumas aplicações tratam a ausência do campo de forma diferente de um valor incorreto.</p>
            <p>Isso pode fazer com que o sistema ignore a verificação de Senha de Uso Único, permitindo o acesso.</p>
            <p>Dessa forma basta interceptar com o burp e excluir a parte de OTP</p>
            
            <h3>Exemplo de corpo POST:</h3>
            <div class="code">
                username=admin&password=1234&otp=0000
            </div>
            
            <p>No Repeater, podemos remover o parâmetro "otp" completamente para testar se a aplicação ignora a verificação quando o campo está ausente.</p>
        </section>
        
        <footer>
            <p>Laboratório tryhackem e PicoCTF | Burp Suite</p>
        </footer>
    </div>
</body>
</html>