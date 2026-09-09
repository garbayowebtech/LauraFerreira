<?php
/**
 * DRA. LAURA FERREIRA | DIREITO MÉDICO E DA SAÚDE
 * Dynamic XML Sitemap Generator for SEO Crawlers
 */

header('Content-Type: application/xml; charset=utf-8');

$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . ($_SERVER['HTTP_HOST'] ?? 'lauraferreira.adv.br');
$today = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Página Inicial / Landing Page Principal -->
    <url>
        <loc><?= $baseUrl ?>/</loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- Hub de Artigos / Blog Geral -->
    <url>
        <loc><?= $baseUrl ?>/artigos/</loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>

    <!-- Artigo: Pagou pelo Tratamento? Reembolso -->
    <url>
        <loc><?= $baseUrl ?>/artigos/pagou-pelo-tratamento-reembolso</loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.85</priority>
    </url>

    <!-- Artigo: Autismo e Planos de Saúde -->
    <url>
        <loc><?= $baseUrl ?>/artigos/autismo-e-planos-de-saude</loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.85</priority>
    </url>

    <!-- Artigo: Reajuste de Plano de Saúde -->
    <url>
        <loc><?= $baseUrl ?>/artigos/reajuste-plano-de-saude-quando-questionar</loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.85</priority>
    </url>

    <!-- Artigo: Custos do Plano e Coparticipação -->
    <url>
        <loc><?= $baseUrl ?>/artigos/custos-plano-coparticipacao</loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.85</priority>
    </url>

    <!-- Artigo: Medicamento de Alto Custo -->
    <url>
        <loc><?= $baseUrl ?>/artigos/medicamento-alto-custo-o-que-fazer</loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.85</priority>
    </url>

    <!-- Artigo: Cirurgia Urgente sem Especialista -->
    <url>
        <loc><?= $baseUrl ?>/artigos/cirurgia-urgente-sem-especialista</loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.85</priority>
    </url>

    <!-- Página Institucional: Política de Cookies & Privacidade -->
    <url>
        <loc><?= $baseUrl ?>/politica-de-cookies</loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
</urlset>
