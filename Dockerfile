# Usar a imagem oficial do PHP com Apache
FROM php:8.0-apache

# Copiar o código do projeto para o diretório de trabalho do container
COPY . /var/www/html/

# Habilitar mod_rewrite do Apache (caso necessário)
RUN a2enmod rewrite

# Expor a porta 80
EXPOSE 80
