

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salão Marcos e Homero</title>
</head>
<body id="body" onload="trocarImg()">
    <!--<div id="marcarHorario">
        <form id='formulario' onclick="marcarH()" action="">
            
            
            <img src="img/logo_sem-fundo.png" id = 'logoCad' alt="logo">
            
            <section id = 'separador'>

                
                <form name="Cadastro" action="../controller/cliente.controller.php" method="POST">
                    <label>Nome: 
                        <input type="text" name="nome" size="30"><br>
                    </label>
                    <label>Idade:
                    <input type="number" name="idade" size="45"><br>
                    </label>
                    <label>Horário:
                        <input type="time" name="horario" size="45"><br>
                    </label> 
                    <label>Dia:
                        <input type="date" name="dia" size="45"><br>
                    </label> 
                    <label>Sexo:
                    <select name="sexo">
                    </label>    
                        <option value="">Masculino</option>
                        <option value="F">Feminino</option>                       
                    </select><br>
                    
                    <input type="submit" name="enviar" id="btn-submit" value="Enviar">
                </form>
            
            </section>
            
        </form>
       <button id = 'fecharHorario' onclick="fecharH()"><p>X</p></button>
    </div>-->
    <header>
        <figure id = "logo"></figure>
        <nav id="menu-principal">
            <a id="btn-fechar" href="#">
                <i class="fa fa-window-close" aria-hidden="true"></i>
            </a>
            
            <ul>
                <a href="#"><li>Home</li></a>
                <a href="#historia"><li>Quem Somos</li></a>
                <a href="#mapa"><li>Localização</li></a>
                <a href="view/clienteCadastro.php" ><li >Marcar horário</li></a><!--onclick="marcarH()"-->
                <a href="#redes-sociais"><li>Contato</li></a>                
            </ul>
        </nav>
        <button id="btn-menu" >
            <a href="#menu-principal">&#9776;</a>
        </button>        
        
    </header>
    <main>
        <figure id="apresentacao">
            <div id="imagem"></div>
            
        </figure>
        <section id="historia">
            <div>
                <figure id="foto-antiga">
                    <img src="img/old-pic.png" alt="foto-antiga" >
                </figure>
                <span id="texto-historia">
                    <h2>Quem Somos</h2>
                    <p>&nbsp;Inaugurado em 1989, o salão Marcos & Homero atende o público canoense baseado em dois principios: qualidade e bom atendimento. Reconhecido pelo ambiente familiar, atende até mesmo gerações, passando do avô ao neto. Além do serviço de barbearia e corte masculino, também atende ao público feminino, com uma variedade de especialidades, e o infantil.
                        &nbsp;Há mais de 30 anos prestando serviço para a comunidade local, os dois irmãos, Marcos e Homero, conquistaram os mais diversos públicos e seguem sendo referência em Canoas.</p>
                </span>
            </div>
        </section>
        <section id ="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4890.48243999221!2d-51.19418024527362!3d-29.91921616310163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6561fb7c674ec9b5!2sMarcos%20Cabeleireiro!5e0!3m2!1spt-BR!2sbr!4v1647284602732!5m2!1spt-BR!2sbr" width="350" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div id="mapa-texto">R. Saldanha da Gama, 368 - Harmonia, Canoas - RS, 92310-630 <br> Fone: (51)34725603</div>
        </section>

    </main>
    <footer>
        <nav id="redes-sociais">
            <ul>
                <a href="https://web.facebook.com/marcosehomerocabeleireiros" target="blank"><li><i class="fa fa-facebook" aria-hidden="true"></i></li></a>
                <a href="https://www.instagram.com/marcosehomerocabeleireiros/" target="blank"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
                <a href="mailto:ereck.c@yahoo.com"><li><i class="fa fa-envelope" aria-hidden="true"></i></li></a>                
            </ul>
        </nav>
    </footer>
    
</body>
<script src="js/script.js"></script>
</html>