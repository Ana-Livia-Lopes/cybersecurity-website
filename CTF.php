<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writeups - Salas de CTF Resolvidas</title>
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
        
        .platform-section {
            margin-bottom: 40px;
        }
        
        .platform-title {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #115192;
            margin: 35px 0 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #115192;
        }
        
        .platform-icon {
            font-size: 1.8rem;
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
    <div class="container">
        <header>
            <h1>WRITEUPS</h1>
            <p class="subtitle">Soluções detalhadas de salas de Capture The Flag</p>
        </header>
        
        <section class="intro">
            <h2>Explore Nossos Writeups</h2>
            <p>Selecione uma das salas de CTF abaixo para acessar o walkthrough completo com explicações detalhadas, comandos e soluções.</p>
        </section>
        
        <div class="platform-section">
            <h2 class="platform-title">
                <i class="fab fa-tryhackme platform-icon"></i>
                TryHackMe
            </h2>
            <div class="cards-container">
                <a href="./CTF/brooklyn_nine_nine.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-police-box"></i>
                    </div>
                    <h3>Brooklyn Nine Nine</h3>
                    <div class="card-content">
                        <p>Walkthrough da sala do TryHackMe com tema da série Brooklyn Nine-Nine. Aprenda técnicas de enumeração e escalação de privilégios.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
                
                <a href="./CTF/cyber_heroes.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>CyberHeroes</h3>
                    <div class="card-content">
                        <p>Sala focada em conceitos básicos de segurança cibernética. Ideal para iniciantes que querem aprender os fundamentos.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
                
                <a href="./CTF/hydra.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-unlock-alt"></i>
                    </div>
                    <h3>Hydra</h3>
                    <div class="card-content">
                        <p>Aprenda técnicas de brute force usando a ferramenta Hydra. Descubra como explorar serviços com autenticação fraca.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
                
                <a href="./CTF/rootme.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-user-secret"></i>
                    </div>
                    <h3>RootMe</h3>
                    <div class="card-content">
                        <p>Desafio focado em técnicas de exploração e escalação de privilégios. Aprenda a obter acesso root em sistemas Linux.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
                
                <a href="./CTF/pickle_rick.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>Pickle Rick</h3>
                    <div class="card-content">
                        <p>CTF baseado na série Rick and Morty. Aprenda sobre enumeración de diretórios, manipulação de arquivos e execução de comandos.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
                
                <a href="./CTF/h4cked.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-skull"></i>
                    </div>
                    <h3>H4cked</h3>
                    <div class="card-content">
                        <p>Sala que simula um ambiente comprometido. Aprenda técnicas de análise forense e investigação de incidentes.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
                
                
                <a href="./CTF/easy_peasy.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Easy Peasy</h3>
                    <div class="card-content">
                        <p>Como o nome sugere, uma sala fácil para iniciantes. Pratique conceitos básicos de enumeração e exploração.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>

                
                <a href="./CTF/vulnerability_capstone.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3>Vulnerability Capstone</h3>
                    <div class="card-content">
                        <p>Desafio que abrange múltiplas vulnerabilidades. Teste suas habilidades em diferentes tipos de exploração.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
                
                <a href="./CTF/linux_agency.php" class="card">
                    <div class="card-icon">
                        <i class="fab fa-linux"></i>
                    </div>
                    <h3>Linux Agency</h3>
                    <div class="card-content">
                        <p>Sala focada em técnicas avançadas de Linux. Aprenda sobre permissões, processos e escalação de privilégios em ambientes Linux.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
            </div>
        </div>
        
        <div class="platform-section">
            <h2 class="platform-title">
                <i class="fas fa-users platform-icon"></i>
                HackingClub
            </h2>
            <div class="cards-container">
                
                <a href="./CTF/flow.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3>Flow</h3>
                    <div class="card-content">
                        <p>CTF focado em análise de tráfego de rede e pacotes. Aprenda a usar o Wireshark para investigar comunicações suspeitas.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
                
                <a href="./CTF/newcorp.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>NewCorp</h3>
                    <div class="card-content">
                        <p>Ambiente corporativo moderno com desafios de segurança atualizados. Ideal para praticar técnicas de pentesting em redes empresariais.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
                
                <a href="./CTF/comandos_linked.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-terminal"></i>
                    </div>
                    <h3>Comandos Linked Explicado</h3>
                    <div class="card-content">
                        <p>Guia detalhado sobre comandos de Linux e suas aplicações em testes de penetração. Aprenda a usar o terminal como um profissional.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
            </div>
        </div>
        
        <div class="platform-section">
            <h2 class="platform-title">
                <i class="fas fa-flag platform-icon"></i>
                PicoCTF
            </h2>
            <div class="cards-container">
                <a href="./CTF/PicoCTF.php" class="card">
                    <div class="card-icon">
                        <i class="fas fa-flag-checkered"></i>
                    </div>
                    <h3>PicoCTF</h3>
                    <div class="card-content">
                        <p>Desafios variados do PicoCTF, ideal para iniciantes. Abrange desde conceitos básicos até técnicas intermediárias de hacking.</p>
                    </div>
                    <div class="card-button">Acessar Writeup</div>
                </a>
            </div>
        </div>
        
        <section class="intro">
            <h2>Como Utilizar Estes Writeups</h2>
            <p>Cada writeup contém explicações detalhadas, comandos utilizados, screenshots e dicas para resolver os desafios. Recomendamos tentar resolver as salas por conta própria antes de consultar os writeups, utilizando-os apenas quando necessário para maximizar o aprendizado.</p>
        </section>
        
        <footer>
            <p>Material educativo para estudos em segurança cibernética e ethical hacking</p>
        </footer>
    </div>
</body>
</html>