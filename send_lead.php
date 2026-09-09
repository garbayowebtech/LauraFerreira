<?php
/**
 * DRA. LAURA FERREIRA | DIREITO MÉDICO E DA SAÚDE
 * Backend de Processamento Seguro de Contatos & Leads
 */

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método não permitido.']);
    exit;
}

// Sanitização e Coleta de Campos
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');
$subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$triageCase = trim(filter_input(INPUT_POST, 'triage_case', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');

// Validações Básicas
if (empty($name) || empty($phone) || empty($message)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Por favor, preencha todos os campos obrigatórios (Nome, WhatsApp e Mensagem).'
    ]);
    exit;
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'O endereço de e-mail informado parece inválido.'
    ]);
    exit;
}

// Registro Local Seguro em Arquivo de Leads
$leadRecord = [
    'timestamp' => date('Y-m-d H:i:s'),
    'name' => $name,
    'phone' => $phone,
    'email' => $email,
    'subject' => $subject,
    'message' => $message,
    'triage_info' => $triageCase,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
];

$leadsDir = __DIR__ . '/data';
if (!is_dir($leadsDir)) {
    @mkdir($leadsDir, 0755, true);
}

$leadsFile = $leadsDir . '/leads_' . date('Y-m') . '.json';
$existingLeads = [];

if (file_exists($leadsFile)) {
    $raw = @file_get_contents($leadsFile);
    if ($raw) {
        $existingLeads = json_decode($raw, true) ?? [];
    }
}

$existingLeads[] = $leadRecord;
@file_put_contents($leadsFile, json_encode($existingLeads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Tenta envio de e-mail via mail() nativo do PHP caso o servidor esteja configurado
$to = 'lauraferreraadv@gmail.com';
$emailSubject = "Novo Contato do Site: " . ($subject ?: 'Direito da Saúde') . " - " . $name;
$emailBody = "Você recebeu uma nova solicitação de atendimento pelo site:\n\n" .
             "Nome: {$name}\n" .
             "WhatsApp: {$phone}\n" .
             "E-mail: {$email}\n" .
             "Assunto: {$subject}\n" .
             "Triagem: {$triageCase}\n\n" .
             "Relato do Caso:\n{$message}\n\n" .
             "Data: " . date('d/m/Y H:i:s');

$headers = "From: noreply@lauraferreira.adv.br\r\n" .
           "Reply-To: " . ($email ?: 'noreply@lauraferreira.adv.br') . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

@mail($to, $emailSubject, $emailBody, $headers);

echo json_encode([
    'success' => true,
    'message' => 'Seus dados foram enviados com sucesso à Dra. Laura Ferreira.'
]);
