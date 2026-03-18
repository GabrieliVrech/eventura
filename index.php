<?php
declare(strict_types=1);

require __DIR__ . '/includes/helpers.php';

$dadosPagina = require __DIR__ . '/data/home-data.php';
$hero = $dadosPagina['hero'];
$eventos = $dadosPagina['eventos'];
$criacao = $dadosPagina['criacao'];
$rootPath = '';
$currentPage = 'inicio';
$headerButtonLabel = 'Criar um evento';
$headerButtonHref = 'index.php#criar-evento';

require __DIR__ . '/layout/home-layout.php';
