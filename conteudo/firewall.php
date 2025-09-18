<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firewall - Tipos e Funcionamento</title>
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
        
        .table-example {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        .table-example th, .table-example td {
            border: 1px solid #115192;
            padding: 10px;
            text-align: center;
        }
        
        .table-example th {
            background-color: #115192;
            color: white;
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
    <div class="container">
        <header>
            <h1>FIREWALL</h1>
            <p class="subtitle">Tipos, funcionamento e componentes de regras</p>
        </header>
        
        <section class="intro">
            <h2>O que é um Firewall?</h2>
            <p>Um firewall é um dispositivo de segurança de rede que monitora e controla o tráfego de rede com base em regras de segurança predefinidas. Ele atua como uma barreira entre uma rede confiável e uma não confiável, normalmente entre uma rede interna e a Internet.</p>
        </section>
        
        <h2>Tipos de Firewall</h2>
        <div class="cards-container">
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-filter"></i>
                    </div>
                    <h3>Stateless Firewall</h3>
                </div>
                <div class="card-content">
                    <ul>
                        <li>Opera nas camadas 3 e 4 do modelo OSI</li>
                        <li>Filtragem básica</li>
                        <li>Sem rastro de conexões anteriores</li>
                        <li>Eficiente para redes de alta velocidade</li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <h3>Stateful Firewall</h3>
                </div>
                <div class="card-content">
                    <ul>
                        <li>Opera nas camadas 3 e 4 do modelo OSI</li>
                        <li>Reconhecer tráfego por padrões</li>
                        <li>Regras complexas podem ser aplicáveis</li>
                        <li>Monitorar as conexões de rede</li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Proxy Firewall</h3>
                </div>
                <div class="card-content">
                    <ul>
                        <li>Opera na camada 7 do modelo OSI</li>
                        <li>Inspecionar também os dados dentro dos pacotes</li>
                        <li>Fornece opções de filtragem de conteúdo</li>
                        <li>Fornece controle de aplicativos</li>
                        <li>Descriptografia e inspeciona pacotes de dados SSL/TLS</li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-chess-knight"></i>
                    </div>
                    <h3>Next-Generation Firewall (NGFW)</h3>
                </div>
                <div class="card-content">
                    <ul>
                        <li>Opera na camada 3 à camada 7 do modelo OSI</li>
                        <li>Tipo mais avançado de firewall</li>
                        <li>Oferece proteção avançada e inspeção profunda de pacotes</li>
                        <li>Vem com um sistema de prevenção de intrusão</li>
                        <li>Identifica anomalias com heurística, analisando os padrões de ataques e bloqueando-os</li>
                        <li>Descriptografia e inspeciona pacotes de dados SSL/TLS</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <section class="section">
            <h2>Componentes das Regras de Firewall</h2>
            
            <p>Os componentes básicos de uma regra de firewall são descritos abaixo:</p>
            
            <table>
                <tr>
                    <th>Componente</th>
                    <th>Descrição</th>
                </tr>
                <tr>
                    <td><strong>Endereço de origem</strong></td>
                    <td>Endereço IP da máquina que originaria o tráfego.</td>
                </tr>
                <tr>
                    <td><strong>Endereço de destino</strong></td>
                    <td>Endereço IP da máquina que receberá os dados.</td>
                </tr>
                <tr>
                    <td><strong>Porta</strong></td>
                    <td>O número da porta para o tráfego.</td>
                </tr>
                <tr>
                    <td><strong>Protocolo</strong></td>
                    <td>O protocolo que seria usado durante a comunicação.</td>
                </tr>
                <tr>
                    <td><strong>Ação</strong></td>
                    <td>Define a ação que seria tomada ao identificar qualquer tráfego dessa natureza específica.</td>
                </tr>
                <tr>
                    <td><strong>Direção</strong></td>
                    <td>Este campo define a aplicabilidade da regra ao tráfego de entrada ou saída.</td>
                </tr>
            </table>
        </section>
        
        <section class="section">
            <h2>Tipos de Ações</h2>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Allow (Permitir)</h3>
                </div>
                <div class="card-content">
                    <p>A ação "Permitir" de uma regra indica que o tráfego específico definido dentro da regra seria permitido. Por exemplo permitir o tráfego da porta 80.</p>
                    
                    <p>Exemplo:</p>
                    <table class="table-example">
                        <tr>
                            <th>Ação</th>
                            <th>Fonte</th>
                            <th>Destino</th>
                            <th>Protocolo</th>
                            <th>Porta</th>
                            <th>Modelo</th>
                        </tr>
                        <tr>
                            <td>Permitir</td>
                            <td>202.103.1.4</td>
                            <td>Qualquer</td>
                            <td>TCP</td>
                            <td>80</td>
                            <td>Stateful</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <h3>Deny (Negar)</h3>
                </div>
                <div class="card-content">
                    <p>A ação "Negar" de uma regra significa que o tráfego definido nela será bloqueado. Por exemplo negar todo tráfego da porta 22.</p>
                    
                    <p>Exemplo:</p>
                    <table class="table-example">
                        <tr>
                            <th>Ação</th>
                            <th>Fonte</th>
                            <th>Destino</th>
                            <th>Protocolo</th>
                            <th>Porta</th>
                        </tr>
                        <tr>
                            <td>Negar</td>
                            <td>Qualquer</td>
                            <td>Qualquer</td>
                            <td>TCP</td>
                            <td>22</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="card" style="margin-top: 20px;">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>Forward (Encaminhar)</h3>
                </div>
                <div class="card-content">
                    <p>A ação redireciona o tráfego para um segmento de rede diferente usando as regras de encaminhamento criadas nos firewalls. Por exemplo encaminha o tráfego da porta 80 para o servidor web 192.168.1.8.</p>
                    
                    <p>Exemplo:</p>
                    <table class="table-example">
                        <tr>
                            <th>Ação</th>
                            <th>Fonte</th>
                            <th>Destino Original</th>
                            <th>Destino Final</th>
                            <th>Porta</th>
                        </tr>
                        <tr>
                            <td>Encaminhar</td>
                            <td>Qualquer</td>
                            <td>IP Público</td>
                            <td>192.168.1.8</td>
                            <td>80</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Tipos de Regras</h2>
            
            <table>
                <tr>
                    <th>Tipo de Regra</th>
                    <th>Descrição</th>
                </tr>
                <tr>
                    <td><strong>Regras de entrada</strong></td>
                    <td>Controlam o tráfego que entra na rede a partir de fontes externas</td>
                </tr>
                <tr>
                    <td><strong>Regras de saída</strong></td>
                    <td>Controlam o tráfego que sai da rede para destinos externos</td>
                </tr>
                <tr>
                    <td><strong>Regras avançadas</strong></td>
                    <td>Regras complexas que podem combinar múltiplos critérios e condições</td>
                </tr>
            </table>
        </section>
        
        <section class="section">
            <h2>Tecnologias VPN</h2>
            
            <table>
                <tr>
                    <th>Tecnologia</th>
                    <th>Descrição</th>
                </tr>
                <tr>
                    <td><strong>PPP</strong></td>
                    <td>Essa tecnologia é usada pelo PPTP (explicado abaixo) para permitir autenticação e fornecer criptografia de dados. VPNs funcionam usando uma chave privada e um certificado público (semelhante ao SSH). A chave privada e o certificado devem ser compatíveis para que você possa se conectar.</td>
                </tr>
                <tr>
                    <td><strong>PPTP</strong></td>
                    <td>O Protocolo de Tunelamento Ponto a Ponto (PPTP) é a tecnologia que permite que os dados do PPP viajem e saiam de uma rede. O PPTP é muito fácil de configurar e é compatível com a maioria dos dispositivos. No entanto, sua criptografia é fraca em comparação com outras alternativas. Essa tecnologia não é capaz de sair de uma rede sozinha (não roteável).</td>
                </tr>
                <tr>
                    <td><strong>IPSec</strong></td>
                    <td>O Internet Protocol Security (IPsec) criptografa dados usando a estrutura existente do Internet Protocol (IP). O IPSec é difícil de configurar em comparação com alternativas; no entanto, se for bem-sucedido, ele oferece criptografia forte e também é suportado em muitos dispositivos.</td>
                </tr>
            </table>
        </section>
        
        <footer>
            <p>Material educativo sobre segurança de redes e tecnologias de firewall</p>
        </footer>
    </div>
</body>
</html>