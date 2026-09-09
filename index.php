<?php
/**
 * DRA. LAURA FERREIRA | DIREITO MÉDICO E DA SAÚDE
 * Landing Page Principal - SEO Técnico & SSR
 */

$pageTitle = "Dra. Laura Ferreira | Advogada Especialista em Direito Médico e da Saúde • Rio de Janeiro e Brasil";
$pageDescription = "Defesa especializada contra negativas de planos de saúde, obtenção de medicamentos de alto custo pelo SUS/planos e ações de erro médico. Liminares em 24h a 48h. Atendimento humanizado em todo o Brasil.";
$pageKeywords = "advogada direito médico, direito da saúde rio de janeiro, liminar plano de saúde, negativa de cirurgia plano, medicamento alto custo SUS, erro médico indenização, tratamento autismo ABA plano, Dra Laura Ferreira advocacia";
$canonicalUrl = "https://lauraferreira.adv.br/";
$ogImage = "https://lauraferreira.adv.br/assets/logo_1.png";

require_once __DIR__ . '/includes/header.php';
?>

<!-- Schema.org FAQPage para Rich Snippets nos Resultados de Busca -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "O plano de saúde negou minha cirurgia ou exame. O que fazer imediatamente?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Exija a negativa formal por escrito com a justificativa do plano. Com o laudo médico detalhado em mãos comprovando a necessidade e a urgência, é possível ingressar com uma Ação Judicial com Pedido de Liminar para que a Justiça determine a autorização do procedimento em 24 a 48 horas."
      }
    },
    {
      "@type": "Question",
      "name": "Quanto tempo demora para sair uma decisão liminar na área da saúde?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Em casos de urgência e emergência com risco de agravamento ou risco de vida, o juiz costuma apreciar o pedido de liminar entre 24 e 48 horas, mesmo durante fins de semana e feriados por meio do Plantão Judiciário."
      }
    },
    {
      "@type": "Question",
      "name": "Como conseguir medicamentos de alto custo pelo SUS ou pelo plano de saúde?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "É necessário relatório médico minucioso atestando a enfermidade, a imprescindibilidade do remédio e a ineficácia das opções oferecidas na rede básica, acompanhado da negativa formal do Estado ou do plano de saúde. A Justiça tem reiteradamente assegurado o fornecimento com base no direito constitucional à vida e à saúde."
      }
    },
    {
      "@type": "Question",
      "name": "O plano de saúde pode limitar as sessões de terapia para autismo (TEA)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Não. De acordo com a Resolução Normativa nº 541/2022 da ANS e ampla jurisprudência dos tribunais brasileiros, é ilegal qualquer limitação no número de sessões para terapias multidisciplinares (como método ABA, fonoaudiologia, psicologia e terapia ocupacional) indicadas para pacientes com Transtorno do Espectro Autista."
      }
    },
    {
      "@type": "Question",
      "name": "Moro fora do Rio de Janeiro. A Dra. Laura Ferreira pode me atender?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim. Os processos judiciais no Brasil são 100% eletrônicos e digitais. A Dra. Laura Ferreira realiza atendimentos por videoconferência e WhatsApp, atuando com agilidade em tribunais de todos os estados brasileiros e no Distrito Federal."
      }
    }
  ]
}
</script>

<!-- ==============================================================================
     SEÇÃO 1: HERO (CONFORME SOLICITADO: FUNDO NEUTRO JUSTIÇA + FOTO DIREITA + COPY ESQUERDA)
     ============================================================================== -->
<section class="hero-section" id="hero">
    <!-- Imagem de Fundo Neutra que Remete a Direito & Justiça -->
    <div class="hero-bg-container">
        <img src="/assets/hero-bg.webp" alt="Interior arquitetônico clássico de tribunal de justiça com balança ao fundo" class="hero-bg-img" width="1920" height="1080">
        <div class="hero-overlay"></div>
    </div>

    <div class="container">
        <div class="hero-grid">
            
            <!-- Lado Esquerdo: Frases de Impacto & Hero Content -->
            <div class="hero-content reveal active">
                <h1 class="hero-title">
                    Defesa Jurídica Especializada e Humanizada na Proteção do Seu <span class="highlight-terracotta">Direito à Saúde</span>.
                </h1>

                <p class="hero-subtitle">
                    Atuação estratégica e célere contra negativas de planos de saúde, obtenção de medicamentos de alto custo e reparação em casos de erro médico. Resposta imediata para casos urgentes no Rio de Janeiro e em todo o Brasil.
                </p>

                <!-- Indicadores de Credibilidade -->
                <div class="hero-stats-row">
                    <div class="hero-stat-item">
                        <span class="stat-number">+500</span>
                        <span class="stat-label">Casos e situações analisadas com foco exclusivo na saúde</span>
                    </div>
                    <div class="hero-stat-item">
                        <span class="stat-number">24h/48h</span>
                        <span class="stat-label">Celeridade em pedidos de tutela de urgência (liminares)</span>
                    </div>
                    <div class="hero-stat-item">
                        <span class="stat-number">Nacional</span>
                        <span class="stat-label">Atuação online em todos os tribunais do Brasil e RJ</span>
                    </div>
                </div>
            </div>

            <!-- Lado Direito: Foto da Advogada ocupando mesma proporção (50%) e vindo da base da seção -->
            <div class="hero-visual-col reveal active">
                <div class="hero-image-wrapper">
                    <div class="hero-image-frame">
                        <img src="/assets/laura_1.webp" alt="Foto da Dra. Laura Ferreira, advogada especialista em Direito Médico e da Saúde" class="hero-lawyer-img" width="500" height="500">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==============================================================================
     SEÇÃO 2: TRUST BAR / ÉTICA & CREDIBILIDADE
     ============================================================================== -->
<section class="trust-bar">
    <div class="container">
        <div class="trust-bar-grid">
            <div class="trust-item">
                <div class="trust-item-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                </div>
                <div class="trust-item-text">
                    <strong>Provimento 205/2021 CFOAB</strong>
                    <span>Publicidade ética e informativa</span>
                </div>
            </div>

            <div class="trust-item">
                <div class="trust-item-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                </div>
                <div class="trust-item-text">
                    <strong>Sigilo Profissional Absoluto</strong>
                    <span>Proteção rigorosa de dados médicos</span>
                </div>
            </div>

            <div class="trust-item">
                <div class="trust-item-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div class="trust-item-text">
                    <strong>Atendimento Nacional</strong>
                    <span>Presencial no RJ e 100% digital</span>
                </div>
            </div>

            <div class="trust-item">
                <div class="trust-item-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div class="trust-item-text">
                    <strong>Foco Exclusivo na Saúde</strong>
                    <span>Especialização técnica aprofundada</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================================================
     SEÇÃO 3: ÁREAS DE ATUAÇÃO ESPECIALIZADAS (6 CARDS INTERATIVOS)
     ============================================================================== -->
<section class="section" id="areas">
    <div class="container">
        <div class="section-header reveal">
            <span class="badge badge-terracotta section-tag">Especialidades Jurídicas</span>
            <h2>Como Posso Proteger o Seu Direito à Saúde?</h2>
            <p>
                Casos que envolvem a saúde exigem conhecimento técnico apurado da legislação sanitária, das resoluções da ANS e do Código de Defesa do Consumidor. Conheça as principais demandas atendidas:
            </p>
        </div>

        <div class="areas-grid">
            
            <!-- Card 1: Negativa de Cirurgias e Exames -->
            <article class="area-card reveal">
                <div class="area-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
                </div>
                <h3 class="area-card-title">Negativa de Cirurgias, Próteses e Internações</h3>
                <p class="area-card-desc">
                    Atuação imediata contra a recusa injusta de planos de saúde em cobrir procedimentos cirúrgicos vitais, leitos de CTI/UTI e materiais especiais (OPME).
                </p>
                <div class="area-bullet-list">
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Pedido de liminar de urgência em 24h a 48h</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Cobertura de próteses, órteses e stents</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Internação imediata em rede credenciada</span>
                    </div>
                </div>
                <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura.%20Meu%20plano%20de%20sa%C3%BAde%20negou%20uma%20cirurgia%2Fexame.%20Preciso%20de%20ajuda." target="_blank" rel="noopener noreferrer" class="area-card-cta">
                    <span>Consultar sobre Negativa</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>

            <!-- Card 2: Medicamentos de Alto Custo -->
            <article class="area-card reveal">
                <div class="area-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.5 20.5L3.5 13.5a4.95 4.95 0 0 1 7-7l7 7a4.95 4.95 0 0 1-7 7z"/><line x1="8.5" y1="8.5" x2="15.5" y2="15.5"/></svg>
                </div>
                <h3 class="area-card-title">Medicamentos de Alto Custo (Planos e SUS)</h3>
                <p class="area-card-desc">
                    Garantia judicial do fornecimento de fármacos oncológicos, imunobiológicos e tratamentos para doenças raras negados pelo Estado ou convênio.
                </p>
                <div class="area-bullet-list">
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Medicamentos fora do rol taxativo da ANS</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Ações contra o Estado e Município (SUS)</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Tratamentos oncológicos e canabidiol medicinal</span>
                    </div>
                </div>
                <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura.%20Preciso%20de%20aux%C3%ADlio%20para%20obter%20um%20medicamento%20de%20alto%20custo." target="_blank" rel="noopener noreferrer" class="area-card-cta">
                    <span>Consultar Medicamento</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>

            <!-- Card 3: Tratamento para Autismo (TEA) -->
            <article class="area-card reveal">
                <div class="area-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                </div>
                <h3 class="area-card-title">Terapias para Autismo (TEA) e Neurodivergência</h3>
                <p class="area-card-desc">
                    Obrigatoriedade de cobertura multidisciplinar sem limite de sessões para o desenvolvimento neuropsicomotor da criança com TEA.
                </p>
                <div class="area-bullet-list">
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Método ABA, Fonoaudiologia e Terapia Ocupacional</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Derrubada de limitação abusiva de sessões</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Reembolso integral quando não houver rede apta</span>
                    </div>
                </div>
                <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura.%20Gostaria%20de%20orienta%C3%A7%C3%A3o%20sobre%20cobertura%20de%20terapias%20para%20Autismo%20%28TEA%29." target="_blank" rel="noopener noreferrer" class="area-card-cta">
                    <span>Garantir Terapias TEA</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>

            <!-- Card 4: Erro Médico e Hospitalar -->
            <article class="area-card reveal">
                <div class="area-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                </div>
                <h3 class="area-card-title">Erro Médico, Odontológico e Hospitalar</h3>
                <p class="area-card-desc">
                    Responsabilização civil por imperícia, negligência ou imprudência em cirurgias plásticas, partos, procedimentos estéticos e falhas de diagnóstico.
                </p>
                <div class="area-bullet-list">
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Indenização por danos morais, estéticos e materiais</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Pensão mensal em casos de incapacidade permanente</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Análise técnica aprofundada de prontuários</span>
                    </div>
                </div>
                <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura.%20Gostaria%20de%20analisar%20um%20poss%C3%ADvel%20caso%20de%20erro%20m%C3%A9dico." target="_blank" rel="noopener noreferrer" class="area-card-cta">
                    <span>Avaliar Caso de Erro Médico</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>

            <!-- Card 5: Reajustes Abusivos de Planos -->
            <article class="area-card reveal">
                <div class="area-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                </div>
                <h3 class="area-card-title">Reajustes Abusivos de Planos de Saúde</h3>
                <p class="area-card-desc">
                    Revisão judicial de aumentos desproporcionais por faixa etária (especialmente aos 59 anos) e sinistralidade injustificada em planos coletivos e por adesão.
                </p>
                <div class="area-bullet-list">
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Redução imediata da mensalidade cobrada</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Restituição retroativa dos valores pagos a mais</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Combate ao cancelamento unilateral de planos</span>
                    </div>
                </div>
                <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura.%20Sofri%20um%20reajuste%20abusivo%20no%20meu%20plano%20de%20sa%C3%BAde." target="_blank" rel="noopener noreferrer" class="area-card-cta">
                    <span>Revisar Reajuste</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>

            <!-- Card 6: Defesa e Assessoria para Profissionais da Saúde -->
            <article class="area-card reveal">
                <div class="area-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 class="area-card-title">Direito Médico Preventivo & Defesa no CRM</h3>
                <p class="area-card-desc">
                    Assessoria jurídica estratégica para médicos, dentistas e clínicas: blindagem contratual, adequação de TCLE e defesa técnica em sindicâncias e PEPs.
                </p>
                <div class="area-bullet-list">
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Defesa ética em Processos Disciplinares (CRM/CFM)</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Elaboração de Termos de Consentimento (TCLE)</span>
                    </div>
                    <div class="area-bullet-item">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        <span>Gestão de risco jurídico hospitalar e de consultórios</span>
                    </div>
                </div>
                <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura.%20Sou%20m%C3%A9dico%2Fgestor%20de%20sa%C3%BAde%20e%20gostaria%20de%20uma%20assessoria%20preventiva." target="_blank" rel="noopener noreferrer" class="area-card-cta">
                    <span>Assessoria para Médicos</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ==============================================================================
     SEÇÃO 4: TRIAGEM INTERATIVA DE CASOS (ASSISTENTE RÁPIDO DE CONVERSÃO)
     ============================================================================== -->
<section class="section triage-section" id="triagem">
    <div class="container">
        <div class="section-header reveal" style="margin-bottom: 2rem;">
            <span class="badge badge-ivory section-tag">Triagem Rápida & Sigilosa</span>
            <h2 style="color: var(--color-white);">Seu Direito à Saúde Foi Negado? Faça a Pré-Avaliação</h2>
            <p style="color: #D1D5DB;">
                Responda em menos de 1 minuto para receber uma orientação jurídica personalizada e saber os documentos necessários para o seu caso.
            </p>
        </div>

        <div class="triage-box reveal">
            <!-- Indicador de 4 Etapas com Nomes -->
            <div class="triage-steps-indicator" id="triageIndicatorBar">
                <div class="step-indicator-wrapper">
                    <div class="step-indicator-item active" id="stepInd1">1</div>
                    <span class="step-indicator-label">Situação</span>
                </div>
                <div class="step-indicator-wrapper">
                    <div class="step-indicator-item" id="stepInd2">2</div>
                    <span class="step-indicator-label">Paciente</span>
                </div>
                <div class="step-indicator-wrapper">
                    <div class="step-indicator-item" id="stepInd3">3</div>
                    <span class="step-indicator-label">Urgência</span>
                </div>
                <div class="step-indicator-wrapper">
                    <div class="step-indicator-item" id="stepInd4">4</div>
                    <span class="step-indicator-label">Diagnóstico</span>
                </div>
            </div>

            <!-- PASSO 1: Tipo de Problema -->
            <div class="triage-step-content active" id="triageStep1">
                <h3 style="color: var(--color-white); font-size: 1.35rem; margin-bottom: 0.5rem; text-align: center;">
                    Qual situação melhor descreve a sua necessidade atual?
                </h3>
                <p style="color: #9CA3AF; text-align: center; font-size: 0.9rem;">
                    Clique na opção correspondente para avançar automaticamente:
                </p>

                <div class="triage-options-grid">
                    <button type="button" class="triage-option-btn" data-value="negativa-cirurgia-exame" data-allow-high-urgency="true">
                        <div class="triage-option-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
                        </div>
                        <div>
                            <strong class="option-text-main" style="display: block; font-size: 0.95rem;">Plano negou cirurgia, exame ou internação</strong>
                            <span style="font-size: 0.8rem; color: #9CA3AF;">Cirurgias, CTI/UTI, próteses ou home care recusados</span>
                        </div>
                    </button>

                    <button type="button" class="triage-option-btn" data-value="medicamento-alto-custo" data-allow-high-urgency="true">
                        <div class="triage-option-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.5 20.5L3.5 13.5a4.95 4.95 0 0 1 7-7l7 7a4.95 4.95 0 0 1-7 7z"/></svg>
                        </div>
                        <div>
                            <strong class="option-text-main" style="display: block; font-size: 0.95rem;">Medicamento de alto custo negado</strong>
                            <span style="font-size: 0.8rem; color: #9CA3AF;">Fármacos oncológicos, raros ou especiais (Plano ou SUS)</span>
                        </div>
                    </button>

                    <button type="button" class="triage-option-btn" data-value="autismo-terapias" data-allow-high-urgency="false">
                        <div class="triage-option-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                        <div>
                            <strong class="option-text-main" style="display: block; font-size: 0.95rem;">Limitação de terapias para Autismo (TEA)</strong>
                            <span style="font-size: 0.8rem; color: #9CA3AF;">Plano limitou método ABA, fonoaudiologia, TO ou psicopedagogia</span>
                        </div>
                    </button>

                    <button type="button" class="triage-option-btn" data-value="erro-medico" data-allow-high-urgency="false">
                        <div class="triage-option-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        </div>
                        <div>
                            <strong class="option-text-main" style="display: block; font-size: 0.95rem;">Suspeita de Erro Médico ou Odontológico</strong>
                            <span style="font-size: 0.8rem; color: #9CA3AF;">Danos corporais, diagnósticos tardios ou sequelas graves</span>
                        </div>
                    </button>

                    <button type="button" class="triage-option-btn" data-value="reajuste-abusivo" data-allow-high-urgency="false">
                        <div class="triage-option-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/></svg>
                        </div>
                        <div>
                            <strong class="option-text-main" style="display: block; font-size: 0.95rem;">Aumento abusivo na mensalidade do plano</strong>
                            <span style="font-size: 0.8rem; color: #9CA3AF;">Reajuste aos 59 anos, falsos coletivos ou sinistralidade injusta</span>
                        </div>
                    </button>

                    <button type="button" class="triage-option-btn" data-value="assessoria-medica" data-allow-high-urgency="false">
                        <div class="triage-option-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <div>
                            <strong class="option-text-main" style="display: block; font-size: 0.95rem;">Sou Médico/Clínica e busco assessoria</strong>
                            <span style="font-size: 0.8rem; color: #9CA3AF;">Defesa em sindicância no CRM, TCLE e gestão de risco</span>
                        </div>
                    </button>
                </div>

                <div class="triage-nav-buttons triage-nav-step1">
                    <button type="button" class="btn btn-primary" id="triageNext1" disabled>
                        <span>Avançar para Dados do Paciente</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <!-- PASSO 2: Dados do Paciente (Nome e Idade) -->
            <div class="triage-step-content" id="triageStep2">
                <h3 style="color: var(--color-white); font-size: 1.35rem; margin-bottom: 0.5rem; text-align: center;">
                    Quem é o paciente que necessita do atendimento?
                </h3>
                <p style="color: #9CA3AF; text-align: center; font-size: 0.9rem; max-width: 600px; margin: 0 auto 1.5rem auto;">
                    Esses dados auxiliam na individualização jurídica e na análise prévia de prioridades legais:
                </p>

                <div class="triage-patient-card">
                    <div class="triage-inputs-grid">
                        <div class="triage-field-group">
                            <label for="triagePatientName" class="triage-field-label">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                <span>Nome Completo do Paciente *</span>
                            </label>
                            <input type="text" id="triagePatientName" class="triage-input" placeholder="Ex: Maria de Fátima Silva" autocomplete="name">
                            <small class="triage-field-hint">Pode ser o seu nome ou o de um familiar/dependente.</small>
                        </div>

                        <div class="triage-field-group">
                            <label for="triagePatientAge" class="triage-field-label">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="18" y2="10"/></svg>
                                <span>Idade do Paciente *</span>
                            </label>
                            <input type="text" id="triagePatientAge" class="triage-input" placeholder="Ex: 58 anos (ou 6 anos, 8 meses)">
                            <small class="triage-field-hint">A idade é essencial para prioridades processuais.</small>
                        </div>

                        <div class="triage-field-group">
                            <label for="triagePatientPhone" class="triage-field-label">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                                <span>WhatsApp / Telefone *</span>
                            </label>
                            <input type="tel" id="triagePatientPhone" class="triage-input" placeholder="(21) 99999-9999" maxlength="15" autocomplete="tel">
                            <small class="triage-field-hint">Obrigatório. Para retorno imediato da Dra. Laura e equipe.</small>
                        </div>

                        <div class="triage-field-group">
                            <label for="triagePatientEmail" class="triage-field-label">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                <span>E-mail <span style="font-weight: 400; font-size: 0.8em; color: #9CA3AF;">(Opcional)</span></span>
                            </label>
                            <input type="email" id="triagePatientEmail" class="triage-input" placeholder="seuemail@exemplo.com" autocomplete="email">
                            <small class="triage-field-hint">Opcional. Para envio de cópia das orientações preliminares.</small>
                        </div>
                    </div>

                    <div id="triagePatientValidationMsg" class="triage-validation-alert" style="display: none;">
                        Por favor, informe os dados solicitados para prosseguir.
                    </div>

                    <div class="triage-privacy-notice">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        <span>Seus dados são confidenciais e protegidos sob sigilo profissional da advocacia e LGPD.</span>
                    </div>
                </div>

                <div class="triage-nav-buttons">
                    <button type="button" class="btn btn-outline-white btn-sm" id="triagePrev2">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                        <span>Voltar para Situação</span>
                    </button>
                    <button type="button" class="btn btn-primary" id="triageNext2">
                        <span>Avançar para Nível de Urgência</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <!-- PASSO 3: Urgência do Caso (Filtrada Dinamicamente) -->
            <div class="triage-step-content" id="triageStep3">
                <h3 style="color: var(--color-white); font-size: 1.35rem; margin-bottom: 0.5rem; text-align: center;">
                    Qual é o nível de urgência da situação?
                </h3>
                <p style="color: #9CA3AF; text-align: center; font-size: 0.9rem;">
                    Selecione para avançar automaticamente para o diagnóstico preliminar:
                </p>

                <div class="triage-options-grid triage-urgency-grid">
                    <!-- Opção 1: ALTÍSSIMA URGÊNCIA (Disponível EXCLUSIVAMENTE para Cirurgias e Medicamentos de Alto Custo) -->
                    <button type="button" class="triage-option-btn triage-urgency-btn" id="optAltissimaUrgencia" data-value="urgente-imediato">
                        <div class="triage-option-icon" style="color: #EF4444; background: rgba(239, 68, 68, 0.2);">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        </div>
                        <div>
                            <div style="display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap;">
                                <strong class="option-text-main" style="font-size: 1rem; color: #FCA5A5;">Altíssima Urgência</strong>
                                <span class="badge" style="background: rgba(239, 68, 68, 0.35); color: #FECACA; font-size: 0.7rem; padding: 2px 6px; border: 1px solid rgba(239, 68, 68, 0.5);">Risco de vida / Intervenção imediata</span>
                            </div>
                            <span style="font-size: 0.825rem; color: #D1D5DB; display: block; margin-top: 4px;">Internação em UTI/CTI, cirurgia emergencial ou suspensão abrupta de medicação vital</span>
                        </div>
                    </button>

                    <!-- Opção 2: URGENTE (Disponível sempre) -->
                    <button type="button" class="triage-option-btn triage-urgency-btn" id="optUrgente" data-value="urgente-48h">
                        <div class="triage-option-icon" style="color: #F59E0B; background: rgba(245, 158, 11, 0.2);">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <strong class="option-text-main" style="display: block; font-size: 1rem; color: #FCD34D;">Urgente (Prazo nos próximos dias / Procedimento marcado)</strong>
                            <span style="font-size: 0.825rem; color: #D1D5DB; display: block; margin-top: 4px;">Receituário com data limite, exame diagnóstico pré-operatório ou cirurgia eletiva agendada</span>
                        </div>
                    </button>

                    <!-- Opção 3: ORIENTAÇÃO PREVENTIVA (Disponível sempre) -->
                    <button type="button" class="triage-option-btn triage-urgency-btn" id="optPreventiva" data-value="orientacao-geral">
                        <div class="triage-option-icon" style="color: #60A5FA; background: rgba(96, 165, 250, 0.2);">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                        </div>
                        <div>
                            <strong class="option-text-main" style="display: block; font-size: 1rem; color: #93C5FD;">Orientação Preventiva / Dúvida Jurídica</strong>
                            <span style="font-size: 0.825rem; color: #D1D5DB; display: block; margin-top: 4px;">Revisão contratual, contestação de reajuste de mensalidade ou planejamento de ação futura</span>
                        </div>
                    </button>
                </div>

                <div class="triage-nav-buttons">
                    <button type="button" class="btn btn-outline-white btn-sm" id="triagePrev3">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                        <span>Voltar para Paciente</span>
                    </button>
                    <button type="button" class="btn btn-primary" id="triageNext3" disabled>
                        <span>Ver Diagnóstico e Documentos</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <!-- PASSO 4: Diagnóstico Imediato, Checklist & Contato Direto -->
            <div class="triage-step-content" id="triageStep4">
                <div class="triage-result-container">
                    <div class="triage-result-header">
                        <div class="triage-success-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <h3 style="color: var(--color-white); font-size: 1.45rem; margin-bottom: 0.35rem;">
                            Pré-Avaliação Concluída!
                        </h3>
                        <p style="color: #D1D5DB; font-size: 0.95rem;">
                            Análise prévia estruturada para o paciente <strong id="triageSummaryPatientLabel" style="color: var(--color-white);">-</strong>.
                        </p>
                    </div>

                    <!-- Resumo Consolidado do Caso -->
                    <div class="triage-summary-card">
                        <div class="triage-summary-row">
                            <span class="triage-summary-label">Paciente:</span>
                            <strong id="triageSummaryPatientName" class="triage-summary-val">-</strong>
                        </div>
                        <div class="triage-summary-row">
                            <span class="triage-summary-label">Idade:</span>
                            <strong id="triageSummaryPatientAge" class="triage-summary-val">-</strong>
                        </div>
                        <div class="triage-summary-row">
                            <span class="triage-summary-label">Telefone / WhatsApp:</span>
                            <strong id="triageSummaryPatientPhone" class="triage-summary-val">-</strong>
                        </div>
                        <div class="triage-summary-row" id="triageSummaryEmailRow" style="display: none;">
                            <span class="triage-summary-label">E-mail:</span>
                            <strong id="triageSummaryPatientEmail" class="triage-summary-val">-</strong>
                        </div>
                        <div class="triage-summary-row">
                            <span class="triage-summary-label">Demanda / Situação:</span>
                            <strong id="triageSummaryIssue" class="triage-summary-val">-</strong>
                        </div>
                        <div class="triage-summary-row">
                            <span class="triage-summary-label">Nível de Urgência:</span>
                            <strong id="triageSummaryUrgency" class="triage-summary-val" style="color: #FCD34D;">-</strong>
                        </div>
                    </div>

                    <!-- Diagnóstico de Viabilidade Jurídica Prévia -->
                    <div class="triage-viability-card">
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 0.75rem; flex-wrap: wrap; gap: 0.5rem;">
                            <strong style="color: var(--color-white); font-size: 0.95rem; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#E28863" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                                Diagnóstico Jurídico Preliminar
                            </strong>
                            <span class="triage-viability-badge" id="triageViabilityBadge">🟢 Alta Viabilidade com Pedido de Liminar</span>
                        </div>
                        <p id="triageViabilityText" style="color: #D1D5DB; font-size: 0.88rem; line-height: 1.55; margin-bottom: 0;">
                            <!-- Preenchido dinamicamente via JS -->
                        </p>
                    </div>

                    <!-- Checklist de Documentos Recomendados -->
                    <div class="triage-checklist-card">
                        <h4 style="color: var(--color-white); font-size: 1rem; margin-bottom: 0.35rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#25D366" stroke-width="2"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
                            Documentos Recomendados para Agilizar sua Ação:
                        </h4>
                        <p style="color: #9CA3AF; font-size: 0.825rem; margin-bottom: 0.75rem;">
                            Tenha fotos ou arquivos destes itens em mãos para enviar diretamente à Dra. Laura:
                        </p>
                        <ul class="triage-checklist" id="triageChecklist">
                            <!-- Preenchido dinamicamente via JS com base no tipo de caso -->
                        </ul>
                    </div>

                    <!-- Ação Principal: WhatsApp com Caso Pré-Formatado -->
                    <div class="triage-actions-primary">
                        <a href="#" id="triageWhatsappBtn" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg" style="width: 100%; max-width: 500px; justify-content: center; box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                            <span>Falar Agora no WhatsApp da Dra. Laura</span>
                        </a>

                        <!-- Alternativa: Para quem não tem WhatsApp aberto no Desktop -->
                        <div class="triage-alt-contact">
                            <button type="button" class="triage-alt-toggle-btn" id="triageAltToggleBtn">
                                <span>Não está com o WhatsApp aberto agora? Deixe seu contato para retorno rápido</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                            </button>

                            <form id="triageAltForm" class="triage-alt-form" style="display: none;">
                                <input type="hidden" id="triageHiddenCase" name="triage_case" value="">
                                <div class="triage-alt-fields">
                                    <input type="text" id="triageAltContactName" name="name" class="triage-input-sm" placeholder="Seu nome completo" required>
                                    <input type="tel" id="triageAltContactPhone" name="phone" class="triage-input-sm" placeholder="Seu WhatsApp / Telefone (com DDD)" required>
                                    <input type="email" id="triageAltContactEmail" name="email" class="triage-input-sm" placeholder="Seu e-mail (opcional)">
                                    <button type="submit" class="btn btn-primary btn-sm" id="triageAltSubmitBtn">
                                        <span>Solicitar Contato Prioritário</span>
                                    </button>
                                </div>
                                <div id="triageAltFeedback" style="display: none; margin-top: 0.5rem; font-size: 0.85rem; text-align: center;"></div>
                            </form>
                        </div>

                        <button type="button" class="btn btn-outline-white btn-sm" id="triagePrev4" style="margin-top: 0.75rem;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                            <span>Refazer Pré-Avaliação</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================================================
     SEÇÃO 5: SOBRE A ADVOGADA (DRA. LAURA FERREIRA)
     ============================================================================== -->
<section class="section section-alt about-section" id="sobre">
    <div class="container">
        <div class="about-grid">
            
            <!-- Foto dentro de Moldura Executiva Centralizada no Lado Esquerdo -->
            <div class="about-visual reveal">
                <div class="about-frame-wrapper">
                    <div class="about-frame-accent"></div>
                    <div class="about-frame">
                        <img src="/assets/laura_2.webp" alt="Foto da Dra. Laura Ferreira, advogada especialista em Direito Médico e da Saúde" class="about-frame-img" width="1500" height="1500">
                        <div class="about-frame-caption">
                            <span class="about-caption-name">Dra. Laura Ferreira</span>
                            <span class="about-caption-oab">Direito Médico & da Saúde • OAB/RJ</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conteúdo Textual & Pilares -->
            <div class="about-content reveal">
                <span class="badge badge-slate section-tag">Conheça a Advogada</span>
                <h2>Dra. Laura Ferreira</h2>
                <h3 style="font-size: 1.15rem; color: var(--color-terracotta); margin-bottom: 1.25rem;">
                    Vocação, Rigor Técnico e Dedicação Integral à Vida e ao Direito da Saúde
                </h3>

                <p class="lead">
                    O Direito Médico e da Saúde não lida apenas com leis e processos judiciais; lida com pessoas em momentos de extrema vulnerabilidade, mães lutando pelo tratamento de seus filhos e pacientes que não têm tempo a perder.
                </p>

                <p>
                    Com atuação especializada no <strong>Rio de Janeiro</strong> e abrangência em <strong>todo o território nacional</strong>, a <strong>Dra. Laura Ferreira</strong> dedica sua carreira à defesa intransigente de pacientes contra abusos de planos de saúde, omissões estatais no SUS e negligências médicas.
                </p>

                <p>
                    O diferencial do escritório está no atendimento verdadeiramente acolhedor, transparente e célere — descomplicando a linguagem jurídica e utilizando medidas processuais urgentes para que a decisão da Justiça chegue no momento em que ela é vital.
                </p>

                <!-- 4 Pilares -->
                <div class="about-pillars-grid">
                    <div class="about-pillar-card">
                        <div class="pillar-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                        </div>
                        <h4>Rigor Técnico Aprofundado</h4>
                        <p>Domínio das normas da ANS, resoluções médicas e jurisprudência consolidada do STJ e STF.</p>
                    </div>

                    <div class="about-pillar-card">
                        <div class="pillar-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        </div>
                        <h4>Celeridade em Urgências</h4>
                        <p>Prontidão para protocolo de pedidos liminares no mesmo dia em casos com risco à saúde.</p>
                    </div>

                    <div class="about-pillar-card">
                        <div class="pillar-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        </div>
                        <h4>Comunicação Sem Juridiquês</h4>
                        <p>Explicações claras, contato direto e constante atualização sobre cada andamento processual.</p>
                    </div>

                    <div class="about-pillar-card">
                        <div class="pillar-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </div>
                        <h4>Sigilo & Ética Absolutos</h4>
                        <p>Tratamento confidencial e respeitoso de prontuários médicos e dados sensíveis de saúde.</p>
                    </div>
                </div>

                <div class="about-cta-wrapper" style="margin-top: 2rem;">
                    <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura.%20Gostaria%20de%20conversar%20diretamente%20sobre%20meu%20caso." target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                        <span>Conversar com a Dra. Laura</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==============================================================================
     SEÇÃO 6: COMO FUNCIONA O ATENDIMENTO (4 PASSOS)
     ============================================================================== -->
<section class="section" id="como-funciona">
    <!-- Linha Decorativa SVG na Borda Esquerda (Fade no topo e continuidade na base) -->
    <svg class="section-left-line" viewBox="0 0 5 100" preserveAspectRatio="none" aria-hidden="true">
        <defs>
            <linearGradient id="lineGrad-como-funciona" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#A55738" stop-opacity="0"/>
                <stop offset="5%" stop-color="#A55738" stop-opacity="1"/>
                <stop offset="100%" stop-color="#A55738" stop-opacity="1"/>
            </linearGradient>
        </defs>
        <rect x="0" y="0" width="100%" height="100%" fill="url(#lineGrad-como-funciona)" />
    </svg>
    <div class="container">
        <div class="section-header reveal">
            <span class="badge badge-terracotta section-tag">Passo a Passo</span>
            <h2>Como Funciona o Nosso Atendimento?</h2>
            <p>
                Transparência e agilidade desde o primeiro contato. Entenda o caminho até a concessão da sua ordem judicial:
            </p>
        </div>

        <div class="steps-grid mobile-carousel" id="carouselSteps">
            
            <div class="step-card reveal">
                <div class="step-top-row">
                    <div class="step-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    </div>
                    <span class="step-number">01</span>
                </div>
                <h3 class="step-title">Contato Inicial & Envio de Documentos</h3>
                <p class="step-desc">
                    Você entra em contato via WhatsApp ou formulário e nos encaminha a negativa por escrito, o laudo do médico assistente e sua carteirinha do plano ou cartão SUS.
                </p>
            </div>

            <div class="step-card reveal">
                <div class="step-top-row">
                    <div class="step-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><path d="M11 8v6"/><path d="M8 11h6"/></svg>
                    </div>
                    <span class="step-number">02</span>
                </div>
                <h3 class="step-title">Análise Jurídico-Médica Imediata</h3>
                <p class="step-desc">
                    A Dra. Laura analisa criteriosamente a viabilidade legal, a urgência clínica e a jurisprudência atualizada para definir a estratégia processual mais rápida e segura.
                </p>
            </div>

            <div class="step-card reveal">
                <div class="step-top-row">
                    <div class="step-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <span class="step-number">03</span>
                </div>
                <h3 class="step-title">Ação com Pedido de Liminar</h3>
                <p class="step-desc">
                    Elaboração e distribuição imediata da ação perante a Vara Cível, Fazenda Pública ou Plantão Judiciário, requerendo tutela antecipada de urgência em caráter prioritário.
                </p>
            </div>

            <div class="step-card reveal">
                <div class="step-top-row">
                    <div class="step-icon-box">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    </div>
                    <span class="step-number">04</span>
                </div>
                <h3 class="step-title">Cumprimento & Acompanhamento</h3>
                <p class="step-desc">
                    Com a liminar concedida pelo juiz, providenciamos a intimação urgente do plano ou do poder público sob pena de multa diária, garantindo a realização do tratamento.
                </p>
            </div>

        </div>

        <!-- Indicadores / Dots do carrossel mobile -->
        <div class="carousel-dots" data-target="carouselSteps" aria-label="Navegação das etapas do atendimento">
            <button type="button" class="carousel-dot active" data-index="0" aria-label="Etapa 1"></button>
            <button type="button" class="carousel-dot" data-index="1" aria-label="Etapa 2"></button>
            <button type="button" class="carousel-dot" data-index="2" aria-label="Etapa 3"></button>
            <button type="button" class="carousel-dot" data-index="3" aria-label="Etapa 4"></button>
        </div>
    </div>
</section>

<!-- ==============================================================================
     SEÇÃO 7: DESTAQUE EDUCATIVO: LIMINAR NA SAÚDE
     ============================================================================== -->
<section class="section" style="padding-top: 0;">
    <!-- Linha Decorativa SVG na Borda Esquerda (Continuidade da seção acima e fade suave na base) -->
    <svg class="section-left-line" viewBox="0 0 5 100" preserveAspectRatio="none" aria-hidden="true">
        <defs>
            <linearGradient id="lineGrad-liminar" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#A55738" stop-opacity="1"/>
                <stop offset="90%" stop-color="#A55738" stop-opacity="1"/>
                <stop offset="100%" stop-color="#A55738" stop-opacity="0"/>
            </linearGradient>
        </defs>
        <rect x="0" y="0" width="100%" height="100%" fill="url(#lineGrad-liminar)" />
    </svg>
    <div class="container">
        <div class="liminar-box reveal">
            <div class="liminar-grid">
                <div>
                    <span class="urgency-badge">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        <span>A Saúde Não Pode Esperar Anos na Justiça</span>
                    </span>
                    <h2 style="color: var(--color-white); margin-bottom: 1rem; font-size: clamp(1.8rem, 2.8vw, 2.5rem);">
                        O Que é e Como Funciona uma Liminar na Saúde?
                    </h2>
                    <p style="color: #E2E6EC; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        A <strong>Tutela de Urgência (Liminar)</strong>, fundamentada no Artigo 300 do Código de Processo Civil, é uma ordem provisória expedida pelo juiz logo no início do processo. Ela visa compelir o plano de saúde ou o SUS a autorizar uma cirurgia, internar em UTI ou fornecer um remédio essencial <strong>em até 24h ou 48h</strong>, antes mesmo do julgamento final da ação.
                    </p>
                    <p style="color: #CBD5E1; font-size: 0.95rem; line-height: 1.6;">
                        Para obter uma liminar favorável, é crucial a apresentação de um <em>laudo médico minucioso</em> demonstrando a probabilidade do direito (fumus boni iuris) e o perigo de dano irreparável à vida ou à integridade do paciente (periculum in mora).
                    </p>
                </div>

                <div>
                    <div class="liminar-highlight-card">
                        <h4 style="color: var(--color-white); font-size: 1.15rem; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E28863" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            <span>Plantão para Emergências</span>
                        </h4>
                        <p style="color: #D1D5DB; font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem;">
                            Em situações de risco iminente, nossa equipe atua junto ao Plantão Noturno e dos Finais de Semana dos Tribunais de Justiça para assegurar o atendimento médico urgente.
                        </p>
                        <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura.%20Preciso%20de%20uma%20liminar%20urgente%20na%20sa%C3%BAde." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width: 100%;">
                            <span>Acionar Plantão de Liminares</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================================================
     SEÇÃO 8: DEPOIMENTOS DE CLIENTES
     ============================================================================== -->
<section class="section section-alt" id="depoimentos">
    <div class="container">
        <div class="section-header reveal">
            <span class="badge badge-slate section-tag">Reconhecimento & Confiança</span>
            <h2>Relatos de Quem Teve Seu Direito Restabelecido</h2>
            <p>
                A satisfação e o alívio de famílias que puderam contar com uma atuação técnica, ética e resolutiva em momentos de angústia. *(Nomes preservados em respeito ao sigilo profissional e normas da OAB)*.
            </p>
        </div>

        <div class="testimonials-grid mobile-carousel" id="carouselTestimonials">
            
            <div class="testimonial-card reveal">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-quote">
                    "O plano de saúde negou a prótese necessária para a cirurgia da coluna da minha mãe com menos de 3 dias para a internação. Estávamos em desespero. A Dra. Laura conseguiu uma liminar no plantão judicial em menos de 24 horas. Minha mãe operou e está ótima!"
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">MS</div>
                    <div class="author-details">
                        <strong>Mariana S.</strong>
                        <span>Cirurgia e Prótese de Coluna • Rio de Janeiro/RJ</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card reveal">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-quote">
                    "Meu filho foi diagnosticado com TEA e o convênio limitava a fonoaudiologia e o método ABA a pouquíssimas sessões mensais. A Dra. Laura explicou tudo com muita sensibilidade e garantiu na Justiça a cobertura ilimitada de todas as terapias indicadas."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">RF</div>
                    <div class="author-details">
                        <strong>Rodrigo F.</strong>
                        <span>Tratamento Multidisciplinar Autismo • Niterói/RJ</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-card reveal">
                <div class="testimonial-stars">★★★★★</div>
                <p class="testimonial-quote">
                    "Minha medicação oncológica de alto custo havia sido negada sob a alegação de estar fora do rol da ANS. Graças à intervenção rápida da Dra. Laura Ferreira, o medicamento foi liberado integralmente pelo plano e pude continuar meu tratamento com tranquilidade."
                </p>
                <div class="testimonial-author">
                    <div class="author-avatar">CL</div>
                    <div class="author-details">
                        <strong>Carla L.</strong>
                        <span>Medicamento Oncológico • Atendimento Nacional</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Indicadores / Dots do carrossel mobile -->
        <div class="carousel-dots" data-target="carouselTestimonials" aria-label="Navegação dos relatos de clientes">
            <button type="button" class="carousel-dot active" data-index="0" aria-label="Depoimento 1"></button>
            <button type="button" class="carousel-dot" data-index="1" aria-label="Depoimento 2"></button>
            <button type="button" class="carousel-dot" data-index="2" aria-label="Depoimento 3"></button>
        </div>
    </div>
</section>

<!-- ==============================================================================
     SEÇÃO 9: PERGUNTAS FREQUENTES (FAQ COM ACCORDION)
     ============================================================================== -->
<section class="section" id="faq">
    <!-- Linha Decorativa SVG na Borda Esquerda (5px desktop / 2.5px mobile) -->
    <svg class="section-left-line" viewBox="0 0 5 100" preserveAspectRatio="none" aria-hidden="true">
        <defs>
            <linearGradient id="lineGrad-faq" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#A55738" stop-opacity="0.15"/>
                <stop offset="6%" stop-color="#A55738" stop-opacity="1"/>
                <stop offset="94%" stop-color="#A55738" stop-opacity="1"/>
                <stop offset="100%" stop-color="#A55738" stop-opacity="0.15"/>
            </linearGradient>
        </defs>
        <rect x="0" y="0" width="100%" height="100%" fill="url(#lineGrad-faq)" />
    </svg>
    <div class="container">
        <div class="section-header reveal">
            <span class="badge badge-terracotta section-tag">Esclarecimento de Dúvidas</span>
            <h2>Perguntas Frequentes Sobre Direito à Saúde</h2>
            <p>
                Respostas diretas e fundamentadas para as principais dúvidas de pacientes e familiares:
            </p>
        </div>

        <div class="faq-container reveal">
            
            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">
                    <div class="faq-question-content">
                        <span class="faq-category-tag">Negativa de Plano</span>
                        <span class="faq-question-title">O plano de saúde negou minha cirurgia ou exame. O que fazer imediatamente?</span>
                    </div>
                    <div class="faq-icon">+</div>
                </button>
                <div class="faq-answer">
                    <p>
                        A primeira providência é exigir do plano a <strong>negativa formal por escrito</strong>, contendo a justificativa e o número de protocolo (o plano é obrigado por lei a fornecer). Com a negativa e um relatório detalhado do seu médico demonstrando a necessidade clínica do procedimento, procure imediatamente um advogado especialista em Direito da Saúde para ajuizar uma Ação com Pedido de Liminar.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">
                    <div class="faq-question-content">
                        <span class="faq-category-tag">Urgência & Prazos</span>
                        <span class="faq-question-title">Quanto tempo demora para sair uma decisão liminar na área da saúde?</span>
                    </div>
                    <div class="faq-icon">+</div>
                </button>
                <div class="faq-answer">
                    <p>
                        Em situações graves ou de urgência comprovada pelo laudo médico, o juiz analisa e decide o pedido de liminar geralmente <strong>entre 24h e 48 horas</strong> após a distribuição do processo. Em casos de risco iminente de morte durante a noite ou feriados, o pedido é levado ao Plantão Judiciário, sendo apreciado em poucas horas.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">
                    <div class="faq-question-content">
                        <span class="faq-category-tag">Rol da ANS</span>
                        <span class="faq-question-title">O plano pode se recusar a cobrir medicamento por estar fora do Rol da ANS?</span>
                    </div>
                    <div class="faq-icon">+</div>
                </button>
                <div class="faq-answer">
                    <p>
                        Não de forma absoluta. A Lei nº 14.454/2022 estabeleceu critérios expressos para que tratamentos e remédios fora do rol da ANS sejam custeados pelos planos, bastando que haja comprovação de eficácia científica, recomendação da Conitec ou de órgãos internacionais de saúde de renome. O médico assistente é o responsável por determinar o melhor tratamento, não o convênio.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">
                    <div class="faq-question-content">
                        <span class="faq-category-tag">Terapias & Autismo (TEA)</span>
                        <span class="faq-question-title">O plano pode limitar as sessões de terapia para crianças com Autismo (TEA)?</span>
                    </div>
                    <div class="faq-icon">+</div>
                </button>
                <div class="faq-answer">
                    <p>
                        Não. A Resolução Normativa nº 541 da ANS pôs fim a qualquer limitação de número de consultas e sessões com psicólogos, fonoaudiólogos, terapeutas ocupacionais e fisioterapeutas para pacientes diagnosticados com TEA ou outros transtornos globais do desenvolvimento. Qualquer negativa com base em "número de sessões" é flagrantemente abusiva e ilegal.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">
                    <div class="faq-question-content">
                        <span class="faq-category-tag">Fornecimento SUS</span>
                        <span class="faq-question-title">Como conseguir medicamentos de alto custo pelo SUS?</span>
                    </div>
                    <div class="faq-icon">+</div>
                </button>
                <div class="faq-answer">
                    <p>
                        Para fornecimento pelo SUS, de acordo com as teses do STJ e STF, é necessário comprovar: a imprescindibilidade do medicamento e a ineficácia dos fármacos fornecidos pelo SUS para aquela patologia; a incapacidade financeira do paciente para arcar com o custo; e a existência de registro do medicamento na ANVISA. Com tais requisitos preenchidos no laudo médico, a Justiça determina o fornecimento pelo Estado.
                    </p>
                </div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">
                    <div class="faq-question-content">
                        <span class="faq-category-tag">Atendimento Nacional</span>
                        <span class="faq-question-title">Moro fora do Rio de Janeiro. Como funciona o atendimento online?</span>
                    </div>
                    <div class="faq-icon">+</div>
                </button>
                <div class="faq-answer">
                    <p>
                        Hoje o Poder Judiciário brasileiro opera com processos 100% eletrônicos (PJe, e-Proc, Projudi). A Dra. Laura Ferreira atende clientes em todo o Brasil por videoconferência, telefone e WhatsApp. Toda a documentação e procuração é assinada digitalmente com validade jurídica, permitindo uma atuação rápida em qualquer tribunal do país.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==============================================================================
     SEÇÃO 10: ARTIGOS & GUIA INFORMATIVO (SEO CONTENT HUB)
     ============================================================================== -->
<section class="section section-alt" id="artigos">
    <div class="container">
        <div class="section-header reveal">
            <span class="badge badge-slate section-tag">Conteúdo Informativo</span>
            <h2>Artigos & Orientações Jurídicas</h2>
            <p>
                Conhecimento e informação clara para ajudar você a entender seus direitos fundamentais na saúde:
            </p>
        </div>

        <div class="articles-grid mobile-carousel" id="carouselArticles">
            
            <!-- Artigo 1: Reembolso -->
            <article class="article-card reveal">
                <a href="/artigos/pagou-pelo-tratamento-reembolso.php" class="article-card-thumb-link" aria-label="Ler: Pagou pelo tratamento? Veja quando há direito ao reembolso!">
                    <div class="article-card-thumb">
                        <img src="/assets/artigos/pagou-pelo-tratamento-reembolso.webp" alt="Pagou pelo tratamento? Veja quando há direito ao reembolso!" loading="lazy" width="600" height="340">
                        <span class="article-thumb-badge">Direito dos Planos</span>
                    </div>
                </a>
                <div class="article-card-body">
                    <div class="article-meta">
                        <span>Direito dos Planos</span>
                        <span>•</span>
                        <span>5 min de leitura</span>
                    </div>
                    <h3 class="article-card-title">Pagou pelo tratamento? Veja quando há direito ao reembolso!</h3>
                    <p class="article-card-desc">
                        Em determinadas situações, o plano de saúde pode ser obrigado a ressarcir despesas médicas assumidas pelo próprio paciente.
                    </p>
                    <a href="/artigos/pagou-pelo-tratamento-reembolso.php" class="area-card-cta">
                        <span>Ler Artigo Completo</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>

            <!-- Artigo 2: Autismo -->
            <article class="article-card reveal">
                <a href="/artigos/autismo-e-planos-de-saude.php" class="article-card-thumb-link" aria-label="Ler: Autismo e Planos de Saúde: O Que Você Precisa Saber">
                    <div class="article-card-thumb">
                        <img src="/assets/artigos/autismo-e-planos-de-saude.webp" alt="Autismo e Planos de Saúde: O Que Você Precisa Saber" loading="lazy" width="600" height="340">
                        <span class="article-thumb-badge">Terapias &amp; TEA</span>
                    </div>
                </a>
                <div class="article-card-body">
                    <div class="article-meta">
                        <span>Terapias &amp; TEA</span>
                        <span>•</span>
                        <span>4 min de leitura</span>
                    </div>
                    <h3 class="article-card-title">Autismo e Planos de Saúde: O Que Você Precisa Saber</h3>
                    <p class="article-card-desc">
                        Entenda os principais direitos das pessoas com TEA e como agir diante de negativas, limitações e práticas abusivas dos planos.
                    </p>
                    <a href="/artigos/autismo-e-planos-de-saude.php" class="area-card-cta">
                        <span>Ler Artigo Completo</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>

            <!-- Artigo 3: Reajustes -->
            <article class="article-card reveal">
                <a href="/artigos/reajuste-plano-de-saude-quando-questionar.php" class="article-card-thumb-link" aria-label="Ler: Reajuste de plano de saúde: quando questionar?">
                    <div class="article-card-thumb">
                        <img src="/assets/artigos/reajuste-plano-de-saude-quando-questionar.webp" alt="Reajuste de plano de saúde: quando questionar?" loading="lazy" width="600" height="340">
                        <span class="article-thumb-badge">Reajustes &amp; Consumidor</span>
                    </div>
                </a>
                <div class="article-card-body">
                    <div class="article-meta">
                        <span>Reajustes &amp; Consumidor</span>
                        <span>•</span>
                        <span>5 min de leitura</span>
                    </div>
                    <h3 class="article-card-title">Reajuste de plano de saúde: quando questionar?</h3>
                    <p class="article-card-desc">
                        Saiba quais fatores influenciam os reajustes, as regras impostas pela ANS e pelo Estatuto do Idoso e quando o aumento merece atenção.
                    </p>
                    <a href="/artigos/reajuste-plano-de-saude-quando-questionar.php" class="area-card-cta">
                        <span>Ler Artigo Completo</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>

            <!-- Artigo 4: Coparticipação -->
            <article class="article-card reveal">
                <a href="/artigos/custos-plano-coparticipacao.php" class="article-card-thumb-link" aria-label="Ler: Quando os custos do plano começam a comprometer o tratamento">
                    <div class="article-card-thumb">
                        <img src="/assets/artigos/custos-plano-coparticipacao.webp" alt="Quando os custos do plano começam a comprometer o tratamento" loading="lazy" width="600" height="340">
                        <span class="article-thumb-badge">Coparticipação</span>
                    </div>
                </a>
                <div class="article-card-body">
                    <div class="article-meta">
                        <span>Coparticipação &amp; Custos</span>
                        <span>•</span>
                        <span>4 min de leitura</span>
                    </div>
                    <h3 class="article-card-title">Quando os custos do plano começam a comprometer o tratamento</h3>
                    <p class="article-card-desc">
                        Entenda como funcionam as coparticipações e por que cobranças excessivas têm sido cada vez mais questionadas judicialmente.
                    </p>
                    <a href="/artigos/custos-plano-coparticipacao.php" class="area-card-cta">
                        <span>Ler Artigo Completo</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>

            <!-- Artigo 5: Medicamentos de Alto Custo -->
            <article class="article-card reveal">
                <a href="/artigos/medicamento-alto-custo-o-que-fazer.php" class="article-card-thumb-link" aria-label="Ler: Plano de saúde negou medicamento de alto custo. O que fazer?">
                    <div class="article-card-thumb">
                        <img src="/assets/artigos/medicamento-alto-custo-o-que-fazer.webp" alt="Plano de saúde negou medicamento de alto custo. O que fazer?" loading="lazy" width="600" height="340">
                        <span class="article-thumb-badge">Medicamentos</span>
                    </div>
                </a>
                <div class="article-card-body">
                    <div class="article-meta">
                        <span>Medicamentos de Alto Custo</span>
                        <span>•</span>
                        <span>4 min de leitura</span>
                    </div>
                    <h3 class="article-card-title">Plano de saúde negou medicamento de alto custo. O que fazer?</h3>
                    <p class="article-card-desc">
                        Saiba o que fazer quando a negativa coloca o sucesso do tratamento em risco e conheça a jurisprudência para liberação imediata.
                    </p>
                    <a href="/artigos/medicamento-alto-custo-o-que-fazer.php" class="area-card-cta">
                        <span>Ler Artigo Completo</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>

            <!-- Artigo 6: Cirurgia Urgente sem Especialista -->
            <article class="article-card reveal">
                <a href="/artigos/cirurgia-urgente-sem-especialista.php" class="article-card-thumb-link" aria-label="Ler: Precisa fazer uma cirurgia urgente, mas seu plano não tem especialista?">
                    <div class="article-card-thumb">
                        <img src="/assets/artigos/cirurgia-urgente-sem-especialista.webp" alt="Precisa fazer uma cirurgia urgente, mas seu plano não tem especialista?" loading="lazy" width="600" height="340">
                        <span class="article-thumb-badge">Cirurgias &amp; Urgências</span>
                    </div>
                </a>
                <div class="article-card-body">
                    <div class="article-meta">
                        <span>Cirurgias &amp; Urgências</span>
                        <span>•</span>
                        <span>4 min de leitura</span>
                    </div>
                    <h3 class="article-card-title">Precisa fazer uma cirurgia urgente, mas seu plano não tem especialista?</h3>
                    <p class="article-card-desc">
                        Entenda quais são os seus direitos como paciente e saiba como a Justiça determina o custeio em hospitais e médicos particulares.
                    </p>
                    <a href="/artigos/cirurgia-urgente-sem-especialista.php" class="area-card-cta">
                        <span>Ler Artigo Completo</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </article>

        </div>

        <!-- Indicadores / Dots do carrossel mobile -->
        <div class="carousel-dots" data-target="carouselArticles" aria-label="Navegação dos artigos jurídicos">
            <button type="button" class="carousel-dot active" data-index="0" aria-label="Artigo 1"></button>
            <button type="button" class="carousel-dot" data-index="1" aria-label="Artigo 2"></button>
            <button type="button" class="carousel-dot" data-index="2" aria-label="Artigo 3"></button>
            <button type="button" class="carousel-dot" data-index="3" aria-label="Artigo 4"></button>
            <button type="button" class="carousel-dot" data-index="4" aria-label="Artigo 5"></button>
            <button type="button" class="carousel-dot" data-index="5" aria-label="Artigo 6"></button>
        </div>

        <!-- Botão para a Página Geral de Artigos -->
        <div style="text-align: center; margin-top: 2.75rem;">
            <a href="/artigos/" class="btn btn-outline" style="padding: 0.95rem 2rem; font-size: 1rem; border-color: var(--color-terracotta); color: var(--color-terracotta);">
                <span>Acessar Todos os Artigos &amp; Orientações</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ==============================================================================
     SEÇÃO 11: CONTATO DIRETO & FORMULÁRIO
     ============================================================================== -->
<section class="section" id="contato">
    <!-- Linha Decorativa SVG na Borda Esquerda (5px desktop / 2.5px mobile) -->
    <svg class="section-left-line" viewBox="0 0 5 100" preserveAspectRatio="none" aria-hidden="true">
        <defs>
            <linearGradient id="lineGrad-contato" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#A55738" stop-opacity="0.15"/>
                <stop offset="6%" stop-color="#A55738" stop-opacity="1"/>
                <stop offset="94%" stop-color="#A55738" stop-opacity="1"/>
                <stop offset="100%" stop-color="#A55738" stop-opacity="0.15"/>
            </linearGradient>
        </defs>
        <rect x="0" y="0" width="100%" height="100%" fill="url(#lineGrad-contato)" />
    </svg>
    <div class="container">
        <div class="contact-grid">
            
            <!-- Card de Informações Oficiais -->
            <div class="contact-info-card reveal">
                <span class="badge badge-ivory section-tag" style="align-self: flex-start; margin-bottom: 1rem;">Canais Oficiais</span>
                <h2 style="color: var(--color-white); font-size: 2.2rem; margin-bottom: 1rem;">
                    Fale Diretamente Conosco
                </h2>
                <p style="color: var(--color-ivory); font-size: 0.95rem; line-height: 1.65;">
                    Seja para uma ação emergencial com pedido de liminar ou para tirar dúvidas preventivas, estamos à disposição para analisar sua situação com a celeridade e o cuidado que ela exige.
                </p>

                <div class="contact-info-list">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                        </div>
                        <div>
                            <span class="contact-info-label">WhatsApp de Atendimento & Urgências</span>
                            <div class="contact-info-val">
                                <a href="https://wa.me/5521993292332" target="_blank" style="color: #25D366; text-decoration: none;">(21) 99329-2332</a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <span class="contact-info-label">E-mail Profissional</span>
                            <div class="contact-info-val">
                                <a href="mailto:lauraferreraadv@gmail.com" style="color: var(--color-white); text-decoration: none;">lauraferreraadv@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </div>
                        <div>
                            <span class="contact-info-label">Instagram Oficial</span>
                            <div class="contact-info-val">
                                <a href="https://www.instagram.com/lauraferreiraadv/" target="_blank" style="color: #E28863; text-decoration: none;">@lauraferreiraadv</a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <span class="contact-info-label">Localização & Abrangência</span>
                            <div class="contact-info-val" style="font-size: 0.9rem;">
                                Rio de Janeiro - RJ • Atendimento Online em todo o Brasil
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-top: auto; padding-top: 1.5rem; border-top: 1px solid rgba(234, 224, 213, 0.15);">
                    <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura%20Ferreira.%20Gostaria%20de%20um%20atendimento%20jur%C3%ADdico." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width: 100%;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2z"/></svg>
                        <span>Abrir Conversa Direta no WhatsApp</span>
                    </a>
                </div>
            </div>

            <!-- Formulário de Contato -->
            <div class="contact-form-card reveal">
                <span class="badge badge-terracotta section-tag" style="align-self: flex-start; margin-bottom: 0.85rem;">Canal Direto de Análise</span>
                <h3 style="font-size: 1.5rem; color: var(--color-slate-dark); margin-bottom: 0.5rem;">
                    Envie os Detalhes do Seu Caso
                </h3>
                <p style="color: #6B7280; font-size: 0.9rem; margin-bottom: 1.75rem;">
                    Preencha os campos abaixo com sigilo garantido. Retornaremos o mais breve possível.
                </p>

                <form id="contactForm">
                    <input type="hidden" name="triage_case" id="triageHiddenCase" value="">

                    <div class="form-group">
                        <label for="formName" class="form-label">Seu Nome Completo *</label>
                        <input type="text" id="formName" name="name" class="form-control" placeholder="Ex: Maria Silva" required>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <div class="form-group">
                            <label for="formPhone" class="form-label">WhatsApp com DDD *</label>
                            <input type="tel" id="formPhone" name="phone" class="form-control" placeholder="Ex: (21) 99999-9999" required>
                        </div>
                        <div class="form-group">
                            <label for="formEmail" class="form-label">Seu Melhor E-mail *</label>
                            <input type="email" id="formEmail" name="email" class="form-control" placeholder="Ex: seuemail@exemplo.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formSubject" class="form-label">Assunto Principal *</label>
                        <select id="formSubject" name="subject" class="form-control" required>
                            <option value="">Selecione o assunto...</option>
                            <option value="Negativa de Cirurgia ou Exame">Negativa de Cirurgia ou Exame</option>
                            <option value="Medicamento de Alto Custo">Medicamento de Alto Custo (Planos ou SUS)</option>
                            <option value="Autismo e Terapias (TEA)">Terapias para Autismo (TEA)</option>
                            <option value="Erro Médico ou Hospitalar">Erro Médico ou Hospitalar</option>
                            <option value="Reajuste Abusivo de Plano">Reajuste Abusivo de Plano de Saúde</option>
                            <option value="Assessoria Jurídica para Médicos">Assessoria Jurídica para Médicos/Clínicas</option>
                            <option value="Outro Assunto em Saúde">Outro Assunto em Saúde</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="formMessage" class="form-label">Breve Resumo do Ocorrido *</label>
                        <textarea id="formMessage" name="message" class="form-control" placeholder="Descreva brevemente o que aconteceu, nome do plano ou se é SUS, se possui laudo médico em mãos e se há prazo limite..." required></textarea>
                    </div>

                    <div style="margin-top: 1.5rem;">
                        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                            <span>Enviar Mensagem para Análise</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        </button>
                    </div>

                    <div class="form-privacy-note">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        <span>Atendimento sigiloso sob estrito cumprimento da LGPD e do Código de Ética da OAB.</span>
                    </div>

                    <div id="formStatusMsg" class="form-status-msg"></div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
