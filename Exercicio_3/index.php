<!-- 
Exercício 3

Crie uma página em HTML e PHP ou JAVASCRIPT que receba um valor numérico maior do que zero e retorne a soma de todos os dígitos.

● 4132 = 10
● 79231 = 22
● 27454 = 22
● 6472529 = 35

-->

<?php include '../public/partials/header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center"></h1>
    <form method="post" class="mt-4">
        <div class="form-group">
            <input type="text" name="" class="form-control" placeholder="" required>

        </div>
        <button type="submit" class="btn btn-primary btn-block"></button>
    </form>
</div>

<?php include '../public/partials/footer.php'; ?>