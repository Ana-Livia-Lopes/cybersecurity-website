<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hydra - Ferramenta de Força Bruta</title>
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
            <h1>HYDRA</h1>
            <p class="subtitle">Ferramenta de ataque de força bruta de rede</p>
        </header>
        
        <section class="intro">
            <h2>O que é o Hydra?</h2>
            <p>O Hydra é uma ferramenta de ataque de força bruta que suporta vários protocolos de rede. Ele é usado para realizar ataques de dicionário contra serviços de login, ajudando a testar a segurança de sistemas.</p>
            <p>O Hydra pode realizar ataques rápidos de dicionário contra mais de 50 protocolos, incluindo telnet, FTP, HTTP, HTTPS, SMB, bancos de dados e muito mais.</p>
            <p>É uma ferramenta de linha de comando que permite automação e scripting para testes de penetração.</p>
        </section>
        
        <h2>Conceitos Importantes</h2>
        <div class="cards-container">
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <h3>Força Bruta</h3>
                </div>
                <div class="card-content">
                    <p>Método de tentativa e erro usado para descobrir informações como senhas ou chaves de criptografia.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Ataque de Dicionário</h3>
                </div>
                <div class="card-content">
                    <p>Técnica que usa uma lista de palavras (dicionário) para tentar adivinhar credenciais de acesso.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>Protocolos Suportados</h3>
                </div>
                <div class="card-content">
                    <p>Hydra suporta mais de 50 protocolos diferentes, incluindo HTTP, FTP, SSH, Telnet, SMTP, etc.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Paralelismo</h3>
                </div>
                <div class="card-content">
                    <p>O Hydra pode realizar múltiplas tentativas de login simultaneamente, acelerando o processo de força bruta.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-user-secret"></i>
                    </div>
                    <h3>Credenciais</h3>
                </div>
                <div class="card-content">
                    <p>Combinações de nome de usuário e senha que o Hydra tenta usar para obter acesso a um serviço.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3>Mensagem de Erro</h3>
                </div>
                <div class="card-content">
                    <p>Texto que identifica uma tentativa de login malsucedida, usado pelo Hydra para detectar falhas.</p>
                </div>
            </div>
        </div>
        
        <section class="section">
            <h2>Instalação do Hydra</h2>
            
            <ol>
                <li>No Debian/Ubuntu:
                    <div class="code">
                        sudo apt update<br>
                        sudo apt install hydra
                    </div>
                </li>
                <li>No Kali Linux (já vem pré-instalado):
                    <div class="code">
                        # Verificar instalação<br>
                        hydra
                    </div>
                </li>

            </ol>
        </section>
        
        <section class="section">
            <h2>Como Usar o Hydra</h2>
            
            <p>O Hydra é uma ferramenta de linha de comando que realiza ataques de força bruta contra serviços de rede. A sintaxe básica é:</p>
            
            <div class="code">
                hydra -l &lt;usuário&gt; -P &lt;wordlist&gt; &lt;protocolo&gt;://&lt;IP&gt;
            </div>
            
            <p>Para formulários web (HTTP POST), a sintaxe é mais complexa:</p>
            
            <div class="code">
                hydra -l &lt;usuário&gt; -P &lt;wordlist&gt; &lt;IP&gt; http-post-form "<br>  &lt;caminho&gt;:&lt;user e pass&gt;:&lt;mensagem de erro&gt;"
            </div>
            
            <h3>Exemplo:</h3>
            <div class="code">
                hydra -l admin -P /usr/share/wordlists/rockyou.txt 10.10.234.73<br>
                http-post-form "/admin/index.php:user=^USER^&pass=^PASS^:Username or password invalid"
            </div>
            
            <p>onde encontrar as informações:</p>
            <p>para o http-post-form, aí coloca o diretório que vc esta, aí no inspecionar em network, se vc for em request aparece como o arquivo foi tipo:</p>
            <img src="../img/hydra.png" alt="">
            <p>Então vc precisa usar isso na próxima parte usando tipo: user=^USER^, a parte em maiúsculo se mantem, mas a outra tem que ser de acordo com o que aparece na requisição do site. Aí depois só tem que colocara mensagem de erro que aparece quando o usuário ou senha é invalido, isso entre aspas.</p>
        </section>
        
        <section class="section">
            <h2>Parâmetros Comuns do Hydra</h2>
            
            <table>
                <tr>
                    <th>Parâmetro</th>
                    <th>Descrição</th>
                </tr>
                <tr>
                    <td><strong>-l</strong></td>
                    <td>Especifica um nome de usuário específico para o teste</td>
                </tr>
                <tr>
                    <td><strong>-L</strong></td>
                    <td>Especifica um arquivo com uma lista de usuários</td>
                </tr>
                <tr>
                    <td><strong>-p</strong></td>
                    <td>Especifica uma senha específica para o teste</td>
                </tr>
                <tr>
                    <td><strong>-P</strong></td>
                    <td>Especifica um arquivo com uma lista de senhas (wordlist)</td>
                </tr>
                <tr>
                    <td><strong>-s</strong></td>
                    <td>Especifica uma porta diferente da padrão do protocolo</td>
                </tr>
                <tr>
                    <td><strong>-t</strong></td>
                    <td>Define o número de tarefas paralelas (padrão: 16)</td>
                </tr>
                <tr>
                    <td><strong>-v / -V</strong></td>
                    <td>Modo verboso / muito verboso para mostrar mais detalhes</td>
                </tr>
                <tr>
                    <td><strong>-f</strong></td>
                    <td>Para de tentar quando encontra uma credencial válida</td>
                </tr>
                <tr>
                    <td><strong>-w</strong></td>
                    <td>Define o tempo de espera entre tentativas (em segundos)</td>
                </tr>
                <tr>
                    <td><strong>-u</strong></td>
                    <td>Faz loop em usuários, não em senhas (útil quando há bloqueio por tentativas)</td>
                </tr>
            </table>
        </section>
        
        <section class="section">
            <h2>Exemplos de Comandos</h2>
            
            <div class="code">
                # Ataque SSH com usuário específico e wordlist<br>
                hydra -l admin -P /usr/share/wordlists/rockyou.txt ssh://192.168.1.100<br><br>
                
                # Ataque FTP com lista de usuários e senha específica<br>
                hydra -L users.txt -p password123 ftp://192.168.1.100<br><br>
                
                # Ataque HTTP POST em formulário web<br>
                hydra -l admin -P passwords.txt 192.168.1.100<br>
                http-post-form "/login.php:username=^USER^&password=^PASS^:Invalid credentials"<br><br>
                
                # Ataque SMTP com verboSE<br>
                hydra -l user -P passlist.txt smtp://192.168.1.100 -V<br><br>
                
                # Ataque RDP com limite de tarefas paralelas<br>
                hydra -L users.txt -P passwords.txt rdp://192.168.1.100 -t 4
            </div>
        </section>
        
        <section class="section">
            <h2>Wordlists Comuns</h2>
            
            <p>O sucesso de um ataque de força bruta depende muito da qualidade da wordlist utilizada. Algumas wordlists populares:</p>
            
            <ul>
                <li><strong>rockyou.txt</strong> - Wordlist muito popular incluída no Kali Linux</li>
                <li><strong>SecLists</strong> - Coleção abrangente de listas de segurança</li>
                <li><strong>CeWL</strong> - Ferramenta para gerar wordlists personalizadas a partir de sites</li>
                <li><strong>Crunch</strong> - Gerador de wordlists personalizadas com padrões específicos</li>
            </ul>
            
            <div class="highlight">
                <p><strong>Dica:</strong> Sempre use wordlists apropriadas para o contexto do teste. Wordlists em idioma local ou específicas do alvo tendem a ser mais eficazes.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Considerações Éticas e Legais</h2>
            
            <ul>
                <li>O Hydra deve ser usado apenas em sistemas que você possui ou tem permissão explícita para testar</li>
                <li>Ataques de força bruta sem autorização são ilegais na maioria dos países</li>
                <li>Sempre obtenha autorização por escrito antes de realizar testes de penetração</li>
                <li>Esteja ciente de políticas de bloqueio de contas após múltiplas tentativas falhas</li>
                <li>Considere o impacto de seus testes na disponibilidade dos sistemas</li>
            </ul>
            
            <div class="highlight">
                <p>Conforme mencionado na saída do Hydra: "Please do not use in military or secret service organizations, or for illegal purposes."</p>
            </div>
        </section>
        
        <footer>
            <p>Material educativo para testes de penetração e segurança ofensiva | Hydra THC Tool</p>
        </footer>
    </div>
</body>
</html>