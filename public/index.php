<?php 
include ('../public/conexao.php');


if (isset($_POST['login']) || isset($_POST['senha'])){
    if(strlen($_POST['login'])==0){
        echo "Preencha seu login";
    }elseif(strlen($_POST['senha'])==0){
        echo "Preencha sua senha";
    }else{
        $login=$mysqli->real_escape_string(($_POST['login']));
        $senha=$mysqli->real_escape_string(($_POST['senha']));

        $sql_code="SELECT * FROM usuarios WHERE login='$login' AND senha ='$senha'";
        $sql_query= $mysqli->query ($sql_code) or die('Falha na execução do código SQL: '. $mysqli->error );

        $quantidade=$sql_query->num_rows;

        if($quantidade==1){
            $usuario=$sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id']=$usuario['id'];
            header('Location:../public/convite.php');

        }else{
            echo "Falha ao logar! E-mail ou senha incorretos";
        }



    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
 
   
    <header>        
        <h1>Festive</h1>        
        <p>Crie um convite digital para seu evento</p>
    </header> 
    <main>
        
    
            <div class="login-festa">
                <form action="login.php" method="post">
                    <fieldset> <legend>Festive</legend>
                    <label for="login">Login</label><br>
                    <input type="text" name="login" id="login" required><br>
                    <label for="senha">Senha</label><br>
                    <input type="password" name="senha" id="senha" required min="6"><br>
                    <p>Não esquecer senha</p>
                    <input class="enviar" type="submit" value="Enviar">
                    </fieldset>
                
                </form>
            </div>
    </main>
    <footer>
        <a href="https://github.com/RosaCL"><img src="../../public/img/costureza.png" alt=""></a>
    </footer>
</body>
</html>