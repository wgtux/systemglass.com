<?php
include_once 'header.php';

echo __DIR__;
?>

<h5 class="text-center mt-3 mb-3"><strong>Lista de Cliente</strong></h5>
<hr>
<div class="container-fluid mt-3 mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="text-center btn btn-success" href="addClient.php">Novo Cliente</a>
</div>

<div class="container-fluid">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Qtde</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
</div>

<?php
include_once 'footer.php';
?>
