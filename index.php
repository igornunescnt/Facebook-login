<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - facebook</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div>
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone:</p>
                    <input type="email" name="email">
                </div>
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password" name="password">
                </div>
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar">
                </div>

            </form>
            <div class="clear"></div>
        </div>
    </header>

    <section class="main">
        <div class="center">

            <div class="img-pessoas">
                <img src="images/pessoas.png" alt="">
            </div>

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será.</h3>
                <form class="form-cadastro">
                
                    <div class="w50">
                        <input type="text" placeholder="Nome">
                    </div>

                    <div class="w50">
                        <input type="text" placeholder="Sobrenome">
                    </div>

                    <div class="w100">
                        <input type="email" placeholder="informe seu email">
                    </div>

                    <div class="w100">
                        <input type="password" placeholder="Senha">
                    </div>
                    <div class="w100">
                        <h2>Data de nscimento</h2>
                        <select class="nascimento" name="nascimento-dia">
                            <?php 
                                for($i = 1; $i <=31; $i++){
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select class="nascimento" name="nascimento-mes">
                            <option value="0">Setembro</option>
                        </select>
                        <select class="nascimento" name="nascimento-ano">
                            <?php for($i = 1990; $i <=2024; $i++){ ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div>
                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div><!--input-radio -->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastre-se">
                    </div>
                    <div class="clear"></div>
                </form> <!-- Form cadastro -->
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <footer>
        <div class="center">
            <div class="footer-links">
                <ul>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                    <li>
                        <a href="#">Portuquese</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>