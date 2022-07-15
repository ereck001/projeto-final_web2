<?php
    include '../model/cliente.class.php';
    
    $cliente = new cliente;

   
    
    $cliente ->setNome($_POST['nome']);
    $cliente ->setIdade($_POST['idade']);
    $cliente ->setSexo($_POST['sexo']);
    $cliente ->setHorario($_POST['horario']);
    $cliente ->setDia($_POST['dia']);

    $nome = $cliente ->getNome();
    $idade = $cliente ->getIdade();
    $sexo = $cliente ->getSexo();
    $horario = $cliente ->getHorario();
    $dia = $cliente ->getDia();
    
    try{
        $strcon = mysqli_connect('db','root','root','projphp') or die('Erro ao conectar ao banco de dados');        
        $sql = "INSERT INTO clientehora(nome,idade,sexo,horario,dia) VALUES ('{$nome}',{$idade}, '{$sexo}','{$horario}','{$dia}');"; 
         
        mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
        mysqli_close($strcon);


    }catch(Exception $e){ 
        echo"erro no banco!  ".$e;
    }

    

    echo "<h4>Nome:{$cliente->getNome()}</h4>".
    "<h4>Idade:{$cliente->getIdade()}</h4>".
    "<h4>Sexo:{$cliente->getSexo()}</h4>".
    "<h4>Horário:{$cliente->getHorario()}</h4>".
    "<h4>Horário:{$cliente->getDia()}</h4>";
    
?>