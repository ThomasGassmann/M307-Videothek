<?php

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
}

function post(string $key, $default = '') {
    return $_POST[$key] ?? $default;
}