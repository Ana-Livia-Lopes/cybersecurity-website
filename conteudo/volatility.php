<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volatility - Análise Forense de Memória</title>
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
    <a href="../conteudo.php"><?php include('../seta.php'); ?></a>
    <div class="container">
        <header>
            <h1>VOLATILITY</h1>
            <p class="subtitle">Ferramenta de análise forense de memória RAM</p>
        </header>
        
        <section class="intro">
            <h2>O que é o Volatility?</h2>
            <p>O Volatility é uma ferramenta gratuita de análise forense de memória que forma uma estrutura para extrair artefatos digitais de amostras de memória RAM. A ferramenta é construída a partir de vários plugins trabalhando em conjunto para obter informações do dump de memória.</p>
            <p>Para começar a analisar um dump, você precisa primeiro identificar o tipo de imagem. A extração de um dump de memória pode ser realizada de diversas maneiras: FTK Imager, Linha Vermelha, Dumpit.exe, wins2dd.exe / wind4dd.exe, Memóriaze, FastDump.</p>
            <p>No Volatility 3, você precisa especificar o sistema operacional antes de especificar o plugin a ser usado, por exemplo: windows.info e linux.info.</p>
        </section>
        
        <h2>Conceitos Importantes</h2>
        <div class="cards-container">
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-memory"></i>
                    </div>
                    <h3>Dump de Memória</h3>
                </div>
                <div class="card-content">
                    <p>É uma cópia da RAM num determinado momento, usada para análise, investigação de problemas ou forense digital.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h3>Perfil (Profile)</h3>
                </div>
                <div class="card-content">
                    <p>Configuração que diz ao Volatility como entender a memória do sistema de onde veio a imagem, pois cada versão do Linux organiza a memória de um jeito diferente.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h3>DLL</h3>
                </div>
                <div class="card-content">
                    <p>Biblioteca de código que pode ser usada por múltiplos programas ao mesmo tempo, especialmente em sistemas Windows.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-list-ol"></i>
                    </div>
                    <h3>PID</h3>
                </div>
                <div class="card-content">
                    <p>ID de cada processo em execução no sistema operacional.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Offset</h3>
                </div>
                <div class="card-content">
                    <p>Endereço de deslocamento onde no processo o código foi colocado.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Heap</h3>
                </div>
                <div class="card-content">
                    <p>Região da memória onde programas armazenam dados temporários e dinâmicos enquanto estão em execução.</p>
                </div>
            </div>
        </div>
        
        <section class="section">
            <h2>Instalação do Volatility</h2>
            
            <ol>
                <li>Baixar o ZIP na VM: <a href="https://github.com/volatilityfoundation/volatility3/releases/tag/v1.0.1" target="_blank">https://github.com/volatilityfoundation/volatility3</a></li>
                <li>Extrair do ZIP: <code>unzip nomeDoArquivo.zip</code></li>
                <li>Entrar no diretório: <code>cd nomeDoArquivo</code></li>
                <li>Instalar dependências: 
                    <div class="code">
                        sudo apt update<br>
                        sudo apt install python3 python3-pip<br>
                        pip3 install yara-python capstone
                    </div>
                </li>
                <li>Verificar instalação: <code>python3 vol.py -h</code></li>
            </ol>
        </section>
        
        <section class="section">
            <h2>Plugins do Volatility</h2>
            
            <table>
                <tr>
                    <th>Plugin</th>
                    <th>Descrição</th>
                </tr>
                <tr>
                    <td><strong>ImageInfo</strong></td>
                    <td>Analisa o dump de memória e atribui uma lista dos melhores perfis de sistema operacional possíveis.</td>
                </tr>
                <tr>
                    <td><strong>windows.info, linux.info, mac.info</strong></td>
                    <td>Fornecem informações sobre o host a partir do despejo de memória.</td>
                </tr>
                <tr>
                    <td><strong>PsList</strong></td>
                    <td>Lista processos da lista duplamente encadeada que rastreia processos na memória (similar ao Gerenciador de Tarefas).</td>
                </tr>
                <tr>
                    <td><strong>PsScan</strong></td>
                    <td>Lista processos que correspondem a _EPROCESS (útil para detectar processos ocultos).</td>
                </tr>
                <tr>
                    <td><strong>PsTree</strong></td>
                    <td>Lista processos com base no ID do processo pai, mostrando relações hierárquicas.</td>
                </tr>
                <tr>
                    <td><strong>NetStat</strong></td>
                    <td>Identifica conexões de network presentes no momento da extração na máquina host.</td>
                </tr>
                <tr>
                    <td><strong>DllList</strong></td>
                    <td>Lista todas as DLLs associadas aos processos no momento da extração.</td>
                </tr>
                <tr>
                    <td><strong>Malfind</strong></td>
                    <td>Detecta injeção de código identificando processos com permissão executável mas sem arquivo mapeado.</td>
                </tr>
                <tr>
                    <td><strong>YaraScan</strong></td>
                    <td>Identifica malware buscando strings, padrões e regras compostas.</td>
                </tr>
                <tr>
                    <td><strong>SSDT</strong></td>
                    <td>Procura por hooking na Tabela de Descritores de Serviços do Sistema.</td>
                </tr>
                <tr>
                    <td><strong>Modules</strong></td>
                    <td>Exibe lista de módulos do kernel carregados (útil para identificar malware ativo).</td>
                </tr>
                <tr>
                    <td><strong>DriverScan</strong></td>
                    <td>Verifica drivers presentes no sistema (pode detectar drivers ocultos).</td>
                </tr>
                <tr>
                    <td><strong>Handles</strong></td>
                    <td>Lista todos os objetos abertos por processos no Windows (arquivos, mutexes, eventos, etc.).</td>
                </tr>
            </table>
        </section>
        
        <section class="section">
            <h2>Sintaxes dos Plugins</h2>
            
            <div class="code">
                # Windows.info<br>
                python3 vol.py -f &lt;file&gt; windows.info<br><br>
                
                # PsList<br>
                python3 vol.py -f &lt;file&gt; windows.pslist<br><br>
                
                # PsScan<br>
                python3 vol.py -f &lt;file&gt; windows.psscan<br><br>
                
                # PsTree<br>
                python3 vol.py -f &lt;file&gt; windows.pstree<br><br>
                
                # NetStat<br>
                python3 vol.py -f &lt;file&gt; windows.netstat<br><br>
                
                # DllList<br>
                python3 vol.py -f &lt;file&gt; windows.dlllist<br><br>
                
                # Malfind<br>
                python3 vol.py -f &lt;file&gt; windows.malfind<br><br>
                
                # YaraScan<br>
                python3 vol.py -f &lt;file&gt; windows.yarascan<br><br>
                
                # SSDT<br>
                python3 vol.py -f &lt;file&gt; windows.ssdt<br><br>
                
                # Modules<br>
                python3 vol.py -f &lt;file&gt; windows.modules<br><br>
                
                # DriverScan<br>
                python3 vol.py -f &lt;file&gt; windows.driverscan
            </div>
        </section>
        
        <section class="section">
            <h2>Exemplos de Comandos</h2>
            
            <div class="code">
                # Identificar informações do sistema<br>
                vol -f /Scenarios/investigations/investigation-1.vmem windows.info<br><br>
                
                # Listar processos<br>
                vol -f /Scenarios/investigations/investigation-1.vmem windows.psscan<br><br>
                
                # Mostrar árvore de processos<br>
                vol -f /Scenarios/investigations/investigation-1.vmem windows.pstree<br><br>
                
                # Criar dump de memória de um processo específico<br>
                vol -f /Scenarios/investigations/investigation-1.vmem windows.memmap.Memmap --pid 1640 -dump<br><br>
                
                # Buscar user-agent no dump<br>
                vol -f /Scenarios/investigations/investigation-1.vmem -o /tmp windows.memmap.Memmap --pid 1640 -dump<br>
                strings /tmp/pid.1640.dmp | grep -i "user-agent"<br><br>
                
                # Listar DLLs e filtrar<br>
                vol -f /Scenarios/investigations/investigation-2.raw windows.dlllist | grep "740"<br><br>
                
                # Executar a partir do diretório de instalação<br>
                cd /opt/volatility3<br>
                python3 vol.py -f /Scenarios/investigations/investigation-1.vmem windows.info
            </div>
        </section>
        
        <section class="section">
            <h2>Métodos de Evasão (Hooking)</h2>
            
            <ul>
                <li><strong>Ganchos SSDT</strong> - Hook na Tabela de Descritores de Serviços do Sistema</li>
                <li><strong>Ganchos IRP</strong> - Hook em Rotinas de Pacotes de Requisição de E/S</li>
                <li><strong>Ganchos IAT</strong> - Hook na Tabela de Endereços de Importação</li>
                <li><strong>Ganchos EAT</strong> - Hook na Tabela de Endereços de Exportação</li>
                <li><strong>Ganchos em Linha</strong> - Modificação direta do código da função</li>
            </ul>
        </section>
        
        <footer>
            <p>Material educativo para análise forense digital e investigação de segurança | Volatility Framework</p>
        </footer>
    </div>
</body>
</html>