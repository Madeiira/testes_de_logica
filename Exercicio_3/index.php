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
    <h1 class="text-center">soma de todos os dígitos</h1>
    <form method="post" class="mt-4">
        <div class="form-group">
            <input type="text" name="number" class="form-control" placeholder="Digite um numero" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Somar digitos</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        // Certificando-se de que o número é maior que zero
        if ($number > 0) {
            $sum = 0;

            // Calculando a soma dos dígitos
   
        } else {
             echo 'Por favor, insira um número maior que zero.';
        }
        }
    ?
</div>

<?php include '../public/partials/footer.php'; ?>