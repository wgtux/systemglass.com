<?php
include_once 'header.php';
?>

<div class="card" id="loginLayout">
    <h5 class="text-center mt-3 mb-3">CADASTRO DE NOVO USUARIO</h5>
    <div class="card-body">
        <form>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Seu nome">
                <label for="floatingInput">Nome Completo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3 d-grid gap-2 col-2 mx-auto">Cadastrar</button>
        </form>
    </div>
</div>

<?php
include_once 'footer.php';
?>

