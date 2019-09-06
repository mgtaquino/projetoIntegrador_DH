<?php
    require "inc/head.php";
    require "inc/nav.php";
?>

    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 style="color: #083b66;">Cadastre-se</h2>
                    <p>Já tem uma conta?&nbsp;<a href="login.php" style="color: #f2af58;">Fazer Login!</a></p>
                </div>
                <form>
                    <div class="form-group"><label for="name">Nome</label><input class="form-control item" type="text"
                            id="name" required=""></div>
                    <div class="form-group"><label for="password">Senha</label><input class="form-control item"
                            type="password" id="password" required=""></div>
                    <div class="form-group"><label for="email">E-mail</label><input class="form-control item"
                            type="email" id="email" required=""></div><button class="btn btn-primary btn-block"
                        type="submit" style="background-color: #083b66;border-color: #083b66;">Cadastrar</button>
                </form>
            </div>
        </section>
    </main>
    
    <?php
        require "inc/footer.php";
    ?>