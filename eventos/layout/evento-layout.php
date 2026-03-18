<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= e($evento['titulo']); ?> | Eventura</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/site.css">
  <link rel="stylesheet" href="css/evento.css">
</head>
<body
  class="page-evento"
  data-preco-unitario="<?= e(number_format((float) $evento['preco'], 2, '.', '')); ?>"
  data-quantidade-inicial="<?= e($quantidadeInicial); ?>"
>
  <?php require __DIR__ . '/../partials/hero.php'; ?>
  <?php require __DIR__ . '/../partials/main.php'; ?>
  <?php require __DIR__ . '/../../partials/shared/footer.php'; ?>

  <script src="js/evento.js"></script>
</body>
</html>
