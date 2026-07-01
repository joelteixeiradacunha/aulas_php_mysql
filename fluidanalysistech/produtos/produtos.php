<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <link rel="stylesheet" href="../assets/styles/style_produtos.css">
    <link rel="stylesheet" href="../assets/styles/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include "../includes/header.php"
?>

    <main>
        <section>
            <h2>Carros Novos</h2>
            <div class="cards" id="novos"></div>
        </section>
        <section>
            <h2>Carros Usados</h2>
            <div class="cards" id="usados"></div>
        </section>
        <section>
            <h2>Colecionadores</h2>
            <div class="cards" id="colecionadores"></div>
        </section>
    </main>

<?php
    include "../includes/footer.php";
?>

<script src="../assets/scripts/script_produtos.js"></script>
</body>
</html>
