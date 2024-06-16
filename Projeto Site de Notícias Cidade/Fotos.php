<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias Cidade</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body id="uma-coluna" class="fotos">
    <div id="container">
        <div id="cabecalho">
            <h1 class="logo">Notícias Cidade </h1>
            <ul>
                <li class="primeiro">
                    <a id="home" href="index.php">Home</a>
                </li>
                <?php
                    $menu = array("Brasil", "Internacional", "Economia", "Saúde", "Ciência", "Fotos");
                    foreach ($menu as $opcao) {
                        echo "<li><a id='$opcao' href='$opcao.php'>$opcao</a></li>";
                    }
                ?>
            </ul>
        </div>
        <div id="conteudo">
            <div class="conteudos">
                <div class="caixa" id="ampliado">
                    <h4>Destaque</h4>
                    <div class="caixa-conteudo">
                        <h5>Nova legislação</h5>
                        <img src="imagens/taxi.jpg" alt="taxi">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <a href="">Leia mais!</a>
                    </div>
                </div>
            </div>
            <div class="conteudos">
                <div class="caixa" id="ampliado">
                    <h4>Última Entrevista</h4>
                    <div class="caixa-conteudo">
                        <h5>Entrevista com Felipe Silva</h5>
                        <img src="imagens/doutor.jpg" alt="doutor">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <a href="">Leia mais!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rodape">
        <span>&copy; Copyright 2000-2018 Notícias cidade</span>
    </div>
</body>

</html>