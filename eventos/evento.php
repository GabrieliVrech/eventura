<?php
declare(strict_types=1);

require __DIR__ . '/../includes/helpers.php';

$dadosPagina = require __DIR__ . '/data/evento-data.php';
$evento = $dadosPagina['evento'];
$quantidadeInicial = $dadosPagina['quantidadeInicial'];
$totalInicial = $evento['preco'] * $quantidadeInicial;
$rootPath = '../';
$currentPage = 'eventos';
$headerButtonLabel = 'Criar um evento';
$headerButtonHref = $rootPath . 'index.php#criar-evento';
$eventsNavHref = $rootPath . 'eventos/evento.php';

require __DIR__ . '/layout/evento-layout.php';
