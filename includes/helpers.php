<?php
declare(strict_types=1);

function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function format_currency_brl(float $value): string
{
    return 'R$' . number_format($value, 2, ',', '.');
}

function avatar_initial(string $name): string
{
    $name = trim($name);

    if ($name === '') {
        return '?';
    }

    if (function_exists('mb_substr') && function_exists('mb_strtoupper')) {
        return mb_strtoupper(mb_substr($name, 0, 1));
    }

    return strtoupper(substr($name, 0, 1));
}
