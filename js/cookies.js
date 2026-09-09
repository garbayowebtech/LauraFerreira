/**
 * DRA. LAURA FERREIRA | DIREITO MÉDICO E DA SAÚDE
 * Banner de Consentimento de Cookies & LGPD (Lei 13.709/2018)
 * Adaptado com identidade visual de alta fidelidade e persistência segura.
 */

(function () {
    'use strict';

    const STORAGE_KEY = 'lauraferreira_cookies_accepted';

    // Função pública para redefinir preferências (chamada pela página da Política de Cookies)
    window.resetCookieConsent = function () {
        try {
            localStorage.removeItem(STORAGE_KEY);
        } catch (e) {
            console.warn('Erro ao acessar localStorage:', e);
        }
        initCookieBanner(true);
    };

    // Não exibe se o usuário já aceitou os cookies anteriormente
    try {
        if (localStorage.getItem(STORAGE_KEY) === 'true') {
            return;
        }
    } catch (e) {
        // Fallback em caso de modo restrito/incógnito com storage bloqueado
    }

    function initCookieBanner(forceShow = false) {
        // Evita instâncias duplicadas na mesma página
        if (document.getElementById('cookie-consent-banner')) {
            const existing = document.getElementById('cookie-consent-banner');
            existing.classList.remove('cookie-banner--closing');
            existing.classList.add('cookie-banner--visible');
            return;
        }

        // Injeta estilos isolados do banner no <head> se ainda não existirem
        if (!document.getElementById('cookie-consent-styles')) {
            const style = document.createElement('style');
            style.id = 'cookie-consent-styles';
            style.textContent = `
                .cookie-banner {
                    position: fixed;
                    bottom: 24px;
                    left: 24px;
                    right: 24px;
                    max-width: 1200px;
                    margin: 0 auto;
                    background: rgba(36, 42, 55, 0.94);
                    backdrop-filter: blur(16px);
                    -webkit-backdrop-filter: blur(16px);
                    border: 1px solid rgba(234, 224, 213, 0.18);
                    border-radius: 16px;
                    padding: 20px 24px;
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: space-between;
                    gap: 24px;
                    z-index: 999998;
                    box-shadow: 0 16px 40px rgba(27, 27, 30, 0.4), 0 0 20px rgba(165, 87, 56, 0.15);
                    opacity: 0;
                    transform: translateY(24px) scale(0.98);
                    transition: opacity 0.35s cubic-bezier(0.16, 1, 0.3, 1), transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
                    font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
                }

                .cookie-banner--visible {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }

                .cookie-banner--closing {
                    opacity: 0;
                    transform: translateY(20px) scale(0.97);
                    pointer-events: none;
                }

                .cookie-content {
                    flex: 1;
                    text-align: left;
                }

                .cookie-title {
                    color: #FFFFFF;
                    font-size: 15px;
                    font-weight: 700;
                    margin: 0 0 6px;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    letter-spacing: 0.01em;
                }

                .cookie-icon {
                    color: #A55738;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                }

                .cookie-desc {
                    color: #D1D5DB;
                    font-size: 13.5px;
                    line-height: 1.55;
                    margin: 0;
                }

                .cookie-desc a {
                    color: #EAE0D5;
                    text-decoration: underline;
                    text-underline-offset: 3px;
                    font-weight: 600;
                    transition: color 0.2s ease;
                }

                .cookie-desc a:hover {
                    color: #FFFFFF;
                }

                .cookie-actions {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    flex-shrink: 0;
                }

                .cookie-btn-accept {
                    background: #A55738;
                    color: #FFFFFF;
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    border-radius: 8px;
                    padding: 10px 22px;
                    font-size: 13px;
                    font-weight: 700;
                    cursor: pointer;
                    display: inline-flex;
                    align-items: center;
                    gap: 6px;
                    transition: background 0.2s ease, transform 0.15s ease, box-shadow 0.2s ease;
                    box-shadow: 0 4px 12px rgba(165, 87, 56, 0.28);
                }

                .cookie-btn-accept:hover {
                    background: #8E482C;
                    box-shadow: 0 6px 16px rgba(165, 87, 56, 0.4);
                }

                .cookie-btn-accept:active {
                    transform: scale(0.97);
                }

                .cookie-btn-decline {
                    background: transparent;
                    color: #9CA3AF;
                    border: 1px solid rgba(255, 255, 255, 0.16);
                    border-radius: 8px;
                    padding: 10px 18px;
                    font-size: 13px;
                    font-weight: 600;
                    cursor: pointer;
                    transition: background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
                }

                .cookie-btn-decline:hover {
                    background: rgba(255, 255, 255, 0.08);
                    color: #FFFFFF;
                    border-color: rgba(255, 255, 255, 0.35);
                }

                @media (max-width: 820px) {
                    .cookie-banner {
                        bottom: 16px;
                        left: 16px;
                        right: 16px;
                        flex-direction: column;
                        align-items: stretch;
                        gap: 16px;
                        padding: 18px 20px;
                    }

                    .cookie-actions {
                        justify-content: stretch;
                    }

                    .cookie-btn-accept,
                    .cookie-btn-decline {
                        flex: 1;
                        text-align: center;
                        justify-content: center;
                        padding: 11px 16px;
                    }
                }
            `;
            document.head.appendChild(style);
        }

        // Constrói o elemento do banner
        const banner = document.createElement('div');
        banner.id = 'cookie-consent-banner';
        banner.className = 'cookie-banner';
        banner.setAttribute('role', 'region');
        banner.setAttribute('aria-label', 'Consentimento de Cookies e Privacidade');

        banner.innerHTML = `
            <div class="cookie-content">
                <h4 class="cookie-title">
                    <span class="cookie-icon" aria-hidden="true">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 1 0 10 10 4 4 0 0 1-5-5 4 4 0 0 1-5-5"></path>
                            <path d="M8.5 8.5v.01"></path>
                            <path d="M16 15.5v.01"></path>
                            <path d="M12 12v.01"></path>
                            <path d="M11 17v.01"></path>
                            <path d="M7 13v.01"></path>
                        </svg>
                    </span>
                    Cookies e Privacidade
                </h4>
                <p class="cookie-desc">
                    Utilizamos cookies essenciais para o correto funcionamento deste site, integridade de sessões e análise anônima de navegação em conformidade com a LGPD (Lei nº 13.709/2018). Saiba mais em nossa <a href="/politica-de-cookies">Política de Cookies e Privacidade</a>.
                </p>
            </div>
            <div class="cookie-actions">
                <button type="button" class="cookie-btn-decline" id="cookie-decline-btn">
                    Recusar
                </button>
                <button type="button" class="cookie-btn-accept" id="cookie-accept-btn">
                    Aceitar Cookies
                </button>
            </div>
        `;

        document.body.appendChild(banner);

        // Animação suave de entrada
        requestAnimationFrame(() => {
            setTimeout(() => {
                banner.classList.add('cookie-banner--visible');
            }, 60);
        });

        // Fechamento elegante com remoção
        function closeBanner(accepted = false) {
            banner.classList.remove('cookie-banner--visible');
            banner.classList.add('cookie-banner--closing');
            setTimeout(() => {
                banner.remove();
            }, 350);
        }

        // Listener: Aceitar
        document.getElementById('cookie-accept-btn').addEventListener('click', function () {
            try {
                localStorage.setItem(STORAGE_KEY, 'true');
            } catch (e) {
                console.warn('Não foi possível gravar aceite no localStorage:', e);
            }
            closeBanner(true);
        });

        // Listener: Recusar
        document.getElementById('cookie-decline-btn').addEventListener('click', function () {
            // Fecha para a sessão atual sem gravar true no localStorage
            closeBanner(false);
        });
    }

    // Inicialização segura após o carregamento da página
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => initCookieBanner());
    } else {
        initCookieBanner();
    }
})();
