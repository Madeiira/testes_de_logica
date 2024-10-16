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
    <h1 class="text-center">Soma de numeros inteiros</h1>
    <form method="post" class="mt-4">
        <div class="form-group">
            <input type="number" name="num1" class="form-control" placeholder="Digite o primeiro numero" required>
        </div>
        <div class="form-group">
            <input type="number" name="num2" class="form-control" placeholder="Digite o Segundo numero" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Executar</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = (int)$_POST['num1'];
            $num2 = (int)$_POST['num2'];
            
            // Se os números forem iguais
            if ($num1 == $num2) {
                $resultado = $num1;
            } 
            // Se o segundo número for menor que o primeiro
            elseif ($num2 < $num1) {
                $resultado = 0;
            } 
            // Se os números forem diferentes e o segundo for maior que o primeiro
            else {
                $soma = 0;
                for ($i = $num1; $i <= $num2; $i++) {
                    $soma += $i;
                }
                $resultado = $soma;
            }

            echo "<div class='alert alert-info mt-4'>Resultado: <strong>$resultado</strong></div>";
        }
        ?>
</div>

<?php include '../public/partials/footer.php'; ?>