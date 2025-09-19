<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberHeroes - Walkthrough</title>
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
            <h1>CYBERHEROES</h1>
            <p class="subtitle">Walkthrough da sala do TryHackMe</p>
        </header>
        
        <section class="intro">
            <h2>Sala CyberHeroes</h2>
            <p>Esta é uma sala de CTF (Capture The Flag) do TryHackMe com desafios de segurança cibernética. O objetivo é explorar vulnerabilidades e encontrar flags escondidas.</p>
            
            <a href="https://tryhackme.com/room/cyberheroes" target="_blank" class="example-link">
                <i class="fas fa-external-link-alt"></i> Acessar Sala no TryHackMe
            </a>
            
            <div class="image-container">
                <img src="../img/c1.png" alt="Imagem de código relacionado ao CTF">
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
                    nmap -sC -sV -A 10.10.72.70
                </div>
                
                <div class="image-container">
                    <img src="../img/c2.png" alt="Resultado do escaneamento de portas">
                    <div class="image-caption">Resultado do comando nmap mostrando portas abertas</div>
                </div>
                
                <p>O resultado mostra:</p>
                <ul>
                    <li>Porta 80: HTTP - Apache httpd 2.4.48 (Ubuntu)</li>
                    <li>Sistema: Ubuntu Linux</li>
                </ul>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">2</div>
                    <h3>Enumeração de Diretórios</h3>
                </div>
                <p>Use ferramentas como gobuster para encontrar diretórios e arquivos ocultos:</p>
                <div class="code">
                    gobuster dir -u http://10.10.72.70 -w /usr/share/wordlists/dirbuster/directory-list-2.3-medium.txt
                </div>
                
                <div class="image-container">
                    <img src="../img/c3.png" alt="Resultado da enumeração de diretórios">
                    <div class="image-caption">Resultado do gobuster mostrando diretórios descobertos</div>
                </div>
                
                <p>Foi descoberto o diretório <code>/assets/js/</code> que contém um arquivo <code>main.js</code>.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Análise de Vulnerabilidades</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">3</div>
                    <h3>Inspecionando a Página de Login</h3>
                </div>
                <p>Ao inspecionar a página de login, podemos ver que não há tráfego de rede quando tentamos fazer login, indicando que a verificação é feita via JavaScript.</p>
                
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">4</div>
                    <h3>Análise do Código JavaScript</h3>
                </div>
                <p>Analisando o arquivo <code>main.js</code> encontrado no diretório <code>/assets/js/</code>:</p>
                
                <div class="code">
                    a = document.getElementById('uname')
                    b = document.getElementById('pass')
                    
                    If (a.value=="h3ck3f8o" & b.value==RevereString("5422lgterceStepsUS")) {
                        xhttp.open("GET", 'RandomL0o0o0o0o0o0o0o0o0opaint2345_Flag_"+a.value+"_-"+b.value+"txt", true);
                        xhttp.send();
                    }
                </div>

                
                <p>O código revela:</p>
                <ul>
                    <li>Username: <code>h3ck3f8o</code></li>
                    <li>Password: <code>SuperSecret@12345</code> (após reverter a string)</li>
                </ul>
            </div>
        </section>
        
        <section class="section">
            <h2>Exploração e Obtenção da Flag</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">5</div>
                    <h3>Login com Credenciais Encontradas</h3>
                </div>
                <p>Use as credenciais descobertas para fazer login no sistema:</p>
                
                <div class="code">
                    Username: h3ck3f8o
                    Password: SuperSecret@12345
                </div>
                
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">6</div>
                    <h3>Obtenção da Flag</h3>
                </div>
                <p>Após o login bem-sucedido, a flag é exibida:</p>
                
                <div class="highlight">
                    <strong>Flag encontrada:</strong> flag{ledt0bbe532c540blaf50c3a7e85d2466e}
                </div>

                <div class="code">
                    Congrats Hacker, you made it !! Go ahead and nail other challenges as well :D flag{edb0be532c540b1a150c3a7e85d2466e}
                </div>
                
                <p>Mensagem de sucesso: <em>"Congrats Hacker, you made it !! Go ahead and nail other challenges as well !"</em></p>
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
                    <td><code>nmap -sC -sV -A</code></td>
                    <td>Escaneamento agressivo de portas</td>
                    <td>Identificar serviços e versões</td>
                </tr>
                <tr>
                    <td><code>gobuster dir</code></td>
                    <td>Enumeração de diretórios</td>
                    <td>Encontrar paths ocultos</td>
                </tr>
                <tr>
                    <td>Análise de JavaScript</td>
                    <td>Inspeção de código cliente</td>
                    <td>Encontrar credenciais hardcoded</td>
                </tr>
                <tr>
                    <td>String Reversal</td>
                    <td>Reverter string JavaScript</td>
                    <td>Decodificar senha ofuscada</td>
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
                        <p>Escaneamento de portas e enumeração de diretórios revelaram o arquivo JavaScript vulnerável.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Análise</h3>
                    </div>
                    <div class="card-content">
                        <p>Análise do código JavaScript expôs credenciais embutidas e lógica de autenticação vulnerável.</p>
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
                        <p>Uso das credenciais descobertas para obter acesso e capturar a flag.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <footer>
            <p>Walkthrough educativo da sala CyberHeroes do TryHackMe | CTF e Pentesting</p>
        </footer>
    </div>
</body>
</html>