<?php
/**
 * DRA. LAURA FERREIRA | DIREITO MÉDICO E DA SAÚDE
 * Header Template, SEO Meta Tags & Schema.org JSON-LD
 */

$pageTitle = $pageTitle ?? "Dra. Laura Ferreira | Advogada Especialista em Direito Médico e da Saúde no Rio de Janeiro e Brasil";
$pageDescription = $pageDescription ?? "Especialista em Direito Médico e da Saúde: liminares de urgência para negativas de cirurgias, medicamentos de alto custo pelo SUS/planos e erro médico. Atendimento no Rio de Janeiro e em todo o Brasil.";
$pageKeywords = $pageKeywords ?? "direito médico, direito da saúde, advogada direito médico rio de janeiro, liminar plano de saúde, negativa cirurgia, medicamento alto custo SUS, erro médico indenização, autismo método ABA plano, Dra Laura Ferreira";
$canonicalUrl = $canonicalUrl ?? "https://lauraferreira.adv.br" . ($_SERVER['REQUEST_URI'] ?? '');
$ogImage = $ogImage ?? "https://lauraferreira.adv.br/assets/logo_1.png";

if (!function_exists('asset_version')) {
    function asset_version($relPath) {
        $filePath = dirname(__DIR__) . $relPath;
        if (file_exists($filePath)) {
            return $relPath . '?v=' . filemtime($filePath);
        }
        return $relPath . '?v=' . time();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Metatags Principais de SEO -->
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
    <meta name="author" content="Dra. Laura Ferreira">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">

    <!-- Open Graph / Redes Sociais & WhatsApp -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta property="og:site_name" content="Dra. Laura Ferreira - Direito Médico e da Saúde">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">
    <meta property="og:image:alt" content="Logotipo Dra. Laura Ferreira - Direito Médico e da Saúde">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">

    <!-- Tipografia Google Fonts (Preconnect para carregamento ultrarrápido) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Estilos Estruturais com Cache Busting Automático -->
    <link rel="stylesheet" href="<?= asset_version('/css/variables.css') ?>">
    <link rel="stylesheet" href="<?= asset_version('/css/global.css') ?>">
    <link rel="stylesheet" href="<?= asset_version('/css/main.css') ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/logo_1.png">
    <link rel="apple-touch-icon" href="/assets/logo_1.png">
    <meta name="theme-color" content="#373F51">

    <!-- Schema.org JSON-LD (SEO Local & Advocacia Especializada) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": ["LegalService", "Attorney"],
      "name": "Dra. Laura Ferreira - Advocacia em Direito Médico e da Saúde",
      "image": "https://lauraferreira.adv.br/assets/logo_1.png",
      "url": "https://lauraferreira.adv.br",
      "telephone": "+55-21-99329-2332",
      "email": "lauraferreraadv@gmail.com",
      "priceRange": "$$",
      "description": "Advocacia especializada em Direito Médico e da Saúde: liminares contra negativas de planos de saúde, fornecimento de remédios de alto custo pelo SUS e ações de erro médico no Rio de Janeiro e Brasil.",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Rio de Janeiro",
        "addressRegion": "RJ",
        "addressCountry": "BR"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -22.9068,
        "longitude": -43.1729
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "08:30",
          "closes": "19:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Saturday", "Sunday"],
          "opens": "09:00",
          "closes": "17:00",
          "description": "Plantão Judiciário de Liminares e Emergências Hospitalares"
        }
      ],
      "sameAs": [
        "https://www.instagram.com/lauraferreiraadv/"
      ],
      "areaServed": [
        {
          "@type": "State",
          "name": "Rio de Janeiro"
        },
        {
          "@type": "Country",
          "name": "Brasil"
        }
      ]
    }
    </script>
</head>
<body>

    <!-- 1. BARRA SUPERIOR DE CONTATO & ATENDIMENTO -->
    <aside class="top-bar" aria-label="Informações de Atendimento">
        <div class="container">
            <div class="top-bar-items">
                <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura%20Ferreira.%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20Direito%20da%20Sa%C3%BAde." class="top-bar-item" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                    <span>(21) 99329-2332</span>
                </a>
                <a href="mailto:lauraferreraadv@gmail.com" class="top-bar-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <span>lauraferreraadv@gmail.com</span>
                </a>
            </div>
            <div class="top-bar-items">
                <a href="https://www.instagram.com/lauraferreiraadv/" target="_blank" rel="noopener noreferrer" class="top-bar-item" aria-label="Siga no Instagram">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    <span>@lauraferreiraadv</span>
                </a>
            </div>
        </div>
    </aside>

    <!-- 2. HEADER INSTITUCIONAL FIXO -->
    <header class="site-header" id="navbar">
        <div class="container">
            <a href="/" class="header-brand" aria-label="Página Inicial Dra. Laura Ferreira">
                <img src="/assets/logo_1.png" alt="Logotipo Dra. Laura Ferreira" class="brand-logo-img">
                <div class="brand-info">
                    <span class="brand-name">LAURA FERREIRA</span>
                    <span class="brand-subtitle">DIREITO MÉDICO E DA SAÚDE</span>
                </div>
            </a>

            <!-- Menu de Navegação Simplificado: Início / Áreas de Atuação / Sobre / Contato -->
            <nav class="nav-menu" id="navMenu" aria-label="Navegação Principal">
                <a href="/#hero" class="nav-link active">Início</a>
                <a href="/#areas" class="nav-link">Áreas de Atuação</a>
                <a href="/#sobre" class="nav-link">Sobre</a>
                <a href="/#contato" class="nav-link">Contato</a>
            </nav>

            <div class="header-cta-group">
                <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura%20Ferreira.%20Gostaria%20de%20uma%20orienta%C3%A7%C3%A3o%20jur%C3%ADdica%20especializada." target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm" id="headerCtaBtn">
                    <span>Falar com a Especialista</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>

                <!-- Botão Menu Mobile Animado (Estilo Pequeno Canguru) -->
                <button class="mobile-toggle" id="mobileMenuBtn" aria-label="Abrir Menu de Navegação" aria-expanded="false" aria-controls="mobileDrawer">
                    <span class="mobile-toggle__bar"></span>
                    <span class="mobile-toggle__bar"></span>
                    <span class="mobile-toggle__bar"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Overlay do Menu Mobile (Backdrop Blur) -->
    <div class="mobile-menu-overlay" id="mobileMenuOverlay" aria-hidden="true"></div>

    <!-- Aside Drawer Lateral Mobile (Estilo Pequeno Canguru) -->
    <aside class="mobile-drawer" id="mobileDrawer" aria-label="Menu de Navegação Principal" aria-hidden="true">
        <div class="mobile-drawer__header">
            <a href="/" class="brand--drawer">
                <img src="/assets/logo_2.png" alt="Logotipo Dra. Laura Ferreira" class="brand__logo">
                <div>
                    <span class="brand__title">LAURA FERREIRA</span>
                    <span class="brand__subtitle">DIREITO MÉDICO E DA SAÚDE</span>
                </div>
            </a>
            <button type="button" class="mobile-drawer__close" id="mobileDrawerClose" aria-label="Fechar Menu">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <div class="mobile-drawer__body">
            <div class="mobile-drawer__nav-label">Navegação Principal</div>
            <nav class="mobile-nav-list">
                <a href="/#hero" class="mobile-nav-item active">
                    <span class="mobile-nav-icon">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </span>
                    <div class="mobile-nav-text">
                        <strong>Início</strong>
                        <span>Defesa do Direito à Saúde</span>
                    </div>
                    <span class="mobile-nav-arrow">›</span>
                </a>

                <a href="/#areas" class="mobile-nav-item">
                    <span class="mobile-nav-icon">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </span>
                    <div class="mobile-nav-text">
                        <strong>Áreas de Atuação</strong>
                        <span>Cirurgias, Medicamentos e SUS</span>
                    </div>
                    <span class="mobile-nav-arrow">›</span>
                </a>

                <a href="/#triagem" class="mobile-nav-item">
                    <span class="mobile-nav-icon">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                        </svg>
                    </span>
                    <div class="mobile-nav-text">
                        <strong>Triagem Rápida</strong>
                        <span>Pré-avaliação do seu caso em 1 min</span>
                    </div>
                    <span class="mobile-nav-arrow">›</span>
                </a>

                <a href="/#sobre" class="mobile-nav-item">
                    <span class="mobile-nav-icon">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </span>
                    <div class="mobile-nav-text">
                        <strong>Sobre a Advogada</strong>
                        <span>Dra. Laura Ferreira • OAB/RJ</span>
                    </div>
                    <span class="mobile-nav-arrow">›</span>
                </a>

                <a href="/#como-funciona" class="mobile-nav-item">
                    <span class="mobile-nav-icon">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </span>
                    <div class="mobile-nav-text">
                        <strong>Como Funciona</strong>
                        <span>Passo a passo até a liminar</span>
                    </div>
                    <span class="mobile-nav-arrow">›</span>
                </a>

                <a href="/#faq" class="mobile-nav-item">
                    <span class="mobile-nav-icon">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                    </span>
                    <div class="mobile-nav-text">
                        <strong>Perguntas Frequentes</strong>
                        <span>Dúvidas e prazos da Justiça</span>
                    </div>
                    <span class="mobile-nav-arrow">›</span>
                </a>

                <a href="/#contato" class="mobile-nav-item">
                    <span class="mobile-nav-icon">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </span>
                    <div class="mobile-nav-text">
                        <strong>Contato & Atendimento</strong>
                        <span>Rio de Janeiro e todo o Brasil</span>
                    </div>
                    <span class="mobile-nav-arrow">›</span>
                </a>
            </nav>

            <!-- Ações Rápidas no Menu Mobile -->
            <div class="mobile-drawer__actions">
                <a href="/#triagem" class="btn btn-primary mobile-drawer__btn">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/>
                    </svg>
                    <span>Fazer Triagem do Caso</span>
                </a>

                <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura%20Ferreira.%20Gostaria%20de%20um%20atendimento%20jur%C3%ADdico." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp mobile-drawer__btn">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                        <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/>
                    </svg>
                    <span>Falar no WhatsApp</span>
                </a>
            </div>
        </div>

        <!-- Rodapé do Drawer -->
        <div class="mobile-drawer__footer">
            <div class="mobile-drawer__contact-item">
                <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                <a href="https://wa.me/5521993292332" target="_blank">(21) 99329-2332</a>
            </div>
            <div class="mobile-drawer__contact-item">
                <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <a href="mailto:lauraferreraadv@gmail.com">lauraferreraadv@gmail.com</a>
            </div>
            <div class="mobile-drawer__contact-item">
                <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Rio de Janeiro - RJ • Atendimento Nacional</span>
            </div>
        </div>
    </aside>

    <main id="mainContent">
