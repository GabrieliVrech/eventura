<?php
declare(strict_types=1);

require __DIR__ . '/../shared/includes/helpers.php';

$dadosPagina = require __DIR__ . '/data.php';
$evento = $dadosPagina['evento'];
$quantidadeInicial = $dadosPagina['quantidadeInicial'];
$totalInicial = $evento['preco'] * $quantidadeInicial;
$rootPath = $rootPath ?? '../';
$currentPage = 'eventos';
$headerButtonLabel = 'Criar um evento';
$headerButtonHref = $rootPath . 'index.php#criar-evento';
$eventsNavHref = $rootPath . 'evento/index.php';

require __DIR__ . '/layout.php';
