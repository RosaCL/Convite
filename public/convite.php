<?php 
if(!isset($_SESSION)){
    session_start();
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convite</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>        
        <h1>Festive</h1>        
        <p>Crie um convite digital para seu evento</p>
    </header>  
    <main>
        <fieldset><legend><h1>Crie seu convite</h1></legend>
        
        <div class="formula container">
            <form action="./respostaconvite.php" method="post" enctype="multipart/form-data">
                
                <h2><i class="fa-solid fa-calendar-days"></i> Sobre o evento</h2><br>         
                    <label for="evento">Título</label><br>
                    <input type="text" name="evento" id="evento" placeholder="Nome do Evento" required><br>
                    <label for="inicio">Início</label>
                    <input type="date" name="inicio" id="inicio">
                    <label for="fim">Fim</label>
                    <input type="date" name="fim" id="fim"><br>
                    <input type="checkbox" name="tipoevento" id="presencial" value="Presencial">
                    <label for="tipoevento"><i class="fa-solid fa-champagne-glasses"></i> Presencial</label>
                    <input type="checkbox" name="tipoevento" id="online" value="Online">
                    <label for="tipoevento"><i class="fa-solid fa-video"></i> Online</label><br><br>
                    <label for="descricao">Descrição</label><br>
                    <input type="text" name="descricao"  id="descricao">
        
                
    
                    <h3>Personalização <i class="fa-solid fa-wand-magic-sparkles" style="color: white;"></i></h3>
                    <h4>Tema do evento</h4>
                    <input type="radio" name="temaevento" id="aniversario" value="Aniversário">
                    <label for="temaevento">Aniversário</label>
                    <input type="radio" name="temaevento" id="infantil" value="Infantil">
                    <label for="infantil">Infantil</label>
                    <input type="radio" name="temaevento" id="formatura" value="Formatura">
                    <label for="temaevento">Formatura</label>
                    <input type="radio" name="temaevento" id="casamento" value="Casamento">
                    <label for="temaevento">Casamento</label><br>
                    <input type="radio" name="temaevento" id="baby" value="Chá de bebê">
                    <label for="temaevento">Chá de bebê</label>
                    <input type="radio" name="temaevento" id="panela" value="Chá de panela">
                    <label for="temaevento">Chá de panela</label>
                    <input type="radio" name="temaevento" id="carnaval" value="Carnaval">
                    <label for="temaevento">Carnaval</label>
                    <input type="radio" name="temaevento" id="pascoa" value="Páscoa">
                    <label for="temaevento">Páscoa</label><br>
                    <input type="radio" name="temaevento" id="saojoao" value="São João">
                    <label for="temaevento">São João</label>
                    <input type="radio" name="temaevento" id="halloween" value="Halloween">
                    <label for="temaevento">Halloween</label>
                    <input type="radio" name="temaevento" id="natal" value="Natal">
                    <label for="temaevento">Natal</label>
                    <input type="radio" name="temaevento" id="outro" value="Outro">
                    <label for="temaevento">Outro</label>                    
                    
                    <br>
                    <br>
                    <label for="imagem">Foto da capa <i class="fa-regular fa-image" style="color: white;"></i></label><br>
                    <input type="file" name="imagem" id="imagem" accept=".jpg,.jpeg,.png"><br>
    
        
                
                
    
                    <h3>Dados para contato</h3><br>
                    <label for="nome">Nome</label><br>
                    <input type="text" id="nome" name="nome" placeholder="Nome Completo" required><br>
                    <label for="email">E-mail</label><br>
                    <input type="email" name="email" id="email" placeholder="exemplo@email.com" required><br>
                    <label for="telefone">Telefone</label><br>
                    <input type="tel" name="telefone" id="telefone" placeholder="(99)99999-9999" min="12" required><br>
        
        
                <input type="checkbox" name="termos" id="termos" value="Aceito" required> <label for="termos"> Li e concordo com os <strong>Termos e Condições</strong> e com a <strong>Política de Privacidade</strong> </label>
                <br>
                <input type="checkbox" name="aceitoemail" id="aceitoemail" value="Aceito" > <label for="aceitoemail">Aceito receber atualizações e promoções por e-mail </label><br>
                <input type="checkbox" name="aceitosms" id="aceitosms" value="Aceito"> <label for="aceitosms"> Aceito receber atualizações e promoções por SMS </label><br>
                <input class="enviar" type="submit" value="Gerar convite">      
    
            </form>
        </div>
        </fieldset>
        

    </main>
    <footer>
        <a href="https://github.com/RosaCL"><img src="../../public/img/costureza.png" alt=""></a>
    </footer>
</body>
</html>