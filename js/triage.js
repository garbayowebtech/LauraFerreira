/**
 * DRA. LAURA FERREIRA | DIREITO MÉDICO E DA SAÚDE
 * Assistente Interativo de Triagem e Pré-Avaliação de Casos (4 Etapas)
 *
 * Melhorias implementadas:
 * 1. Coleta humanizada de dados do paciente (Nome Completo e Idade).
 * 2. Urgência Condicional: "Altíssima Urgência" visível EXCLUSIVAMENTE para
 *    Cirurgias/Exames/Internações e Medicamentos de Alto Custo.
 * 3. Auto-avanço com feedback tátil/visual suave (280ms) nas Etapas 1 e 3.
 * 4. Diagnóstico jurídico preliminar fundamentado e checklist personalizado de documentos.
 * 5. Alternativa para envio direto de contato (desktop/sem WhatsApp Web).
 */

document.addEventListener('DOMContentLoaded', () => {
    initTriageWizard();
});

function initTriageWizard() {
    const triageBox = document.querySelector('.triage-box');
    if (!triageBox) return;

    let currentStep = 1;
    const caseData = {
        issueType: '',
        issueTitle: '',
        allowHighUrgency: false,
        patientName: '',
        patientAge: '',
        patientPhone: '',
        patientEmail: '',
        urgency: '',
        urgencyTitle: ''
    };

    // Elementos das Telas
    const step1El = document.getElementById('triageStep1');
    const step2El = document.getElementById('triageStep2');
    const step3El = document.getElementById('triageStep3');
    const step4El = document.getElementById('triageStep4');

    // Indicadores
    const ind1 = document.getElementById('stepInd1')?.closest('.step-indicator-wrapper');
    const ind2 = document.getElementById('stepInd2')?.closest('.step-indicator-wrapper');
    const ind3 = document.getElementById('stepInd3')?.closest('.step-indicator-wrapper');
    const ind4 = document.getElementById('stepInd4')?.closest('.step-indicator-wrapper');

    // Botões de Navegação
    const nextBtn1 = document.getElementById('triageNext1');
    const prevBtn2 = document.getElementById('triagePrev2');
    const nextBtn2 = document.getElementById('triageNext2');
    const prevBtn3 = document.getElementById('triagePrev3');
    const nextBtn3 = document.getElementById('triageNext3');
    const prevBtn4 = document.getElementById('triagePrev4');

    // Campos do Passo 2 (Paciente & Contato)
    const patientNameInput = document.getElementById('triagePatientName');
    const patientAgeInput = document.getElementById('triagePatientAge');
    const patientPhoneInput = document.getElementById('triagePatientPhone');
    const patientEmailInput = document.getElementById('triagePatientEmail');
    const patientValidationMsg = document.getElementById('triagePatientValidationMsg');

    // Opções de Urgência (Passo 3)
    const optAltissimaUrgencia = document.getElementById('optAltissimaUrgencia');
    const optUrgente = document.getElementById('optUrgente');
    const optPreventiva = document.getElementById('optPreventiva');

    // Elementos do Passo 4 (Resumo e Diagnóstico)
    const summaryPatientLabel = document.getElementById('triageSummaryPatientLabel');
    const summaryPatientName = document.getElementById('triageSummaryPatientName');
    const summaryPatientAge = document.getElementById('triageSummaryPatientAge');
    const summaryPatientPhone = document.getElementById('triageSummaryPatientPhone');
    const summaryPatientEmail = document.getElementById('triageSummaryPatientEmail');
    const summaryEmailRow = document.getElementById('triageSummaryEmailRow');
    const summaryIssue = document.getElementById('triageSummaryIssue');
    const summaryUrgency = document.getElementById('triageSummaryUrgency');
    const viabilityBadge = document.getElementById('triageViabilityBadge');
    const viabilityText = document.getElementById('triageViabilityText');
    const checklistUl = document.getElementById('triageChecklist');
    const whatsappBtn = document.getElementById('triageWhatsappBtn');

    // Formulário Alternativo de Contato (Passo 4)
    const altToggleBtn = document.getElementById('triageAltToggleBtn');
    const altForm = document.getElementById('triageAltForm');
    const altContactName = document.getElementById('triageAltContactName');
    const altContactPhone = document.getElementById('triageAltContactPhone');
    const altContactEmail = document.getElementById('triageAltContactEmail');
    const altSubmitBtn = document.getElementById('triageAltSubmitBtn');
    const altFeedback = document.getElementById('triageAltFeedback');
    const hiddenCaseField = document.getElementById('triageHiddenCase');

    // Base de Conhecimento Jurídico e Documental por Tipo de Demanda
    const caseKnowledgeBase = {
        'negativa-cirurgia-exame': {
            viabilityBadge: '🟢 Alta Viabilidade • Tutela de Urgência (Liminar)',
            viabilityText: 'A negativa de cobertura para cirurgias, CTI/UTI, próteses ou exames urgentes é abusiva perante a jurisprudência dominante, o Art. 300 do CPC e a Lei 14.454/22. Havendo relatório médico justificando a urgência e risco de dano irreparável, é plenamente cabível pedido de medida liminar (inclusive em plantão judiciário).',
            documents: [
                'Laudo/Relatório médico detalhado com CID, histórico clínico e justificativa expressa de urgência;',
                'Comprovante de negativa formal da operadora de saúde (e-mail, carta de recusa ou número de protocolo com gravação);',
                'Carteirinha do convênio e comprovantes de pagamento das últimas 3 mensalidades;'
            ]
        },
        'medicamento-alto-custo': {
            viabilityBadge: '🟢 Alta Viabilidade • Tema 106 do STJ / Precedentes do STF',
            viabilityText: 'O direito à vida e à saúde impõe o fornecimento de medicamentos de alto custo e fármacos especiais (oncológicos, biológicos ou imunoterápicos). Desde que demonstrada a imprescindibilidade do medicamento e a ineficácia das opções oferecidas, obtém-se liminar obrigando o plano ou o Estado a custear o tratamento.',
            documents: [
                'Receituário médico atualizado constando a denominação genérica (princípio ativo), dosagem e posologia;',
                'Relatório do médico assistente fundamentando a necessidade do fármaco e a ineficácia dos tratamentos padronizados;',
                'Comprovante formal de recusa do plano de saúde ou da Secretaria Estadual/Municipal de Saúde;',
                'Comprovante de renda e residência (para ações direcionadas ao SUS).'
            ]
        },
        'autismo-terapias': {
            viabilityBadge: '🟢 Ampla Jurisprudência • Resoluções ANS & STJ',
            viabilityText: 'A jurisprudência do Superior Tribunal de Justiça e normas vigentes da ANS vedam a fixação de limite temporal ou de sessões para terapias multidisciplinares de pessoas com Transtorno do Espectro Autista (TEA). O plano deve cobrir integralmente o número de horas e métodos prescritos pelo médico (Método ABA, Fonoaudiologia, Terapia Ocupacional, etc).',
            documents: [
                'Laudo médico com diagnóstico de TEA (CID-10 ou CID-11) e plano terapêutico individual com a carga horária semanal indicada;',
                'Comprovante de recusa de cobertura, descredenciamento de clínica ou imposição de teto de sessões pela operadora;',
                'Contrato do plano de saúde e comprovantes de adimplemento.'
            ]
        },
        'erro-medico': {
            viabilityBadge: '⚖️ Análise Técnica Especializada • Responsabilidade Civil & Perícia',
            viabilityText: 'A apuração de suposto erro médico, falha no dever de informação ou erro odontológico exige rigorosa auditoria documental do prontuário para demonstração do nexo de causalidade e dos danos sofridos, visando indenização por danos materiais, estéticos e morais.',
            documents: [
                'Cópia integral do prontuário médico e hospitalar (prontuário de internação, folha de sala e anestesia);',
                'Exames de imagem, laboratoriais e laudos anteriores e posteriores ao procedimento;',
                'Comprovantes de gastos adicionais com novos médicos, remédios, fisioterapias ou intervenções corretivas.'
            ]
        },
        'reajuste-abusivo': {
            viabilityBadge: '🟢 Alta Viabilidade • Estatuto do Idoso & Súmulas Judiciais',
            viabilityText: 'Reajustes desproporcionais por faixa etária (notadamente o aumento de 59 anos) ou sinistralidade sem demonstração de cálculo atuarial transparente são sistematicamente anulados pela Justiça, restabelecendo-se mensalidades justas com devolução em dobro ou simples das quantias pagas a mais.',
            documents: [
                'Histórico dos boletos ou faturas pagos nos últimos 12 a 24 meses;',
                'Contrato inicial do plano de saúde e comunicados formais de reajuste emitidos pela operadora;',
                'Documento de identidade do titular/dependente para comprovação etária.'
            ]
        },
        'assessoria-medica': {
            viabilityBadge: '🛡️ Gestão Jurídica Preventiva • Compliance Médico & CRM',
            viabilityText: 'Assessoria jurídica estratégica para médicos e clínicas de saúde focada em prevenção de processos judiciais, auditoria de Termos de Consentimento Informado (TCLE), adequação de prontuários eletrônicos e defesa técnica contenciosa em sindicâncias perante o CRM/CFM.',
            documents: [
                'Cópia da notificação ou citação ética do CRM/CFM (se houver procedimento em andamento);',
                'Prontuário médico, fichas de atendimento e TCLE aplicados no caso concreto;',
                'Contrato de prestação de serviços ou regimento interno da clínica/hospital.'
            ]
        }
    };

    // =========================================================================
    // ETAPA 1: SELEÇÃO DA SITUAÇÃO (COM AUTO-AVANÇO)
    // =========================================================================
    const optionBtnsStep1 = step1El.querySelectorAll('.triage-option-btn');
    optionBtnsStep1.forEach(btn => {
        btn.addEventListener('click', () => {
            optionBtnsStep1.forEach(b => {
                b.classList.remove('selected');
                b.classList.remove('auto-advancing');
            });
            btn.classList.add('selected');
            btn.classList.add('auto-advancing');

            caseData.issueType = btn.dataset.value;
            caseData.issueTitle = btn.querySelector('.option-text-main').textContent.trim();
            caseData.allowHighUrgency = (btn.dataset.allowHighUrgency === 'true');

            nextBtn1.removeAttribute('disabled');

            // Auto-Avanço suave após 280ms
            setTimeout(() => {
                btn.classList.remove('auto-advancing');
                goToStep(2);
                if (patientNameInput && window.innerWidth > 768) {
                    patientNameInput.focus({ preventScroll: true });
                }
            }, 280);
        });
    });

    nextBtn1.addEventListener('click', () => {
        if (!caseData.issueType) return;
        goToStep(2);
        if (patientNameInput && window.innerWidth > 768) {
            patientNameInput.focus({ preventScroll: true });
        }
    });

    // =========================================================================
    // ETAPA 2: DADOS DO PACIENTE E CONTATO (NOME, IDADE, TELEFONE E EMAIL)
    // =========================================================================
    function formatPhoneInput(value) {
        let digits = (value || '').replace(/\D/g, '');
        if (digits.length > 11) digits = digits.slice(0, 11);
        if (digits.length === 0) return '';
        if (digits.length <= 2) return `(${digits}`;
        if (digits.length <= 6) return `(${digits.slice(0, 2)}) ${digits.slice(2)}`;
        if (digits.length <= 10) return `(${digits.slice(0, 2)}) ${digits.slice(2, 6)}-${digits.slice(6)}`;
        return `(${digits.slice(0, 2)}) ${digits.slice(2, 7)}-${digits.slice(7, 11)}`;
    }

    function isValidBrazilianPhone(value) {
        const digits = (value || '').replace(/\D/g, '');
        if (digits.length !== 10 && digits.length !== 11) return false;
        const ddd = parseInt(digits.substring(0, 2), 10);
        if (ddd < 11 || ddd > 99) return false;
        if (digits.length === 11 && digits[2] !== '9') return false;
        if (/^(\d)\1+$/.test(digits)) return false;
        return true;
    }

    function isValidEmail(value) {
        const trimmed = (value || '').trim();
        if (!trimmed) return true; // Opcional
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailRegex.test(trimmed);
    }

    if (patientPhoneInput) {
        patientPhoneInput.addEventListener('input', (e) => {
            e.target.value = formatPhoneInput(e.target.value);
        });
    }

    function validatePatientStep(showFeedback = false) {
        const name = (patientNameInput?.value || '').trim();
        const age = (patientAgeInput?.value || '').trim();
        const phone = (patientPhoneInput?.value || '').trim();
        const email = (patientEmailInput?.value || '').trim();

        let errorMsg = '';
        let focusTarget = null;

        if (name.length < 2) {
            errorMsg = 'Por favor, informe o nome completo do paciente.';
            focusTarget = patientNameInput;
        } else if (age.length < 1) {
            errorMsg = 'Por favor, informe a idade do paciente.';
            focusTarget = patientAgeInput;
        } else if (!phone) {
            errorMsg = 'Por favor, informe o telefone/WhatsApp para contato (campo obrigatório).';
            focusTarget = patientPhoneInput;
        } else if (!isValidBrazilianPhone(phone)) {
            errorMsg = 'Por favor, informe um telefone válido com DDD (ex: (21) 99999-9999).';
            focusTarget = patientPhoneInput;
        } else if (email && !isValidEmail(email)) {
            errorMsg = 'O e-mail informado não possui um formato válido (ex: seuemail@exemplo.com).';
            focusTarget = patientEmailInput;
        }

        if (!errorMsg) {
            caseData.patientName = name;
            caseData.patientAge = age;
            caseData.patientPhone = phone;
            caseData.patientEmail = email;
            if (patientValidationMsg) {
                patientValidationMsg.style.display = 'none';
            }
            return true;
        } else {
            if (showFeedback && patientValidationMsg) {
                patientValidationMsg.style.display = 'block';
                patientValidationMsg.textContent = errorMsg;
                if (focusTarget) {
                    focusTarget.focus({ preventScroll: true });
                }
            }
            return false;
        }
    }

    [patientNameInput, patientAgeInput, patientPhoneInput, patientEmailInput].forEach(input => {
        if (!input) return;
        input.addEventListener('input', () => {
            if (patientValidationMsg && patientValidationMsg.style.display !== 'none') {
                patientValidationMsg.style.display = 'none';
            }
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                handleStep2Advance();
            }
        });
    });

    function handleStep2Advance() {
        if (!validatePatientStep(true)) {
            return;
        }

        // Aplica a regra de negócio condicional para a Urgência (Etapa 3)
        applyUrgencyVisibility();

        goToStep(3);
    }

    nextBtn2.addEventListener('click', handleStep2Advance);

    prevBtn2.addEventListener('click', () => {
        goToStep(1);
    });

    // =========================================================================
    // ETAPA 3: NÍVEL DE URGÊNCIA (CONDICIONAL + AUTO-AVANÇO)
    // =========================================================================
    function applyUrgencyVisibility() {
        const isPreventiveOnly = (caseData.issueType === 'reajuste-abusivo' || caseData.issueType === 'assessoria-medica');

        if (isPreventiveOnly) {
            // Reajuste abusivo e Assessoria médica: limitar para apenas "Orientação Preventiva / Dúvida Jurídica"
            if (optAltissimaUrgencia) optAltissimaUrgencia.style.display = 'none';
            if (optUrgente) optUrgente.style.display = 'none';
            if (optPreventiva) optPreventiva.style.display = 'flex';

            // Se havia alguma outra urgência selecionada anteriormente, limpa
            if (caseData.urgency && caseData.urgency !== 'orientacao-geral') {
                caseData.urgency = '';
                caseData.urgencyTitle = '';
                if (optAltissimaUrgencia) optAltissimaUrgencia.classList.remove('selected');
                if (optUrgente) optUrgente.classList.remove('selected');
                if (optPreventiva) optPreventiva.classList.remove('selected');
                if (nextBtn3) nextBtn3.setAttribute('disabled', 'true');
            }
        } else {
            // Demais casos: "Urgente" e "Orientação Preventiva" sempre visíveis
            if (optUrgente) optUrgente.style.display = 'flex';
            if (optPreventiva) optPreventiva.style.display = 'flex';

            // "Altíssima Urgência" visível exclusivamente para Cirurgias e Medicamentos de Alto Custo
            if (optAltissimaUrgencia) {
                if (caseData.allowHighUrgency) {
                    optAltissimaUrgencia.style.display = 'flex';
                } else {
                    optAltissimaUrgencia.style.display = 'none';
                    if (caseData.urgency === 'urgente-imediato') {
                        caseData.urgency = '';
                        caseData.urgencyTitle = '';
                        optAltissimaUrgencia.classList.remove('selected');
                        if (nextBtn3) nextBtn3.setAttribute('disabled', 'true');
                    }
                }
            }
        }
    }

    const urgencyBtns = step3El.querySelectorAll('.triage-urgency-btn');
    urgencyBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            urgencyBtns.forEach(b => {
                b.classList.remove('selected');
                b.classList.remove('auto-advancing');
            });
            btn.classList.add('selected');
            btn.classList.add('auto-advancing');

            caseData.urgency = btn.dataset.value;
            caseData.urgencyTitle = btn.querySelector('.option-text-main').textContent.trim();
            nextBtn3.removeAttribute('disabled');

            // Auto-Avanço para o Diagnóstico e Checklist após 280ms
            setTimeout(() => {
                btn.classList.remove('auto-advancing');
                renderStep4Summary();
                goToStep(4);
            }, 280);
        });
    });

    prevBtn3.addEventListener('click', () => {
        goToStep(2);
    });

    nextBtn3.addEventListener('click', () => {
        if (!caseData.urgency) return;
        renderStep4Summary();
        goToStep(4);
    });

    // =========================================================================
    // ETAPA 4: DIAGNÓSTICO, CHECKLIST, WHATSAPP & CONTATO ALTERNATIVO
    // =========================================================================
    function renderStep4Summary() {
        const kb = caseKnowledgeBase[caseData.issueType] || caseKnowledgeBase['negativa-cirurgia-exame'];

        // Atualiza textos do paciente e do caso
        if (summaryPatientLabel) summaryPatientLabel.textContent = caseData.patientName || 'Paciente';
        if (summaryPatientName) summaryPatientName.textContent = caseData.patientName || '-';
        if (summaryPatientAge) summaryPatientAge.textContent = caseData.patientAge || '-';
        if (summaryPatientPhone) summaryPatientPhone.textContent = caseData.patientPhone || '-';
        if (summaryPatientEmail) {
            if (caseData.patientEmail) {
                summaryPatientEmail.textContent = caseData.patientEmail;
                if (summaryEmailRow) summaryEmailRow.style.display = 'flex';
            } else {
                if (summaryEmailRow) summaryEmailRow.style.display = 'none';
            }
        }
        if (summaryIssue) summaryIssue.textContent = caseData.issueTitle || '-';
        if (summaryUrgency) {
            summaryUrgency.textContent = caseData.urgencyTitle || '-';
            // Cor diferenciada para Altíssima Urgência
            if (caseData.urgency === 'urgente-imediato') {
                summaryUrgency.style.color = '#EF4444';
            } else if (caseData.urgency === 'urgente-48h') {
                summaryUrgency.style.color = '#FCD34D';
            } else {
                summaryUrgency.style.color = '#93C5FD';
            }
        }

        // Diagnóstico Jurídico Preliminar
        if (viabilityBadge) viabilityBadge.textContent = kb.viabilityBadge;
        if (viabilityText) viabilityText.textContent = kb.viabilityText;

        // Checklist de Documentos
        if (checklistUl) {
            checklistUl.innerHTML = '';
            kb.documents.forEach(docText => {
                const li = document.createElement('li');
                li.innerHTML = `
                    <div class="triage-checklist-icon">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <span>${docText}</span>
                `;
                checklistUl.appendChild(li);
            });
        }

        // Montagem da Mensagem do WhatsApp com Qualificação Completa
        let waMessage = `Olá, Dra. Laura Ferreira!\n\nRealizei a pré-avaliação do caso no seu site com os seguintes dados:\n• Paciente: ${caseData.patientName} (${caseData.patientAge})\n• Telefone/WhatsApp: ${caseData.patientPhone}`;
        if (caseData.patientEmail) {
            waMessage += `\n• E-mail: ${caseData.patientEmail}`;
        }
        waMessage += `\n• Situação: ${caseData.issueTitle}\n• Urgência: ${caseData.urgencyTitle}\n\nJá conferi os documentos recomendados e gostaria de orientações sobre como proceder para resguardar nossos direitos.`;

        const encodedMsg = encodeURIComponent(waMessage);
        const whatsappUrl = `https://wa.me/5521993292332?text=${encodedMsg}`;

        if (whatsappBtn) {
            whatsappBtn.href = whatsappUrl;
        }

        // Preenche campo oculto do formulário alternativo
        if (hiddenCaseField) {
            let desc = `[TRIAGEM SITE] Paciente: ${caseData.patientName} (${caseData.patientAge}) | Contato: ${caseData.patientPhone}`;
            if (caseData.patientEmail) desc += ` | E-mail: ${caseData.patientEmail}`;
            desc += ` | Situação: ${caseData.issueTitle} | Urgência: ${caseData.urgencyTitle}`;
            hiddenCaseField.value = desc;
        }
        if (altContactName && !altContactName.value) {
            altContactName.value = caseData.patientName;
        }
        if (altContactPhone && !altContactPhone.value) {
            altContactPhone.value = caseData.patientPhone;
        }
        if (altContactEmail && !altContactEmail.value && caseData.patientEmail) {
            altContactEmail.value = caseData.patientEmail;
        }
    }

    // Toggle do formulário alternativo de contato
    if (altToggleBtn && altForm) {
        altToggleBtn.addEventListener('click', () => {
            const isVisible = altForm.style.display !== 'none';
            altForm.style.display = isVisible ? 'none' : 'block';
            if (!isVisible && altContactPhone) {
                altContactPhone.focus();
            }
        });
    }

    // Submissão do Formulário Alternativo via AJAX para send_lead.php
    if (altForm) {
        altForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const name = (altContactName?.value || '').trim();
            const phone = (altContactPhone?.value || '').trim();
            const email = (altContactEmail?.value || '').trim();
            const triageCase = hiddenCaseField?.value || `Triagem: ${caseData.issueTitle}`;

            if (!name || !phone) {
                if (altFeedback) {
                    altFeedback.style.display = 'block';
                    altFeedback.style.color = '#FCA5A5';
                    altFeedback.textContent = 'Por favor, informe seu nome e telefone para contato.';
                }
                return;
            }

            if (altSubmitBtn) {
                altSubmitBtn.setAttribute('disabled', 'true');
                altSubmitBtn.textContent = 'Enviando...';
            }

            try {
                const formData = new FormData();
                formData.append('name', name);
                formData.append('phone', phone);
                formData.append('email', email);
                formData.append('subject', 'Contato Prioritário via Triagem do Site');
                formData.append('message', `Solicitação de retorno via triagem:\nPaciente: ${caseData.patientName} (${caseData.patientAge})\nSituação: ${caseData.issueTitle}\nUrgência: ${caseData.urgencyTitle}`);
                formData.append('triage_case', triageCase);

                const response = await fetch('/send_lead.php', {
                    method: 'POST',
                    body: formData
                });

                const resData = await response.json();

                if (altFeedback) {
                    altFeedback.style.display = 'block';
                    if (resData.success) {
                        altFeedback.style.color = '#6EE7B7';
                        altFeedback.innerHTML = '✅ <strong>Solicitação enviada com sucesso!</strong> A Dra. Laura ou sua equipe entrará em contato em breve.';
                        altForm.reset();
                    } else {
                        altFeedback.style.color = '#FCA5A5';
                        altFeedback.textContent = resData.message || 'Ocorreu um erro ao enviar. Tente pelo WhatsApp.';
                    }
                }
            } catch (err) {
                if (altFeedback) {
                    altFeedback.style.display = 'block';
                    altFeedback.style.color = '#FCA5A5';
                    altFeedback.textContent = 'Erro na comunicação. Por favor, utilize o botão de WhatsApp acima.';
                }
            } finally {
                if (altSubmitBtn) {
                    altSubmitBtn.removeAttribute('disabled');
                    altSubmitBtn.textContent = 'Solicitar Contato Prioritário';
                }
            }
        });
    }

    // Botão Refazer Pré-Avaliação
    if (prevBtn4) {
        prevBtn4.addEventListener('click', () => {
            // Limpa dados e volta ao passo 1
            caseData.issueType = '';
            caseData.issueTitle = '';
            caseData.allowHighUrgency = false;
            caseData.patientName = '';
            caseData.patientAge = '';
            caseData.patientPhone = '';
            caseData.patientEmail = '';
            caseData.urgency = '';
            caseData.urgencyTitle = '';

            optionBtnsStep1.forEach(b => b.classList.remove('selected'));
            urgencyBtns.forEach(b => b.classList.remove('selected'));
            nextBtn1.setAttribute('disabled', 'true');
            nextBtn3.setAttribute('disabled', 'true');
            if (patientNameInput) patientNameInput.value = '';
            if (patientAgeInput) patientAgeInput.value = '';
            if (patientPhoneInput) patientPhoneInput.value = '';
            if (patientEmailInput) patientEmailInput.value = '';
            if (optAltissimaUrgencia) optAltissimaUrgencia.style.display = '';
            if (optUrgente) optUrgente.style.display = '';
            if (optPreventiva) optPreventiva.style.display = '';
            if (altForm) altForm.style.display = 'none';
            if (altFeedback) altFeedback.style.display = 'none';

            goToStep(1);
        });
    }

    // =========================================================================
    // NAVEGAÇÃO ENTRE TELAS E ATUALIZAÇÃO DOS INDICADORES
    // =========================================================================
    function goToStep(step) {
        currentStep = step;

        // Atualiza telas ativas
        if (step1El) step1El.classList.toggle('active', step === 1);
        if (step2El) step2El.classList.toggle('active', step === 2);
        if (step3El) step3El.classList.toggle('active', step === 3);
        if (step4El) step4El.classList.toggle('active', step === 4);

        // Atualiza indicadores visuais
        updateIndicator(ind1, 1, step);
        updateIndicator(ind2, 2, step);
        updateIndicator(ind3, 3, step);
        updateIndicator(ind4, 4, step);
    }

    function updateIndicator(wrapper, stepNum, current) {
        if (!wrapper) return;
        const item = wrapper.querySelector('.step-indicator-item');
        if (!item) return;

        const isCurrent = (stepNum === current);
        const isCompleted = (stepNum < current);

        wrapper.classList.toggle('active', isCurrent);
        wrapper.classList.toggle('completed', isCompleted);

        item.classList.toggle('active', isCurrent);
        item.classList.toggle('completed', isCompleted);

        if (isCompleted) {
            item.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>';
        } else {
            item.textContent = stepNum;
        }
    }
}
