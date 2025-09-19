<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Peasy - Walkthrough</title>
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
            <h1>EASY PEASY</h1>
            <p class="subtitle">Walkthrough da sala do TryHackMe</p>
        </header>
        
        <section class="intro">
            <h2>Sala Easy Peasy</h2>
            <p>Esta é uma sala de CTF (Capture The Flag) do TryHackMe focada em usar ferramentas como Nmap e GoBuster para localizar diretórios ocultos e obter acesso inicial a uma máquina vulnerável. Depois, é necessário escalar privilégios através de um cronjob vulnerável.</p>
            
            <a href="https://tryhackme.com/room/easypeasyctf" target="_blank" class="example-link">
                <i class="fas fa-external-link-alt"></i> Acessar Sala no TryHackMe
            </a>
            
            <div class="highlight">
                <strong>Nota:</strong> Esta sala ensina técnicas de enumeração com Nmap e GoBuster, decodificação de dados e exploração de cronjobs para escalação de privilégios.
            </div>
        </section>
        
        <section class="section">
            <h2>Reconhecimento Inicial</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">1</div>
                    <h3>Escaneamento Básico de Portas</h3>
                </div>
                <p>Primeiro, realize um escaneamento básico de portas para identificar serviços disponíveis:</p>
                <div class="code">
                    nmap -sV 10.201.98.251
                </div>
                
                <div class="highlight">
                    <strong>Resultado do escaneamento:</strong>
                    <ul>
                        <li>Porta 80/tcp: HTTP - nginx 1.16.1</li>
                    </ul>
                </div>
                
                <p>O resultado mostra apenas um serviço web nginx na porta 80.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">2</div>
                    <h3>Escaneamento Completo de Portas</h3>
                </div>
                <p>Um escaneamento mais completo revela portas adicionais:</p>
                
                <div class="code">
                    nmap -p- 10.201.98.251 -T 5
                </div>
                
                <div class="highlight">
                    <strong>Resultado do escaneamento completo:</strong>
                    <ul>
                        <li>Porta 80/tcp: HTTP</li>
                        <li>Porta 6498/tcp: unknown</li>
                        <li>Porta 30171/tcp: filtered</li>
                        <li>Porta 35419/tcp: filtered</li>
                        <li>Porta 37338/tcp: filtered</li>
                        <li>Porta 65524/tcp: unknown</li>
                    </ul>
                </div>
                
                <p>Várias portas adicionais foram descobertas, algumas filtradas e outras abertas.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Enumeração Web</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">3</div>
                    <h3>Enumeração de Diretórios com GoBuster</h3>
                </div>
                <p>Use o GoBuster para encontrar diretórios ocultos no servidor web:</p>
                
                <div class="code">
                    gobuster dir -u http://10.201.98.251/ -w /usr/share/wordlists/dirbuster/directory-list-2.3-medium.txt
                </div>
                
                <div class="highlight">
                    <strong>Resultado da enumeração:</strong>
                    <ul>
                        <li>/hidden (Status: 301)</li>
                    </ul>
                </div>
                
                <p>O diretório <code>/hidden</code> foi encontrado e parece promissor para investigação.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">4</div>
                    <h3>Investigando o Diretório /hidden</h3>
                </div>
                <p>Ao acessar o diretório <code>/hidden</code>, não foi encontrado conteúdo visível, então foi realizada uma nova enumeração dentro deste diretório:</p>
                
                <div class="code">
                    gobuster dir -u http://10.201.98.251/hidden/ -w /usr/share/wordlists/dirbuster/directory-list-2.3-medium.txt
                </div>
                
                <div class="highlight">
                    <strong>Resultado da enumeração em /hidden:</strong>
                    <ul>
                        <li>/hidden/whatever (Status: 301)</li>
                    </ul>
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">5</div>
                    <h3>Analisando o Código Fonte</h3>
                </div>
                <p>Ao acessar <code>/hidden/whatever</code>, foi encontrado um código em base64 no código fonte da página:</p>
                
                <div class="code">
                    ZmxhZ3tmMXJzN19mbDRnfQ==
                </div>
                
                <p>Este código foi decodificado usando:</p>
                
                <div class="code">
                    echo "ZmxhZ3tmMXJzN19mbDRnfQ==" | base64 -d
                </div>
                
                <div class="highlight">
                    <strong>Resultado da decodificação:</strong> flag{f1rs7_fl4g}
                </div>
                
                <p>Primeira flag obtida com sucesso!</p>
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
                    <td><code>nmap -p-</code></td>
                    <td>Escaneamento de todas as portas</td>
                    <td>Encontrar todas as portas abertas</td>
                </tr>
                <tr>
                    <td><code>gobuster dir</code></td>
                    <td>Enumeração de diretórios web</td>
                    <td>Encontrar paths ocultos</td>
                </tr>
                <tr>
                    <td><code>base64 -d</code></td>
                    <td>Decodificação Base64</td>
                    <td>Decodificar informações ocultas</td>
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
                        <p>Escaneamento de portas com Nmap revelou serviços web e portas adicionais.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <h3>Enumeração</h3>
                    </div>
                    <div class="card-content">
                        <p>GoBuster usado para encontrar diretórios ocultos, revelando /hidden/whatever.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-flag"></i>
                        </div>
                        <h3>Flag Obtida</h3>
                    </div>
                    <div class="card-content">
                        <p>Decodificação de Base64 no código fonte revelou a primeira flag: flag{f1rs7_fl4g}.</p>
                    </div>
                </div>
            </div>
            
        </section>
        
        <footer>
            <p>Easy Peasy do TryHackMe - Walkthrough</p>
        </footer>
    </div>
</body>
</html>