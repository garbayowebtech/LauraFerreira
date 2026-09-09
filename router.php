<?php
/**
 * DRA. LAURA FERREIRA | ROTEADOR DE DESENVOLVIMENTO LOCAL
 * Execução: php -S 127.0.0.1:8088 router.php
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// 1. Rota raiz
if ($uri === '/' || $uri === '') {
    require __DIR__ . '/index.php';
    return;
}

// 2. Arquivos estáticos reais (CSS, JS, Imagens, Fontes)
$fullPath = __DIR__ . $uri;
if (file_exists($fullPath) && !is_dir($fullPath)) {
    return false; // Servido nativamente pelo PHP
}

// 3. Rotas amigáveis mapeadas
$routes = [
    '/sitemap.xml' => '/sitemap.php',
    '/robots.txt' => '/robots.txt',
    '/artigos' => '/artigos/index.php',
    '/artigos/' => '/artigos/index.php',
    '/artigos/pagou-pelo-tratamento-reembolso' => '/artigos/pagou-pelo-tratamento-reembolso.php',
    '/artigos/autismo-e-planos-de-saude' => '/artigos/autismo-e-planos-de-saude.php',
    '/artigos/reajuste-plano-de-saude-quando-questionar' => '/artigos/reajuste-plano-de-saude-quando-questionar.php',
    '/artigos/custos-plano-coparticipacao' => '/artigos/custos-plano-coparticipacao.php',
    '/artigos/medicamento-alto-custo-o-que-fazer' => '/artigos/medicamento-alto-custo-o-que-fazer.php',
    '/artigos/cirurgia-urgente-sem-especialista' => '/artigos/cirurgia-urgente-sem-especialista.php',
    '/artigos/plano-negou-cirurgia' => '/artigos/plano-negou-cirurgia.php',
    '/artigos/medicamentos-alto-custo' => '/artigos/medicamentos-alto-custo.php',
    '/artigos/reajuste-faixa-etaria' => '/artigos/reajuste-faixa-etaria.php'
];

if (isset($routes[$uri])) {
    $target = __DIR__ . $routes[$uri];
    if (file_exists($target)) {
        if (substr($target, -4) === '.php') {
            require $target;
        } else {
            readfile($target);
        }
        return;
    }
}

// 4. Se for diretório com index.php
if (is_dir($fullPath) && file_exists(rtrim($fullPath, '/') . '/index.php')) {
    require rtrim($fullPath, '/') . '/index.php';
    return;
}

// 5. Se terminar em .php e o arquivo existir
if (file_exists($fullPath . '.php')) {
    require $fullPath . '.php';
    return;
}

// Fallback para a página inicial se não encontrado
require __DIR__ . '/index.php';
