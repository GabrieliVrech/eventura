<?php
declare(strict_types=1);

$rootPath = $rootPath ?? '';
$currentPage = $currentPage ?? '';
$headerButtonLabel = $headerButtonLabel ?? 'Criar um evento';
$headerButtonHref = $headerButtonHref ?? ($rootPath . 'index.php#criar-evento');
$eventsNavHref = $eventsNavHref ?? ($rootPath . 'index.php#proximos-eventos');
$navItems = [
    ['id' => 'inicio', 'label' => 'Início', 'href' => $rootPath . 'index.php'],
    ['id' => 'sobre', 'label' => 'Sobre', 'href' => $rootPath . 'index.php#sobre'],
    ['id' => 'eventos', 'label' => 'Calendário', 'href' => $eventsNavHref],
];
?>
<header class="header">
  <div class="container header-inner">
    <a href="<?= e($rootPath . 'index.php'); ?>" class="logo" aria-label="Eventura">
      <img
        src="<?= e($rootPath . 'logo1.png'); ?>"
        alt=""
        class="logo-image"
        width="42"
        height="39"
      >
      <span>EVENTURA</span>
    </a>

    <nav class="nav" aria-label="Navegação principal">
      <?php foreach ($navItems as $item): ?>
        <a
          class="nav-link<?= $currentPage === $item['id'] ? ' is-active' : ''; ?>"
          href="<?= e($item['href']); ?>"
        ><?= e($item['label']); ?></a>
      <?php endforeach; ?>

      <a class="btn-primary header-cta" href="<?= e($headerButtonHref); ?>"><?= e($headerButtonLabel); ?></a>
    </nav>
  </div>
</header>
