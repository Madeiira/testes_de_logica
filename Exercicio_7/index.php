<!-- 
Exercício 7

Crie uma página em HTML e PHP ou JAVASCRIPT que receba dois valores inteiros (negativos e/ou positivos). 

Ao clicar em OK, uma função deverá retornar a soma de todos os números ENTRE os dois números digitados pelo usuário (incluindo os próprios números do usuário).

 ● Somente números inteiros serão testados.
 ● Se os dois números forem iguais, retorne qualquer um deles.
 ● Se o segundo número for menor que o primeiro, retorne 0
 
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