<!-- 
Exercício 5

Crie uma página em HTML e PHP ou JAVASCRIPT que receba um valor de uma string e verifique se ela é um palíndromo. 

Retornar a frase em vermelho caso a palavra e/ou frase não for um palíndromo.

Caso contrário, retornar a frase em azul

 ● aibofobia - É um palíndromo
 ● omissíssimos - Não é um palíndromo
 ● Gustavo Fernandes - Não é um 
palíndromo
 ● Anotaram a data da maratona - É um 
palíndromo
 ● remviver - Não é um palíndromo
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