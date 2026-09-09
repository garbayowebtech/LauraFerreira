<?php
/**
 * DRA. LAURA FERREIRA | DIREITO MÉDICO E DA SAÚDE
 * Página Geral de Artigos & Conteúdo Educativo
 */

$pageTitle = "Artigos & Orientações Jurídicas | Dra. Laura Ferreira Advocacia";
$pageDescription = "Artigos educativos sobre Direito Médico e da Saúde: negativas de planos, medicamentos de alto custo, terapias para TEA, reajustes abusivos, liminares e reembolso.";
$pageKeywords = "artigos direito medico, blog direito da saude, negativa plano de saude, reembolso plano de saude, autismo plano de saude, dra laura ferreira advogada";
$canonicalUrl = "https://lauraferreira.adv.br/artigos/";
$ogImage = "https://lauraferreira.adv.br/assets/artigos/pagou-pelo-tratamento-reembolso.webp";

require_once __DIR__ . '/../includes/header.php';

$articles = [
    [
        'slug' => 'pagou-pelo-tratamento-reembolso',
        'title' => 'Pagou pelo tratamento? Veja quando há direito ao reembolso!',
        'desc' => 'Em determinadas situações, o plano de saúde pode ser obrigado a ressarcir despesas médicas assumidas pelo próprio paciente.',
        'category' => 'Direito dos Planos',
        'read_time' => '5 min',
        'image' => '/assets/artigos/pagou-pelo-tratamento-reembolso.webp',
        'url' => '/artigos/pagou-pelo-tratamento-reembolso.php'
    ],
    [
        'slug' => 'autismo-e-planos-de-saude',
        'title' => 'Autismo e Planos de Saúde: O Que Você Precisa Saber',
        'desc' => 'Entenda os principais direitos das pessoas com Transtorno do Espectro Autista e como agir diante de negativas, limitações e práticas abusivas dos planos.',
        'category' => 'Terapias & TEA',
        'read_time' => '4 min',
        'image' => '/assets/artigos/autismo-e-planos-de-saude.webp',
        'url' => '/artigos/autismo-e-planos-de-saude.php'
    ],
    [
        'slug' => 'reajuste-plano-de-saude-quando-questionar',
        'title' => 'Reajuste de plano de saúde: quando questionar?',
        'desc' => 'Saiba quais fatores influenciam os reajustes, as regras impostas pela ANS e pelo Estatuto do Idoso e quando o aumento merece atenção jurídica.',
        'category' => 'Reajustes & Consumidor',
        'read_time' => '5 min',
        'image' => '/assets/artigos/reajuste-plano-de-saude-quando-questionar.webp',
        'url' => '/artigos/reajuste-plano-de-saude-quando-questionar.php'
    ],
    [
        'slug' => 'custos-plano-coparticipacao',
        'title' => 'Quando os custos do plano começam a comprometer o tratamento',
        'desc' => 'Entenda como funcionam as coparticipações, as regras da ANS e por que cobranças excessivas têm sido cada vez mais questionadas judicialmente.',
        'category' => 'Coparticipação & Custos',
        'read_time' => '4 min',
        'image' => '/assets/artigos/custos-plano-coparticipacao.webp',
        'url' => '/artigos/custos-plano-coparticipacao.php'
    ],
    [
        'slug' => 'medicamento-alto-custo-o-que-fazer',
        'title' => 'Plano de saúde negou medicamento de alto custo. O que fazer?',
        'desc' => 'Saiba o que fazer quando a negativa coloca o sucesso do tratamento em risco e conheça a jurisprudência que garante o fornecimento imediato.',
        'category' => 'Medicamentos de Alto Custo',
        'read_time' => '4 min',
        'image' => '/assets/artigos/medicamento-alto-custo-o-que-fazer.webp',
        'url' => '/artigos/medicamento-alto-custo-o-que-fazer.php'
    ],
    [
        'slug' => 'cirurgia-urgente-sem-especialista',
        'title' => 'Precisa fazer uma cirurgia urgente, mas seu plano não tem especialista?',
        'desc' => 'Entenda quais são os seus direitos como paciente e saiba como a Justiça determina o custeio em hospitais e médicos particulares.',
        'category' => 'Cirurgias & Urgências',
        'read_time' => '4 min',
        'image' => '/assets/artigos/cirurgia-urgente-sem-especialista.webp',
        'url' => '/artigos/cirurgia-urgente-sem-especialista.php'
    ]
];
?>

<!-- Schema.org Blog/CollectionPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "Artigos & Orientações Jurídicas em Direito da Saúde",
  "description": "Conteúdo especializado e educativo publicado pela Dra. Laura Ferreira sobre direitos dos pacientes perante planos de saúde e SUS.",
  "url": "https://lauraferreira.adv.br/artigos/",
  "publisher": {
    "@type": "Organization",
    "name": "Dra. Laura Ferreira Advocacia",
    "logo": {
      "@type": "ImageObject",
      "url": "https://lauraferreira.adv.br/assets/logo_1.png"
    }
  }
}
</script>

<!-- HERO DO BLOG / HUB DE ARTIGOS -->
<section class="blog-hub-hero">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="Navegação estruturada" class="article-breadcrumb" style="justify-content: center; margin-bottom: 1.25rem;">
            <a href="/">Início</a> &gt; 
            <span>Artigos &amp; Orientações Jurídicas</span>
        </nav>

        <span class="badge badge-terracotta" style="margin-bottom: 1rem;">Conteúdo Educativo &amp; Informativo</span>
        <h1 class="blog-hub-title">Artigos &amp; Orientações em Direito da Saúde</h1>
        <p class="blog-hub-subtitle">
            Informação jurídica clara, técnica e acessível para ajudar pacientes e familiares a compreenderem seus direitos fundamentais diante de negativas, limitações e urgências médicas.
        </p>

        <!-- Filtros por Categoria -->
        <div class="blog-categories-filter" id="blogCategoryFilter">
            <button type="button" class="category-filter-btn active" data-filter="all">Todos os Artigos</button>
            <button type="button" class="category-filter-btn" data-filter="Direito dos Planos">Planos de Saúde</button>
            <button type="button" class="category-filter-btn" data-filter="Medicamentos de Alto Custo">Medicamentos</button>
            <button type="button" class="category-filter-btn" data-filter="Terapias & TEA">Autismo / TEA</button>
            <button type="button" class="category-filter-btn" data-filter="Reajustes & Consumidor">Reajustes</button>
            <button type="button" class="category-filter-btn" data-filter="Cirurgias & Urgências">Cirurgias</button>
        </div>
    </div>
</section>

<!-- GRADE DE ARTIGOS -->
<section class="section" style="padding-top: 2rem; background: var(--color-bg-main);">
    <div class="container">
        <div class="articles-archive-grid" id="articlesGrid">
            <?php foreach ($articles as $art): ?>
                <article class="article-archive-card" data-category="<?= htmlspecialchars($art['category']) ?>">
                    <a href="<?= $art['url'] ?>" class="article-archive-thumb-link" aria-label="Ler: <?= htmlspecialchars($art['title']) ?>">
                        <div class="article-archive-thumb">
                            <img src="<?= $art['image'] ?>" alt="<?= htmlspecialchars($art['title']) ?>" loading="lazy" width="600" height="340">
                            <span class="article-thumb-badge"><?= htmlspecialchars($art['category']) ?></span>
                        </div>
                    </a>
                    <div class="article-archive-body">
                        <div class="article-meta">
                            <span><?= htmlspecialchars($art['category']) ?></span>
                            <span>•</span>
                            <span><?= $art['read_time'] ?> de leitura</span>
                        </div>
                        <h2 class="article-archive-card-title">
                            <a href="<?= $art['url'] ?>"><?= htmlspecialchars($art['title']) ?></a>
                        </h2>
                        <p class="article-archive-card-desc">
                            <?= htmlspecialchars($art['desc']) ?>
                        </p>
                        <a href="<?= $art['url'] ?>" class="area-card-cta">
                            <span>Ler Artigo Completo</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- SEÇÃO CTA INFORMATIVA DA DRA. LAURA -->
<section class="section section-slate" style="position: relative; overflow: hidden;">
    <div class="container text-center" style="max-width: 800px;">
        <span class="badge badge-terracotta" style="margin-bottom: 1rem;">Orientação Personalizada</span>
        <h2 style="color: var(--color-white); font-size: clamp(1.75rem, 3.5vw, 2.4rem); margin-bottom: 1rem;">
            Precisa de uma avaliação imediata da sua documentação?
        </h2>
        <p style="color: #9CA3AF; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">
            Cada situação possui particularidades médicas e contratuais que demandam análise técnica especializada. Entre em contato diretamente com a Dra. Laura Ferreira para entender os caminhos legais disponíveis.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura%20Ferreira.%20Gostaria%20de%20uma%20orienta%C3%A7%C3%A3o%20jur%C3%ADdica%20especializada." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                <span>Falar com a Especialista</span>
            </a>
            <a href="/#triagem" class="btn btn-outline btn-lg">
                <span>Fazer Pré-Avaliação Interativa</span>
            </a>
        </div>
    </div>
</section>

<!-- Script de Filtro das Categorias -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.category-filter-btn');
    const cards = document.querySelectorAll('.article-archive-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            cards.forEach(card => {
                const category = card.dataset.category;
                if (filter === 'all' || category === filter) {
                    card.style.display = 'flex';
                    card.style.opacity = '1';
                } else {
                    card.style.display = 'none';
                    card.style.opacity = '0';
                }
            });
        });
    });
});
</script>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
