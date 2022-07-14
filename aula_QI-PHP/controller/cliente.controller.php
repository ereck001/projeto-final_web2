<?php
    include '../model/cliente.class.php';
    
    $cliente = new cliente;

   
    
    $cliente ->setNome($_POST['nome']);
    $cliente ->setIdade($_POST['idade']);
    $cliente ->setSexo($_POST['sexo']);
    $cliente ->setHorario($_POST['horario']);
    $cliente ->setDia($_POST['dia']);
    
    try{
        $strcon = mysqli_connect('localhost','php_user','N803hj&o','projphp') or die('Erro ao conectar ao banco de dados');
        $sql = "INSERT INTO clientehora(nome,idade,sexo) VALUES ";
        $sql .= "('$cliente ->getNome', '$cliente ->getIdade', '$cliente ->getSexo')"; 
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