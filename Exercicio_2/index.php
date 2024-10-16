<!-- 
Exercício 2

Crie uma página em HTML e PHP ou JAVASCRIPT que receba uma frase e retorne a palavra que conter a maior quantidade de caracteres.

PS.: Se a frase possuir mais de uma palavra com a mesma quantidade de caracteres, retorne qualquer uma delas.

● É claro que a determinação clara de objetivos nos obriga à análise das variáveis envolvidas - determinação

● O desafiador cenário globalizado possibilitaria uma melhor visão global - possibilitaria
-->

<?php include '../public/partials/header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Mostrar Maior(es) Palavra(s)</h1>
    <form method="post" class="mt-4">
        <div class="form-group">
            <input type="text" name="phrase" class="form-control" placeholder="Digite uma frase" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Mostrar Palavra(s)</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $phraseArray = explode(' ', $_POST['phrase']);
            $maiorPalavra = '';
            $maiorPalavras = [];

            // Encontrando a maior palavra
            foreach ($phraseArray as $palavra) {
                if (strlen($palavra) > strlen($maiorPalavra)) {
                    $maiorPalavra = $palavra;
                    $maiorPalavras = [$palavra]; // Reinicializa a lista com a nova maior palavra
                } elseif (strlen($palavra) == strlen($maiorPalavra)) {
                    $maiorPalavras[] = $palavra; // Adiciona a palavra à lista se tiver o mesmo comprimento
                }
            }

        }
    ?>

</div>

<?php include '../public/partials/footer.php'; ?>