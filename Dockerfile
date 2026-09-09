# Imagem oficial leve do PHP 8.2 Alpine
FROM php:8.2-cli-alpine

# Diretório de trabalho
WORKDIR /var/www/html

# Copiar todos os arquivos da aplicação
COPY . /var/www/html

# Garantir permissão de escrita para a pasta de leads
RUN mkdir -p /var/www/html/data && chmod -R 777 /var/www/html/data

# Porta padrão do Render
ENV PORT=10000
EXPOSE 10000

# Inicialização com suporte à porta dinâmica do Render
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-10000} router.php"]
