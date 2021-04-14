<?php
include_once 'view/header.php';
?>

<body class="bg-light">

<div class="card" id="loginLayout">
    <h5 class="text-center mt-3 mb-3">ACESSE O SISTEMA</h5>
    <div class="card-body">
        <form>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" aria-describedby="emailHelp">
                <label for="floatingPassword">Senha</label>
                <div id="emailHelp" class="form-text"><a href="#"> Esqueci minha senha</a></div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 d-grid gap-2 col-6 mx-auto">Entrar</button>
        </form>
        <p class="mt-3">Ainda não tem cadastro? <a href="view/signup.php">Cadastre-se</a></p>
    </div>
</div>

<?php
include_once 'view/footer.php';
?>

