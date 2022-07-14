<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastro</title>
    
</head>
<body>
    <div id="cad-box">
        <img src="../img/logo_sem-fundo.png" id = 'logoCad' alt="logo">
        <form name="Cadastro" action="../controller/cliente.controller.php" method="POST">
            <label>Nome: 
                <input type="text" id="nome" name="nome" size="30" required><br>
            </label>
            <label>Idade:
            <input type="number" name="idade" size="45" ><br>
            </label>
            <label>Horário:
                <input type="time" name="horario" size="45" required><br>
            </label> 
            <label>Dia:
                <input type="date" name="dia" size="45" required><br>
            </label> 
            <label>Sexo:
            <select name="sexo">
               
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>                       
            </select><br>
            </label> 
            <section id="campo-btn">
                <input type="submit" name="enviar" id="btn-submit" value="MARCAR" id="btn-submit">
            </section>
            
        </form>
    </div>
</body>
</html>