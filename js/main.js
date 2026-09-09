/**
 * DRA. LAURA FERREIRA | DIREITO MÉDICO E DA SAÚDE
 * Main Interactive Features, Navigation, FAQ, Animations & Contact Form
 */

document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initMobileMenu();
    initFaqAccordion();
    initScrollAnimations();
    initSmoothAnchorScroll();
    initBackToTop();
    initContactForm();
    initMobileCarousels();
});

/* 1. Header encolhido ao rolar a página */
function initHeaderScroll() {
    const header = document.querySelector('.site-header');
    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }, { passive: true });
}

/* 2. Menu Mobile Drawer (Estilo Pequeno Canguru) */
function initMobileMenu() {
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const mobileOverlay = document.getElementById('mobileMenuOverlay');
    const drawerCloseBtn = document.getElementById('mobileDrawerClose');
    const drawerNavLinks = document.querySelectorAll('.mobile-nav-item, .mobile-drawer__btn');

    function openMobileMenu() {
        if (mobileDrawer && mobileOverlay) {
            mobileDrawer.classList.add('open');
            mobileOverlay.classList.add('open');
            if (mobileBtn) {
                mobileBtn.classList.add('active');
                mobileBtn.setAttribute('aria-expanded', 'true');
            }
            mobileDrawer.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeMobileMenu() {
        if (mobileDrawer && mobileOverlay) {
            mobileDrawer.classList.remove('open');
            mobileOverlay.classList.remove('open');
            if (mobileBtn) {
                mobileBtn.classList.remove('active');
                mobileBtn.setAttribute('aria-expanded', 'false');
            }
            mobileDrawer.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    }

    if (mobileBtn) {
        mobileBtn.addEventListener('click', () => {
            const isOpen = mobileDrawer && mobileDrawer.classList.contains('open');
            if (isOpen) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    if (drawerCloseBtn) {
        drawerCloseBtn.addEventListener('click', closeMobileMenu);
    }

    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', closeMobileMenu);
    }

    drawerNavLinks.forEach(link => {
        link.addEventListener('click', () => {
            closeMobileMenu();
        });
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileDrawer && mobileDrawer.classList.contains('open')) {
            closeMobileMenu();
        }
    });
}

/* 3. FAQ Accordion */
function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');
    if (!faqItems.length) return;

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');

        if (!question || !answer) return;

        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');

            // Fecha outros acordeões abertos
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                    const otherAnswer = otherItem.querySelector('.faq-answer');
                    if (otherAnswer) otherAnswer.style.maxHeight = null;
                    const otherBtn = otherItem.querySelector('.faq-question');
                    if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                }
            });

            if (isActive) {
                item.classList.remove('active');
                answer.style.maxHeight = null;
                question.setAttribute('aria-expanded', 'false');
            } else {
                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 40 + 'px';
                question.setAttribute('aria-expanded', 'true');
            }
        });
    });
}

/* Helper: Rolagem Suave Personalizada Mais Lenta e Elegante (950ms) */
function smoothScrollToY(targetY, duration = 950) {
    const startY = window.pageYOffset || document.documentElement.scrollTop;
    const diff = targetY - startY;
    if (Math.abs(diff) < 2) return;
    const startTime = performance.now();

    function easeInOutCubic(t) {
        return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
    }

    function scrollStep(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const ease = easeInOutCubic(progress);

        window.scrollTo(0, startY + diff * ease);

        if (progress < 1) {
            requestAnimationFrame(scrollStep);
        }
    }

    requestAnimationFrame(scrollStep);
}

/* 4. IntersectionObserver para Revelação Suave (Animação mais lenta e fluida) */
function initScrollAnimations() {
    const targetSelectors = [
        '.reveal',
        '.section-header',
        '.about-grid',
        '.liminar-box',
        '.triage-box',
        '.contact-grid'
    ];
    const elements = document.querySelectorAll(targetSelectors.join(', '));
    if (!elements.length) return;

    elements.forEach(el => {
        if (!el.classList.contains('reveal')) {
            el.classList.add('reveal');
        }
    });

    if (!('IntersectionObserver' in window)) {
        elements.forEach(el => el.classList.add('active'));
        return;
    }

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                obs.unobserve(entry.target);
            }
        });
    }, {
        root: null,
        threshold: 0.08,
        rootMargin: '0px 0px -30px 0px'
    });

    elements.forEach(el => observer.observe(el));
}

/* 5. Voltar ao Topo com Rolagem Mais Lenta */
function initBackToTop() {
    const btn = document.querySelector('.back-to-top');
    if (!btn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 450) {
            btn.classList.add('visible');
        } else {
            btn.classList.remove('visible');
        }
    }, { passive: true });

    btn.addEventListener('click', (e) => {
        e.preventDefault();
        smoothScrollToY(0, 950);
    });
}

/* 5.1 Links Âncora Internos com Rolagem Suave e Lenta */
function initSmoothAnchorScroll() {
    const links = document.querySelectorAll('a[href^="#"], a[href^="/#"]');
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const rawHref = link.getAttribute('href');
            if (!rawHref) return;

            // Se for link para outra página, segue navegação normal
            if (rawHref.startsWith('/#') && window.location.pathname !== '/' && window.location.pathname !== '/index.php') {
                return;
            }

            const hash = rawHref.startsWith('/#') ? rawHref.substring(1) : rawHref;
            if (!hash || hash === '#' || hash === '#!') return;

            try {
                const target = document.querySelector(hash);
                if (target) {
                    e.preventDefault();
                    const header = document.querySelector('.site-header');
                    const headerHeight = header ? header.offsetHeight : 80;
                    const targetY = target.getBoundingClientRect().top + (window.pageYOffset || document.documentElement.scrollTop) - (headerHeight - 8);
                    smoothScrollToY(Math.max(0, targetY), 900);

                    if (history.pushState) {
                        history.pushState(null, null, hash);
                    }
                }
            } catch (err) {
                // seletor não é CSS ID válido, mantém padrão
            }
        });
    });
}

/* 6. Formulário de Contato com Envio Inteligente */
function initContactForm() {
    const form = document.getElementById('contactForm');
    const statusMsg = document.getElementById('formStatusMsg');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = `<span>Enviando dados...</span>`;

        const formData = new FormData(form);

        try {
            const response = await fetch('send_lead.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                statusMsg.className = 'form-status-msg success';
                statusMsg.innerHTML = `<strong>Mensagem recebida com sucesso!</strong> A Dra. Laura ou sua equipe entrará em contato em breve. Se o seu caso for urgente, recomendamos também o envio direto pelo WhatsApp.`;
                form.reset();
            } else {
                throw new Error(result.message || 'Erro ao processar contato.');
            }
        } catch (error) {
            statusMsg.className = 'form-status-msg error';
            statusMsg.innerHTML = `<strong>Aviso:</strong> ${error.message} <br>Você pode falar diretamente com a Dra. Laura via WhatsApp: <a href="https://wa.me/5521993292332?text=Ol%C3%A1%2C%20Dra.%20Laura%20Ferreira.%20Gostaria%20de%20uma%20orienta%C3%A7%C3%A3o%20sobre%20Direito%20da%20Sa%C3%BAde." target="_blank" style="text-decoration: underline; color: inherit; font-weight: bold;">Clique aqui para abrir a conversa</a>.`;
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }
    });
}

/* 7. Carrosséis em Dispositivos Móveis (Como Funciona, Depoimentos, Artigos) */
function initMobileCarousels() {
    const carousels = document.querySelectorAll('.mobile-carousel');
    if (!carousels.length) return;

    carousels.forEach(carousel => {
        const carouselId = carousel.id;
        const dotsContainer = document.querySelector(`.carousel-dots[data-target="${carouselId}"]`);
        if (!dotsContainer) return;

        const dots = dotsContainer.querySelectorAll('.carousel-dot');
        const cards = Array.from(carousel.children);
        if (!dots.length || !cards.length) return;

        // Click no dot navega até o card correspondente centralizado
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                const card = cards[index];
                if (!card) return;

                const targetScroll = card.offsetLeft - (carousel.clientWidth - card.clientWidth) / 2;

                carousel.scrollTo({
                    left: targetScroll,
                    behavior: 'smooth'
                });
            });
        });

        // Sincronização do dot ativo ao deslizar (baseado no centro do viewport)
        let isTicking = false;
        const updateActiveDot = () => {
            const carouselRect = carousel.getBoundingClientRect();
            const carouselCenterX = carouselRect.left + carouselRect.width / 2;

            let closestIndex = 0;
            let minDiff = Infinity;

            cards.forEach((card, idx) => {
                const cardRect = card.getBoundingClientRect();
                const cardCenterX = cardRect.left + cardRect.width / 2;
                const diff = Math.abs(cardCenterX - carouselCenterX);
                if (diff < minDiff) {
                    minDiff = diff;
                    closestIndex = idx;
                }
            });

            dots.forEach((dot, idx) => {
                if (idx === closestIndex) {
                    dot.classList.add('active');
                    dot.setAttribute('aria-current', 'true');
                } else {
                    dot.classList.remove('active');
                    dot.removeAttribute('aria-current');
                }
            });

            isTicking = false;
        };

        carousel.addEventListener('scroll', () => {
            if (!isTicking) {
                requestAnimationFrame(updateActiveDot);
                isTicking = true;
            }
        }, { passive: true });

        window.addEventListener('resize', () => {
            if (!isTicking) {
                requestAnimationFrame(updateActiveDot);
                isTicking = true;
            }
        }, { passive: true });

        // Inicializa o estado dos dots
        updateActiveDot();
    });
}

