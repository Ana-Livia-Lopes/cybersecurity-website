<header id="header">
        <div id="container">
            <a href="index.php" id="box-img"><img class= "logo" src="./img/logo.png" alt="logo"></li></a>
            <nav>
                <ul id="nav1">
                    <li><h3><a id="inicio" href="./index.php">início</a></h3></li>
                    <li><h3><a href="./CTF.php">CTF</a></h3></li>
                    <li><h3><a href="./conteudo.php">Conteudo</a></h3></li>
                    <li><h3><a href="./CISCO.php">CISCO</a></h3></li>
                </ul>
                <div id="user-div">
                <?php
                include 'conexao.php';
                session_start();
                
                if (isset($_SESSION['nome']) && $_SESSION['nome'] != '' && $_SESSION['tipo'] == 'Admin') {
                    echo "
                    <select id='user' onchange='redirecionar(this.value)'>
                        <option value='' id='opt-nome'>".$_SESSION['nome']."</option>
                        <option value='admin.php'>Admin</option>
                        <option value='logout.php'>Sair</option>
                    </select>";
                } elseif (isset($_SESSION['nome']) && $_SESSION['nome'] != '' && $_SESSION['tipo'] == 'Cliente') {
                    echo "
                    <select id='user' onchange='redirecionar(this.value)'>
                        <option value='' id='opt-nome'>".$_SESSION['nome']."</option>
                        <option value='logout.php'>Sair</option>
                    </select>";
                } else {
                    echo "<h3><a id='login' href='./login.php'>Entrar</a></h3>";
                }
                ?>

                <script>
                    function redirecionar(url) {
                        if (url) {
                            window.location.href = url;
                        }
                    }
                </script>
                </div>
                <input type="checkbox" id="checkbox">
                <label for="checkbox" id="botao">☰</label>
                <ul id="nav2">
                    <li><h3><a id="inicio" href="./index.php">início</a></h3></li>
                    <li><h3><a href="./CTF.php">CTF</a></h3></li>
                    <li><h3><a href="./conteudo.php">Conteudo</a></h3></li>
                    <li><h3><a href="./CISCO.php">CISCO</a></h3></li>
                </ul>
            </nav>
        </div>
    </header>

    <style>
        /* cabeçalho */
header {
    background-color: rgb(255, 255, 255);
    color: #0e3960;
    padding: 10px;
    text-align: center;
    position: sticky;
    top: 0;
    z-index: 50;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    transition: all 0.4s ease;
}

#header.ativo{
    top: -95px;
    opacity: 0;
}

#container {
    max-width: 1300px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
#box-img{
    width: 180px;
    height: 70px;
    display: flex;
    align-items: center;
}
.logo {
    width: 80px;
    float: left;
}
#nav1{
    margin-left: 8%;
    display: flex;
    justify-content: center;
}
#login{
    color: #0e3960;
    text-decoration: none;
    font-size: 17px;
    font-weight: 600;
    font-family: 'Plus Jakarta Sans', sans-serif;
    text-transform: uppercase;
}
#user-div{
    display: flex;
    align-items: center;
    list-style: none;
}
#user{
    background-color: rgba(255, 255, 255, 0);
    border: none;
    color: #0e3960;
    text-decoration: none;
    font-size: 17px;
    font-weight: bold;
    font-family: 'Plus Jakarta Sans', sans-serif;
    text-transform: uppercase;
    cursor: pointer;
    height: 30px;
    margin-top: 7px;
    align-self: center;
}
#opt-nome{
    display: none;
}
#opt-sair{
    background-color: rgb(255, 255, 255);
    font-weight: 600;
    cursor: pointer;
}
header nav {
    display: flex;
    flex-direction: row;
    flex-grow: 1;
    justify-content: space-between;
}

header nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

header nav ul li {
    padding: 10px;
}

header nav ul li a {
    color: #0e3960;
    text-decoration: none;
    font-size: 17px;
    font-weight: bold;
    font-family: 'Plus Jakarta Sans', sans-serif;
    text-transform: uppercase;
    margin: 0 3vw;
}

a{
    transition: color 0.3s;
}

a:hover{
    color:#297caf;
}


#checkbox{
    display: none;
}

#botao{
    display: none;
    font-size: 40px;
    color:#00304D;
    cursor: pointer;
    float: right;
    margin-right: 10%;
}

#nav2{ 
    display: none;
    position: absolute;
    background-color: rgba(216, 219, 220, 0.707);
    top: 70px;
    right: 0;
    width: 200px;
    z-index: 1; 
    border: solid 5px rgba(217, 217, 217, 0.886);
}
@media (max-width: 768px) {
    #nav1{
        display: none;
    }
    nav{
        justify-content:right;
    }
    #user-div{
        margin-right: 20px;
    }
    #opt-sair{
        font-size: 12px;
        width: 30px;
    }
    #botao{
        display: block;
    }
    #checkbox:checked + #botao + #nav2{
        display: block;
    }
    .logo{
        margin-left: 5%;
    }
    #footer {
        display: block;
        overflow-wrap: break-word;
        padding: 25px;
    }
    #footer h2{
        font-size: 24px;
    }
    #footer p{
        font-size: 13px;
    }
    .sobre {
        height: 180px;
    }
    .flex a{
        margin-top: 9px;
    }
    .flex p{
        margin-bottom: 30px;
    }
    .fa-solid{
        font-size: 55px;
    }
    #secao1{
        height: 75vh;
        
    }
    #secao1 h1{
        font-size: 43px;
        margin-top: 100px;
        padding-left: 35px;
    }
    #secao1 p{
        font-size: 17px;
        padding-left: 40px;
        margin-top: 20px;
    }

    
    .logo-container {
        position: relative;
        height: 20%;
        
        &:before {
          content:  "";
          position: absolute;
          left: 27%;
          width:    45%; 
          height:   4px;
          background-color: #6daacfff;
          transform-origin: center center;
          transform: scaleX(0);
          
          animation: line-animation 3s ease forwards; 
        }
        
        h1#page-logo {
          
          animation: clip-path-reveal-1 3s ease forwards; 
        }
      }
    @keyframes line-animation {
    0% { transform: scaleX(0); }
    15% { transform: scaleX(0); }
    15%, 20% { transform: scaleX(1.8); top: 0px; } 
    50% { transform: scaleX(1.8); top: calc(100% + 40px); } 
    70% { transform: scaleX(0.9); top: calc(100% + 40px); } 
    80%, 100% { transform: scaleX(0.9); top: calc(100% + 40px); }
    }

    @keyframes clip-path-reveal-1 {
    0%, 20% { clip-path: polygon(0 0, 100% 0, 100% 0, 0% 0); } 
    50%, 100% { clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%); } 
    }
    .logo-container {
        height: 11%;
    }
    #user{
        font-size: 10px;
    }

}

/* fim cabeçalho */
    </style>
