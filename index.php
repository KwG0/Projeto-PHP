
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Inscrição</title>
</head>
<style>
    .container {
        color: peachpuff;
        display: flex;
        flex-direction: initial;
        justify-content: space-around;
        padding: 50px 70px 60px;
        background-color: white;
    }
    h3 {
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    .forms{
        background-color: white;
        padding: 10px;
        border: 3px solid whitesmoke;
        border-style: dotted;
        font-family: Arial, Helvetica, sans-serif;
    }
    .btt{
        border:none;
        background-color: lightskyblue;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        align-items: center;
    }
    .resultado {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 3px solid whitesmoke;
        border-style: dashed;
        padding: 20px;
        color: peachpuff;
        text-decoration: underline whitesmoke;
        font-weight: bolder;
        font-family: Arial, Helvetica, sans-serif;
    }

</style>
<body>
    <div class="container">
        <h3>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</h3>
        <div class="forms">
            <form action="script.php" method="post" class="inputs">
                <p>Seu Nome: <input type="text" name="nome"/></p>
                <p>Sua Idade: <input type="text" name="idade"/></p>
                <input type="submit" value="Enviar dados" class="btt"/>
                <?php
                    $mensagemDeErro = obterMensagemdeErro();
                        if(!empty($mensagemDeErro)) {
                            print $mensagemDeErro;
                        }
                ?>
            </form>
        </div>
    </div>
    <div class="resultado">
        <?php
            $mensagemDeSucesso = obterMensagemdeSucesso();
            if(!empty($mensagemDeSucesso)) {
                print $mensagemDeSucesso;
            }
        ?>
    </div>
</body>
</html> 