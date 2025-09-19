<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linux Agency - Walkthrough</title>
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
        
        .flag {
            background-color: #f0fff0;
            border: 1px solid #3cb371;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
            font-family: monospace;
            font-weight: bold;
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
            <h1>LINUX AGENCY</h1>
            <p class="subtitle">Desafio de Fundamentos do Linux e Escalonamento de Privilégios</p>
        </header>
        
        <section class="intro">
            <h2>Instruções do Desafio</h2>
            <p>Cada bandeira encontrada servirá como senha para o próximo usuário. A bandeira inclui o nome de usuário do próximo usuário que participar deste desafio. O formato da bandeira:</p>
            
            <div class="highlight">
                <strong>Formato:</strong> <code>username[md5sum]</code>
            </div>
            
            <p>A ordem dos usuários: <code>agent47 → mission1 → mission30</code> fará parte da Tarefa 3: Fundamentos do Linux.</p>
            <p>Depois dessas missões, os próximos níveis serão na Tarefa 4: Escalonamento de Privilégios.</p>
        </section>
        
        <section class="section">
            <h2>Conexão Inicial</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">1</div>
                    <h3>Conectando ao Servidor</h3>
                </div>
                <p>Primeiro, conecte-se ao servidor via SSH usando as credenciais fornecidas:</p>
                
                <div class="code">
                    ssh agent47@10.201.44.52
                </div>
                
                <div class="highlight">
                    <strong>Resultado da conexão:</strong>
                    <p>Welcome to Ubuntu 18.04 LTS (GNU/Linux 4.15.0-20-generic x86_64)</p>
                    <p>mission1[174dc8fi9ibcbb16ifc25f8a5b58df0]</p>
                </div>
                
                <p>Após o login, a primeira flag é exibida, contendo a senha para o próximo usuário (mission1).</p>
            </div>
        </section>
        
        <section class="section">
            <h2>Tarefa 3: Fundamentos do Linux</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">2</div>
                    <h3>Primeira Flag - mission1</h3>
                </div>
                <p>Após conectar como agent47, a flag é exibida imediatamente:</p>
                
                <div class="flag">
                    mission1[174dc8fi9ibcbb16ifc25f8a5b58df0]
                </div>
                
                <p>Use esta flag como senha para fazer login como mission1:</p>
                
                <div class="code">
                    su mission1
                    Password: mission1[174dc8fi9ibcbb16ifc25f8a5b58df0]
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">3</div>
                    <h3>Segunda Flag - mission2</h3>
                </div>
                <p>Como mission1, navegue até o diretório home e encontre a flag:</p>
                
                <div class="code">
                    cd ~ <br>
                    ls <br>
                    cat flag.txt <br>
                </div>
                
                <div class="flag">
                    mission2{8a1b68bb11e4a35245061656b5b9fa0d}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission2:</p>
                
                <div class="code">
                    su mission2
                    Password: mission2{8a1b68bb11e4a35245061656b5b9fa0d}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">4</div>
                    <h3>Terceira Flag - mission3</h3>
                </div>
                <p>Como mission2, navegue até o diretório home e encontre a flag:</p>
                
                <div class="code">
                    cd ~<br>
                    ls<br>
                    cat flag.txt<br>
                </div>
                
                <div class="flag">
                    mission3{ab1elae5cba688340825103f70b0f976}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission3:</p>
                
                <div class="code">
                    su mission3
                    Password: mission3{ab1elae5cba688340825103f70b0f976}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">5</div>
                    <h3>Quarta Flag - mission4</h3>
                </div>
                <p>Como mission3, a flag está oculta no arquivo flag.txt. Use o parâmetro -v para visualizar caracteres não imprimíveis:</p>
                
                <div class="code">
                    cat -v flag.txt
                </div>
                
                <div class="flag">
                    mission4{264a7eeb920f80b3ee9665fafb7ff92d}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission4:</p>
                
                <div class="code">
                    su mission4
                    Password: mission4{264a7eeb920f80b3ee9665fafb7ff92d}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">6</div>
                    <h3>Quinta Flag - mission5</h3>
                </div>
                <p>Como mission4, navegue até o diretório flag e encontre a flag:</p>
                
                <div class="code">
                    cd flag <br>
                    ls<br>
                    cat flag.txt<br>
                </div>
                
                <div class="flag">
                    mission5{bc67906710c3a376bcc7bd25978f62c0}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission5:</p>
                
                <div class="code">
                    su mission5
                    Password: mission5{bc67906710c3a376bcc7bd25978f62c0}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">7</div>
                    <h3>Sexta Flag - mission6</h3>
                </div>
                <p>Como mission5, a flag está em um arquivo oculto:</p>
                
                <div class="code">
                    ls -la<br>
                    cat .flag.txt<br>
                </div>
                
                <div class="flag">
                    mission6{lfa67eladc244b5c6ea71lf0c9675fde}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission6:</p>
                
                <div class="code">
                    su mission6
                    Password: mission6{lfa67eladc244b5c6ea71lf0c9675fde}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">8</div>
                    <h3>Sétima Flag - mission7</h3>
                </div>
                <p>Como mission6, a flag está em um diretório oculto:</p>
                
                <div class="code">
                    ls -la<br>
                    cd .flag<br>
                    cat flag.txt<br>
                </div>
                
                <div class="flag">
                    mission7{53fd6b2bad6e85519c7403267225def5}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission7:</p>
                
                <div class="code">
                    su mission7
                    Password: mission7{53fd6b2bad6e85519c7403267225def5}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">9</div>
                    <h3>Oitava Flag - mission8</h3>
                </div>
                <p>Como mission7, navegue até o diretório home do mission7 e encontre a flag:</p>
                
                <div class="code">
                    cd /home/mission7<br>
                    cat flag.txt
                </div>
                
                <div class="flag">
                    mission8{3bee256bdaf7fe74c0a902f5a1d10577b}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission8:</p>
                
                <div class="code">
                    su mission8
                    Password: mission8{3bee256bdaf7fe74c0a902f5a1d10577b}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">10</div>
                    <h3>Nona Flag - mission9</h3>
                </div>
                <p>Como mission8, encontre a flag no arquivo flag.txt na raiz do sistema:</p>
                
                <div class="code">
                    cat /flag.txt
                </div>
                
                <div class="flag">
                    mission9{ba1069363d182e1c114bef7521c898f5}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission9:</p>
                
                <div class="code">
                    su mission9
                    Password: mission9{ba1069363d182e1c114bef7521c898f5}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">11</div>
                    <h3>Décima Flag - mission10</h3>
                </div>
                <p>Como mission9, use o arquivo rockyou.txt para encontrar a flag:</p>
                
                <div class="code">
                    grep mission10 rockyou.txt
                </div>
                
                <div class="flag">
                    mission10{0c9d1c7c5683a1a29b05bb67856524b6}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission10:</p>
                
                <div class="code">
                    su mission10
                    Password: mission10{0c9d1c7c5683a1a29b05bb67856524b6}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">12</div>
                    <h3>Décima Primeira Flag - mission11</h3>
                </div>
                <p>Como mission10, use o comando grep para procurar a flag em um diretório:</p>
                
                <div class="code">
                    grep -r mission11 folder
                </div>
                
                <div class="flag">
                    mission11{db074d9b68f06246944b991d433180c0}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission11:</p>
                
                <div class="code">
                    su mission11
                    Password: mission11{db074d9b68f06246944b991d433180c0}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">13</div>
                    <h3>Décima Segunda Flag - mission12</h3>
                </div>
                <p>Como mission11, a flag está em uma variável de ambiente:</p>
                
                <div class="code">
                    env | grep mission
                </div>
                
                <div class="flag">
                    mission12{f449a1d33d6edc327354635967f9a720}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission12:</p>
                
                <div class="code">
                    su mission12
                    Password: mission12{f449a1d33d6edc327354635967f9a720}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">14</div>
                    <h3>Décima Terceira Flag - mission13</h3>
                </div>
                <p>Como mission12, é necessário alterar as permissões do arquivo flag.txt antes de visualizá-lo:</p>
                
                <div class="code">
                    chmod 777 flag.txt<br>
                    cat flag.txt
                </div>
                
                <div class="flag">
                    mission13{076124e360406b4c98ecefddd13ddbf}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission13:</p>
                
                <div class="code">
                    su mission13
                    Password: mission13{076124e360406b4c98ecefddd13ddbf}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">15</div>
                    <h3>Décima Quarta Flag - mission14</h3>
                </div>
                <p>Como mission13, a flag está codificada em base64:</p>
                
                <div class="code">
                    cat flag.txt<br>
                    echo "bwlzc21vbjE0e2010ThkZTkINjWSNTE0YjkSNDE1NDc2MTdiOWU1NGQyfQo=" | base64 -d
                </div>
                
                <div class="flag">
                    mission14{d598de95639514b994J50761709e54d2}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission14:</p>
                
                <div class="code">
                    su mission14
                    Password: mission14{d598de95639514b994J50761709e54d2}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">16</div>
                    <h3>Décima Quinta Flag - mission15</h3>
                </div>
                <p>Como mission14, a flag está em formato hexadecimal:</p>
                
                <div class="code">
                    cat flag.txt | xxd -r -p
                </div>
                
                <div class="flag">
                    mission15{fc4915d818bfaeff01185c3547f25596}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission15:</p>
                
                <div class="code">
                    su mission15
                    Password: mission15{fc4915d818bfaeff01185c3547f25596}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">17</div>
                    <h3>Décima Sexta Flag - mission16</h3>
                </div>
                <p>Como mission15, a flag está em formato hexadecimal que precisa ser convertido:</p>
                
                <div class="code">
                    cat flag.txt | xxd -r -p
                </div>
                
                <div class="flag">
                    mission16{884417d40033c4c2091b44d7c26a908e}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission16:</p>
                
                <div class="code">
                    su mission16
                    Password: mission16{884417d40033c4c2091b44d7c26a908e}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">18</div>
                    <h3>Décima Sétima Flag - mission17</h3>
                </div>
                <p>Como mission16, execute o arquivo flag para obter a próxima flag:</p>
                
                <div class="code">
                    chmod 777 flag<br>
                    ./flag
                </div>
                
                <div class="flag">
                    mission17{49f8d1348a1053e221dfe7ff99f5cbf4}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission17:</p>
                
                <div class="code">
                    su mission17
                    Password: mission17{49f8d1348a1053e221dfe7ff99f5cbf4}
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Tarefa 4: Escalonamento de Privilégios</h2>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">19</div>
                    <h3>Décima Oitava Flag - mission18</h3>
                </div>
                <p>Como mission17, continue explorando o sistema para encontrar as flags restantes:</p>
                
                <div class="flag">
                    mission18{f09760649986b489cda320ab5f7917e8}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission18:</p>
                
                <div class="code">
                    su mission18
                    Password: mission18{f09760649986b489cda320ab5f7917e8}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">20</div>
                    <h3>Décima Nona Flag - mission19</h3>
                </div>
                <p>Como mission18, continue explorando o sistema para encontrar as flags restantes:</p>
                
                <div class="flag">
                    mission19{a0bf41f56b3ac622d808f7a4385254b7}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission19:</p>
                
                <div class="code">
                    su mission19
                    Password: mission19{a0bf41f56b3ac622d808f7a4385254b7}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">21</div>
                    <h3>Vigésima Flag - mission20</h3>
                </div>
                <p>Como mission19, compile e execute o arquivo C para obter a flag:</p>
                
                <div class="code">
                    gcc flag.c<br>
                    ./a.out
                </div>
                
                <div class="flag">
                    mission20{b0482f9e90c8ad2421bf4353cd8eaefc}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission20:</p>
                
                <div class="code">
                    su mission20
                    Password: mission20{b0482f9e90c8ad2421bf4353cd8eaefc}
                </div>
            </div>
            
            <div class="step">
                <div class="step-header">
                    <div class="step-number">22</div>
                    <h3>Vigésima Primeira Flag - mission21</h3>
                </div>
                <p>Como mission20, execute o script Python para obter a flag:</p>
                
                <div class="code">
                    python flag.py
                </div>
                
                <div class="flag">
                    mission21{7de756aabc528b446f6eb38419318f0c}
                </div>
                
                <p>Use esta flag como senha para fazer login como mission21 e continuar o desafio:</p>
                
                <div class="code">
                    su mission21
                    Password: mission21{7de756aabc528b446f6eb38419318f0c}
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Resumo do Desafio</h2>
            
            <div class="cards-container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-terminal"></i>
                        </div>
                        <h3>Fundamentos do Linux</h3>
                    </div>
                    <div class="card-content">
                        <p>O desafio testa conhecimentos básicos e avançados de comandos Linux, manipulação de arquivos, permissões e resolução de problemas.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-key"></i>
                        </div>
                        <h3>Formato das Flags</h3>
                    </div>
                    <div class="card-content">
                        <p>Cada flag segue o padrão username[hash] e serve como senha para o próximo usuário na sequência do desafio.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-user-secret"></i>
                        </div>
                        <h3>Escalonamento de Privilégios</h3>
                    </div>
                    <div class="card-content">
                        <p>A segunda parte do desafio foca em técnicas de escalonamento de privilégios, explorando vulnerabilidades e configurandoções incorretas.</p>
                    </div>
                </div>
            </div>
            
            <div class="highlight">
                <strong>Nota:</strong> Este é um desafio progressivo onde cada flag encontrada leva à próxima etapa. As técnicas utilizadas incluem manipulação de arquivos, decoding, execução de binários e exploração de permissões.
            </div>
        </section>
        
        <footer>
            <p>Linux Agency - Desafio de Linux e Escalonamento de Privilégios</p>
        </footer>
    </div>
</body>
</html>