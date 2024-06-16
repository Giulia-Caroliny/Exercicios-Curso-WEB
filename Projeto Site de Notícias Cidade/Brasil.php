<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias Cidade</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body id="duas-colunas" class="brasil">
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
                <div class="caixa" id="sequencial">
                    <h4>Mundo</h4>
                    <div class="caixa-conteudo">
                        <ul>
                            <li>
                                <a href="">
                                    <img src="imagens/tecnologia.jpg" alt="">
                                    <p>
                                        <h5>NOVAS TECNOLOGIAS!</h5>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit...
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="imagens/cidade.jpg" alt="">
                                    <p>
                                        <h5>NOVAS TECNOLOGIAS!</h5>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit...
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="imagens/taxi.jpg" alt="">
                                    <p>
                                        <h5>NOVAS TECNOLOGIAS!</h5>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit...
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="imagens/tecnologia.jpg" alt="">
                                    <p>
                                        <h5>NOVAS TECNOLOGIAS!</h5>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit...
                                    </p>
                                </a>
                            </li>
                        </ul>
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
            <div class="conteudos">
                <div class="caixa" id="sequencial">
                    <h4>Notícias Recentes</h4>
                    <div class="caixa-conteudo">
                        <ul>
                            <li>
                                <a href="">
                                    <img src="imagens/tecnologia.jpg" alt="">
                                    <p>
                                        <h5>NOVAS TECNOLOGIAS!</h5>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit...
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="imagens/cidade.jpg" alt="">
                                    <p>
                                        <h5>NOVAS TECNOLOGIAS!</h5>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit...
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="imagens/taxi.jpg" alt="">
                                    <p>
                                        <h5>NOVAS TECNOLOGIAS!</h5>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit...
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="imagens/tecnologia.jpg" alt="">
                                    <p>
                                        <h5>NOVAS TECNOLOGIAS!</h5>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit...
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="lateral">
                <div class="caixa">
                    <h4>Entrevistas</h4>

                    <div class="caixa-conteudo">
                        <ul>
                            <?php
                                $entrevistados = array("José Almeida", "Felipe Silva", "Renato Rodrigues", "Abelardo Silveira", "André Carlos", "Márcio Mello", "João Pedro", "Fernando Weiss");
                                foreach ($entrevistados as $entrevistado) {
                                    echo "<li><a href=''>$entrevistado</a></li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="caixa">
                    <h4>News</h4>
                    <div class="caixa-conteudo">
                        <fieldset>
                            <legend>E-mail:</legend>
                            <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
                            <input type="submit" value="Cadastrar">
                        </fieldset>
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