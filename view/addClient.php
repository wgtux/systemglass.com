<?php
include_once 'header.php';
?>

<div class="container-fluid">
    <h5 class="text-center mt-3 mb-3">CADASTRO DE CLIENTES</h5>
    <form>
        <div class="row">
            <div class="form-floating mb-3 col-md-12">
                <input type="text" class="form-control" id="floatingName" name="name" placeholder="Nome">
                <label for="floatingName">Nome Completo</label>
            </div>

            <div class="form-floating mb-3 col-md-2">
                <input type="date" class="form-control" id="floatingInput" name="date" placeholder="Data">
                <label for="floatingInput">Data de Nacimento</label>
            </div>

            <div class="form-floating mb-3 col-md-2">
                <input type="tel" class="form-control" id="floatingPhone" name="phone" pattern="[0-9]{2}-[0-9]{9}" placeholder="Telefone">
                <label for="floatingPhone">Telefone</label>
            </div>

            <div class="form-floating mb-3 col-md-4">
                <input type="text" class="form-control" id="floatingInput" name="cpf" placeholder="CPF">
                <label for="floatingInput">CPF</label>
            </div>

            <div class="form-floating mb-4 col-md-4">
                <input type="text" class="form-control" id="floatingInput" name="rg" placeholder="RG">
                <label for="floatingInput">RG</label>
            </div>

            <div class="form-floating mb-3 col-md-2">
                <input type="text" class="form-control" id="floatingInput" name="cep" placeholder="CEP">
                <label for="floatingInput">CEP</label>
            </div>

            <div class="form-floating mb-3 col-md-4">
                <input type="text" class="form-control" id="floatingInput" name="address" placeholder="Endereço">
                <label for="floatingInput">Endereço</label>
            </div>

            <div class="form-floating mb-3 col-md-2">
                <input type="number" class="form-control" id="floatingInput" name="num" placeholder="Numero">
                <label for="floatingInput">Numero</label>
            </div>

            <div class="form-floating mb-3 col-md-2">
                <input type="text" class="form-control" id="floatingInput" name="bairro" placeholder="Bairro">
                <label for="floatingInput">Bairro</label>
            </div>

            <div class="form-floating mb-3 col-md-2">
                <input type="text" class="form-control" id="floatingInput" name="city" placeholder="Cidade">
                <label for="floatingInput">Cidade</label>
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-3 d-grid gap-2 col-2 mx-auto">Cadastrar</button>
    </form>
</div>

<?php
include_once 'footer.php';
?>
