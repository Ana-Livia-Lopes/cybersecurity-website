<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo - Ferramentas de Segurança</title>
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
            background: linear-gradient(135deg, #115192 0%, #0a4b8f 100%);
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
            color: #115192;
            margin: 35px 0 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #115192;
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
            text-align: center;
        }
        
        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }
        
        .card {
            background: linear-gradient(145deg, #ffffff, #f5f9ff);
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 25px;
            transition: all 0.3s ease;
            border-top: 5px solid #115192;
            position: relative;
            overflow: hidden;
            text-align: center;
            text-decoration: none;
            color: inherit;
            display: block;
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
            text-decoration: none;
            color: inherit;
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #115192, #0a4b8f);
        }
        
        .card-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .card-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #115192, #0a4b8f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            margin: 0 auto 15px;
        }
        
        .card h3 {
            color: #115192;
            margin: 0 0 15px;
            font-size: 1.6rem;
        }
        
        .card-content {
            color: #444;
            line-height: 1.6;
        }
        
        .card-button {
            display: inline-block;
            background: #115192;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            margin-top: 15px;
            transition: background 0.3s;
        }
        
        .card-button:hover {
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
            
            .card-icon {
                width: 60px;
                height: 60px;
                font-size: 1.7rem;
            }
        }
    </style>
</head>
<body>
    
    <a href="./index.php"><?php include('seta.php'); ?></a>
    <div class="container">
        <header>
            <h1>CONTEÚDO</h1>
            <p class="subtitle">Ferramentas e Técnicas de Segurança Cibernética</p>
        </header>
        
        <section class="intro">
            <h2>Explore Nossos Materiais</h2>
            <p>Selecione uma das ferramentas abaixo para acessar o conteúdo detalhado com explicações, comandos e exemplos práticos.</p>
        </section>
        
        <div class="cards-container">
            <a href="conteudo/burp.php" class="card">
                <div class="card-icon">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <h3>BURP SUITE</h3>
                <div class="card-content">
                    <p>Framework completo para testes de segurança em aplicações web. Aprenda a usar o proxy, intruder, repeater e outros módulos para identificar vulnerabilidades.</p>
                </div>
                <div class="card-button">Acessar Conteúdo</div>
            </a>
            
            <a href="conteudo/SQLi.php" class="card">
                <div class="card-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h3>SQL Injection</h3>
                <div class="card-content">
                    <p>Técnicas de exploração de vulnerabilidades SQL. Aprenda sobre In-Band, Blind e Time-Based SQL Injection com exemplos práticos e comandos.</p>
                </div>
                <div class="card-button">Acessar Conteúdo</div>
            </a>
            
            <a href="conteudo/volatility.php" class="card">
                <div class="card-icon">
                    <i class="fas fa-memory"></i>
                </div>
                <h3>Volatility</h3>
                <div class="card-content">
                    <p>Ferramenta de análise forense de memória RAM. Aprenda a extrair artefatos digitais de dumps de memória e analisar processos, conexões e malwares.</p>
                </div>
                <div class="card-button">Acessar Conteúdo</div>
            </a>
            
            <a href="conteudo/firewall.php" class="card">
                <div class="card-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Firewall</h3>
                <div class="card-content">
                    <p>Tipos de firewall e suas funcionalidades. Entenda as diferenças entre Stateless, Stateful, Proxy e Next-Generation Firewalls e como configurar regras.</p>
                </div>
                <div class="card-button">Acessar Conteúdo</div>
            </a>
            
            <a href="conteudo/metasploit.php" class="card">
                <div class="card-icon">
                    <i class="fas fa-bomb"></i>
                </div>
                <h3>Metasploit</h3>
                <div class="card-content">
                    <p>Framework de exploração de vulnerabilidades. Aprenda comandos essenciais, uso de exploits, payloads e técnicas de pós-exploração.</p>
                </div>
                <div class="card-button">Acessar Conteúdo</div>
            </a>
            
            <a href="conteudo/hydra.php" class="card">
                <div class="card-icon">
                    <i class="fas fa-flag"></i>
                </div>
                <h3>Hydra</h3>
                <div class="card-content">
                    <p>Ferramenta para teste de penetração. tutorial de utilização da ferramenta explicando onde encontrar as informações</p>
                </div>
                <div class="card-button">Acessar Conteúdo</div>
            </a>
        </div>
        
        <section class="intro">
            <h2>Como Utilizar Este Material</h2>
            <p>Cada página contém explicações detalhadas, comandos práticos, exemplos de uso e exercícios para consolidar o aprendizado. Use os cards acima para navegar entre os conteúdos e explore os tópicos de seu interesse.</p>
        </section>
        
        <footer>
            <p>Material educativo para estudos em segurança cibernética e ethical hacking</p>
        </footer>
    </div>
</body>
</html>