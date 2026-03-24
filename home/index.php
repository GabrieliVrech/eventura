<?php
declare(strict_types=1);

require __DIR__ . '/../shared/includes/helpers.php';

$dadosPagina = require __DIR__ . '/data.php';
$hero = $dadosPagina['hero'];
$eventos = $dadosPagina['eventos'];
$criacao = $dadosPagina['criacao'];
$rootPath = $rootPath ?? '../';
$currentPage = 'inicio';
$headerButtonLabel = 'Criar um evento';
$headerButtonHref = $rootPath . 'index.php#criar-evento';

require __DIR__ . '/layout.php';
