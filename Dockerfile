# Dockerfile com ENTRYPOINT personalizado
FROM php:8.2-apache

# Defina o nome do servidor diretamente no Dockerfile
RUN echo "ServerName promodominios-production.up.railway.app" >> /etc/apache2/apache2.conf

# Copie o código da aplicação para o diretório /var/www/html
COPY . /var/www/html/

# Instale dependências do PHP (se necessário)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Exponha a porta 80 para acesso externo
EXPOSE 80

# Defina um entrypoint que não execute o Apache
ENTRYPOINT ["/bin/bash"]
