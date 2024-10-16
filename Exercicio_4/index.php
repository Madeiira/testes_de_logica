<!-- 
Exercício 4
Crie uma página em HTML e PHP ou JAVASCRIPT que receba um valor numérico inteiro maior do que zero e liste todos os números do 1 até o número informado. No entanto:
 ● Se o número for divisível por 3, substitua o número da listagem pela palavra HELLO.

 ● Caso o número for divisível por 5, substitua o número da listagem pela palavra WORLD.

 ● Caso o número for divisível por ambos (3 e 5), substitua o número da listagem pelas palavras HELLO WORLD, como mostrado no exemplo ao lado

-->

<?php include '../public/partials/header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Substituir Numero</h1>
    <form method="post" class="mt-4">
        <div class="form-group">
            <input type="text" name="number" class="form-control" placeholder="Digite um numero" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Substituir Numeros</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        // Verifica se o número é maior que zero
        if ($number > 0) {
            for ($i = 1; $i <= $number; $i++) {
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "HELLO WORLD<br>";
                } elseif ($i % 3 == 0) {
                    echo "HELLO<br>";
                } elseif ($i % 5 == 0) {
                    echo "WORLD<br>";
                } else {
                    echo $i . "<br>";
                }
            }
        } else {
            echo 'Por favor, insira um número maior que zero.';
        }
    }
    ?>
</div>

<?php include '../public/partials/footer.php'; ?>