<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo A Curso CISCO</title>
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
            color: #7ec699;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        
        .description {
            color: #ccc;
            margin-bottom: 15px;
            padding-left: 10px;
            border-left: 2px solid #115192;
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
    <a href="./index.php"><?php include('seta.php'); ?></a>
    <div class="container">
        <header>
            <h1>MODULO A CURSO CISCO</h1>
            <p class="subtitle">Comandos e configurações básicas de dispositivos Cisco</p>
        </header>
        
        <section class="intro">
            <h2>Comandos Básicos</h2>
            <div class="code">
                <span class="command">enable</span>
                <span class="description">Entra no modo privilegiado</span>
                
                <span class="command">disable</span>
                <span class="description">sai do modo privilegiado</span>
                
                <span class="command">configure terminal</span>
                <span class="description">Entra no modo de configuração do terminal</span>
                
                <span class="command">exit</span>
                <span class="description">sai do modo de configuração de terminal</span>
                
                <span class="command">show ip interface brief</span>
                <span class="description">Lista todas as interfaces, mostrando status e protocolo</span>
                
                <span class="command">interface range ethernet 0/0 - 5</span>
                <span class="description">Seleciona um conjunto de interfaces de rede (o ethernet muda de acordo com a interface)</span>
                
                <span class="command">shutdown</span>
                <span class="description">Desativa as interfaces selecionadas</span>
                
                <span class="command">exit</span>
                <span class="description">Sai da configuração da interface e volta ao modo normal</span>
                
                <span class="command">write memory</span>
                <span class="description">Salva a configuração</span>
                
                <span class="command">hostname nome-exemplo-1</span>
                <span class="description">seleciona o host depois de configure terminal</span>
                
                <span class="command">interface vlan 1</span>
                <span class="description">modo de subconfiguração da interface da VLAN 1</span>
                
                <span class="command">line vty 0 15</span>
                <span class="description">modo de subconfiguração de linha VTY</span>
                
                <span class="command">?</span>
                <span class="description">ao digitar um comando vc pode colocar um espaço e uma interrogação para que o terminal te recomentes as opções de comandos seguintes</span>
                
                <span class="command">Control+ Shift + 6</span>
                <span class="description">para a execução do comando</span>
            </div>
        </section>
        
        <section class="section">
            <h2>Configuração de Linha de Console</h2>
            
            <div class="code">
                <span class="command">line console 0</span>
                <span class="description">Entra no modo de configuração da linha de console (porta física usada para acessar o switch/roteador localmente com cabo console), O zero é usado para representar a primeira interface de console</span>
                
                <span class="command">password cisco</span>
                <span class="description">Define a senha que será exigida ao acessar. Nesse caso, a senha é cisco.</span>
                
                <span class="command">login</span>
                <span class="description">Ativa o uso da senha. Sem esse comando, uma senha definida não teria efeito.</span>
                
                <span class="command">enable secret class</span>
                <span class="description">define a senha "class" para entrar no modo privilegiado do dispositivo Cisco de forma segura.</span>
                
                <span class="command">service password-encryption</span>
                <span class="description">criptografa todas as senhas de texto simples</span>
                
                <span class="command">show running-config</span>
                <span class="description">verifica se as senhas estão criptografadas e mostra o hash</span>
                
                <span class="command">banner mstd #Authorized Access Only#</span>
                <span class="description">banner ao acessar dispositivo</span>
            </div>
        </section>
        
        <section class="section">
            <h2>Teclas de Atalho</h2>
            
            <table>
                <tr>
                    <th>Tecla de atalho</th>
                    <th>Descrição</th>
                </tr>
                <tr>
                    <td><strong>Tab</strong></td>
                    <td>Completa um nome de comando parcialmente digitado</td>
                </tr>
                <tr>
                    <td><strong>Ctrl+K</strong></td>
                    <td>Apaga todos os caracteres do cursor até o final da linha de comando.</td>
                </tr>
                <tr>
                    <td><strong>Esc D</strong></td>
                    <td>Apaga todos os caracteres do cursor até o final da palavra.</td>
                </tr>
                <tr>
                    <td><strong>Ctrl+A</strong></td>
                    <td>Move o cursor para o início da linha.</td>
                </tr>
                <tr>
                    <td><strong>Ctrl+E</strong></td>
                    <td>Move o cursor para o final da linha de comando.</td>
                </tr>
                <tr>
                    <td><strong>Seta para cima ou Ctrl+P</strong></td>
                    <td>Recupera os comandos no buffer do histórico, começando com o mais comandos recentes.</td>
                </tr>
            </table>
        </section>
        
        <section class="section">
            <h2>Configurar Senhas</h2>
            
            <div class="code">
                <span class="command"># configurar senhas</span>
                <br>
                <span class="command">Sw-Floor-1# configure terminal</span>
                <span class="command">Sw-Floor-1(config)# line console 0</span>
                <span class="command">Sw-Floor-1(config-line)# password cisco</span>
                <span class="command">Sw-Floor-1(config-line)# login</span>
                <span class="command">Sw-Floor-1(config-line)# end</span>
                <span class="command">Sw-Floor-1#</span>
                <br>
                <span class="description">Enter no modo de configuração global</span>
                <br>
                <span class="command">Soltz-te configurar terminal</span>
                <span class="description">Nombre o switch "Sw-Floor-1"</span>
                <br>
                <span class="command">Soltz-txConfig # Instituem Sw-Floor-1</span>
                <span class="description">Instituo o sistema ao modo EXEC do usuário memório iter-comedio e, utilizando a senha clara, habilitando o login e informando ao modo de configuração global usando out.</span>
                <br>
                <span class="command">Sw-Floor-1(config)# line console 0</span>
                <span class="command">Sw-Floor-1(config-line)# password cisco</span>
                <span class="command">Sw-Floor-1(config-line)# login</span>
                <span class="command">Sw-Floor-1(config-line)# exit</span>
                <br>
                <span class="description">Acesso privilegiado ao modo EXEC seguro usando a senha clara.</span>
                <br>
                <span class="command">Sw-Floor-1(config)# enable secret class</span>
                <br>
                <span class="description">Proígio as linhas VTY de 0 a 15, sinhua a senha clara, habilite o login e volte ao modo de configuração global usando out.</span>
                <br>
                <span class="command">Sw-Floor-1(config)# line vp 0 x5</span>
                <span class="command">Sw-Floor-1(config-line)# password cisco</span>
                <span class="command">Sw-Floor-1(config-line)# login</span>
                <span class="command">Sw-Floor-1(config-line)# exit</span>
                <br>
                <span class="description">Ortografia todas as senhas em título simples.</span>
                <br>
                <span class="command">Sw-Floor-1(config)# servidor password-over.prision</span>
                <span class="description">Obs uma mensagem de banner usando o símbolo "#" como definidade: O banner deve estar exatamente. Apenas apenas autorizado.</span>
                <br>
                <span class="command">Sw-Floor-1(config)# banner está a Apenas aversos autorizada #</span>
                <span class="description">Você concluiu com êxito os requisitos básicos para aceitar o proteger um dispositivo.</span>
            </div>
        </section>
        
        <section class="section">
            <h2>Certificação Digital</h2>
            
            <div class="code">
                <span class="description">a root CA é o ponto de confiança máximo na sua rede. Ela garante que todos os outros pontos de emissão de certificados (as CAs subordinadas) são legítimos, e por consequência, tudo o que eles certificam também é legítimo. É a base da segurança e da identidade digital.</span>
            </div>
        </section>
        
        <footer>
            <p>Material educativo para administração de dispositivos de rede Cisco | Módulo A Curso CISCO</p>
        </footer>
    </div>
</body>
</html>