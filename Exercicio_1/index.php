<!-- 
Exercício 1
Crie uma página em HTML e PHP/JAVASCRIPT que receba uma
palavra e que remova todas as vogais desta palavra, como no
exemplo abaixo
PS.: Nenhuma palavra com acentos e caracteres especiais será
testada: 

-->

<?php include '../public/partials/header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Remover Vogais</h1>
    <form method="post" class="mt-4">
        <div class="form-group">
            <input type="text" name="word" class="form-control" placeholder="Digite uma palavra" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Remover Vogais</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $word = strtolower($_POST['word']);
        $vowels = array("a", "e", "i", "o", "u");
        $result = str_replace($vowels, '', $word);
        echo "<h2 class='mt-4'>Resultado:</h2>";
        echo "<p>Palavra original: <strong>$word</strong></p>";
        echo "<p>Sem vogais: <strong>$result</strong></p>";
    }
    ?>
</div>

<?php include '../public/partials/footer.php'; ?>