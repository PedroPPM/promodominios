# Use a imagem oficial do PHP-FPM
FROM php:8.2-fpm

# Copie o código da aplicação para o diretório /var/www/html
COPY . /var/www/html/

# Instale dependências do PHP (se necessário)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Exponha a porta 9000 para o PHP-FPM
EXPOSE 9000

# Defina o comando padrão para iniciar o PHP-FPM
CMD ["php-fpm"]
