<?php
include_once '../header.php';
?>

<div class="card" id="loginLayout">
    <h5 class="text-center mt-3 mb-3">CADASTRO DE NOVO USUARIO</h5>
    <div class="card-body">
        <form method="post" action="adduser.php">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingName" placeholder="Seu nome" name="name" required>
                <label for="floatingName">Nome Completo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="email" required>
                <label for="floatingEmail">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="password" required>
                <label for="floatingPassword">Senha</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="Senha" name="confirmPassword" required>
                <label for="floatingConfirmPassword">Confirma Senha</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3 d-grid gap-2 col-4 mx-auto">Cadastrar</button>
        </form>
    </div>
</div>

<?php
include_once 'footer.php';
?>

