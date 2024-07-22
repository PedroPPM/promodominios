# Use a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Defina o nome do servidor com o domínio completo
RUN echo "ServerName promodominios-production.up.railway.app" >> /etc/apache2/apache2.conf

# Copie o código da aplicação para o diretório /var/www/html
COPY . /var/www/html/

# Instale dependências do PHP (se necessário)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Exponha a porta 80 para acesso externo
EXPOSE 80

# Comando para iniciar o Apache
CMD ["apache2-foreground"]
