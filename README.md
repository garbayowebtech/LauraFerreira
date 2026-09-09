# Dra. Laura Ferreira | Direito Médico e da Saúde

Website institucional e portal de conteúdo jurídico de alta conversão desenvolvido para a advogada **Dra. Laura Ferreira**, especialista em **Direito Médico e da Saúde** (OAB/RJ).

O projeto é construído com arquitetura **Server-Side Rendering (SSR)** em PHP moderno, priorizando máxima pontuação no Google Core Web Vitals, indexação completa em motores de busca (Googlebot), conformidade estrita com o Provimento 205/2021 da OAB e experiência do usuário (UX) premium para desktop e dispositivos móveis.

---

## 🚀 Principais Recursos

1. **Hero de Autoridade**:
   - Imagem de fundo jurídica com sobreposição escurecida para legibilidade impecável;
   - Destaque em plantão de liminares de urgência (24h a 48h);
   - Call to action duplo direcionado para triagem online e atendimento imediato via WhatsApp.

2. **Assistente Interativo de Triagem & Pré-Avaliação (`#triagem`)**:
   - Fluxo estruturado em 4 etapas:
     - **Etapa 1**: Seleção da demanda jurídica (cirurgias negadas, medicamentos de alto custo, autismo/TEA, erro médico, reajustes abusivos e assessoria médica);
     - **Etapa 2**: Coleta qualificada com validação de **Nome**, **Idade**, **Telefone/WhatsApp** (obrigatório, com máscara dinâmica e validação de DDD) e **E-mail** (opcional, com validação de formato RFC);
     - **Etapa 3**: Nível de urgência condicional (com auto-avanço tátil de 280ms e regra de limitação preventiva para reajustes e assessoria médica);
     - **Etapa 4**: Diagnóstico prévio fundamentado em jurisprudência do STJ/STF, checklist personalizado de documentos necessários e geração de mensagem pré-formatada para o WhatsApp da advogada.

3. **Hub Central de Artigos & Guias (`/artigos/`)**:
   - Acervo completo dos 6 artigos com imagens locais em formato otimizado WebP;
   - Filtro interativo por categorias (*Planos de Saúde, Medicamentos, Autismo / TEA, Reajustes, Cirurgias*);
   - Páginas individuais com tipografia editorial, marcação Schema.org `Article` (JSON-LD), tempo estimado de leitura e CTAs integrados.

4. **Design Responsivo & Mobile First**:
   - Menu drawer moderno e acessível (com trap de foco e fechamento em overlay/Escape);
   - Carrosséis touch centralizados nos dispositivos móveis com indicadores dinâmicos sincronizados;
   - Centralização ergonômica de botões de ação e botão flutuante de voltar ao topo;
   - Animações suaves de revelação progressiva (`.reveal`) e rolagem lenta com curva suave (`easeInOutCubic`).

5. **Segurança & Privacidade**:
   - Conformidade total com a LGPD e sigilo profissional da advocacia;
   - Tratamento e sanitização de dados em `send_lead.php`;
   - Arquivo `.htaccess` com cabeçalhos de segurança, compressão Gzip e cache estático para produção.

---

## 📁 Estrutura de Diretórios

```
Laura_ferreira/
├── .htaccess                   # Regras Apache, URLs amigáveis, segurança e cache
├── .gitignore                  # Exclusão de arquivos temporários e dados sensíveis
├── README.md                   # Documentação institucional do projeto
├── index.php                   # Landing page principal SSR com todas as seções
├── router.php                  # Roteador para servidor de desenvolvimento local
├── sitemap.php                 # Gerador dinâmico de sitemap.xml
├── robots.txt                  # Diretrizes de rastreamento para buscadores
├── send_lead.php               # Backend de processamento e registro de leads
├── start_server.bat            # Script para inicialização rápida local em 1 clique
├── includes/
│   ├── header.php              # Meta tags SEO, Open Graph, Schema.org e Navbar
│   └── footer.php              # Rodapé, avisos éticos da OAB e widgets flutuantes
├── artigos/
│   ├── index.php               # Hub central de artigos com filtros de categoria
│   ├── pagou-pelo-tratamento-reembolso.php
│   ├── autismo-e-planos-de-saude.php
│   ├── reajuste-plano-de-saude-quando-questionar.php
│   ├── custos-plano-coparticipacao.php
│   ├── medicamento-alto-custo-o-que-fazer.php
│   └── cirurgia-urgente-sem-especialista.php
├── assets/
│   ├── logo_1.png              # Logotipo para fundos claros
│   ├── logo_2.png              # Logotipo para fundos escuros
│   ├── bg_pattern.webp         # Monograma institucional oficial
│   ├── hero-bg.jpg             # Arquitetura jurídica de fundo
│   ├── laura_1.png / laura_2.png
│   └── artigos/*.webp          # Capas originais dos 6 artigos
├── css/
│   ├── variables.css           # Tokens de design (paleta oficial e espaçamentos)
│   ├── global.css              # Reset, tipografia base e utilitários
│   └── main.css                # Estilos estruturais de todas as seções e responsividade
├── js/
│   ├── main.js                 # Navegação, menu drawer, acordeões e rolagem suave
│   └── triage.js               # Assistente de triagem, máscaras e integração WhatsApp
└── data/
    └── .gitkeep                # Diretório para armazenamento local de leads
```

---

## 💻 Como Rodar Localmente

### Pré-requisitos
- PHP 8.0 ou superior instalado no sistema operacional.

### Inicialização
Execute no terminal da pasta do projeto:
```bash
php -S 127.0.0.1:8088 router.php
```
Ou dê dois cliques no arquivo executável `start_server.bat`.

Abra seu navegador em [http://127.0.0.1:8088](http://127.0.0.1:8088).

---

## ⚖️ Conformidade Ética OAB
Website estruturado em estrita conformidade com o **Código de Ética e Disciplina da OAB** e o **Provimento nº 205/2021** do Conselho Federal da OAB (CFOAB), mantendo caráter exclusivamente informativo, educativo e sóbrio.

---

## 🛠️ Desenvolvimento
Desenvolvido por **[Garbayo WebTech](https://garbayowebtech.com)**.
