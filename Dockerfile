# Use uma imagem base do PHP
FROM php:8.1-apache

# Instale o sudo
RUN apt-get update && apt-get install -y sudo

# Copie os arquivos do seu projeto para o diretório /var/www/html no container
COPY . /var/www/html/

# Copie o script start-app.sh para o container
COPY start-app.sh /usr/local/bin/start-app.sh

# Torne o script executável
RUN chmod +x /usr/local/bin/start-app.sh

# Exponha a porta 80 para acesso ao servidor web
EXPOSE 80

# Defina o ponto de entrada para o script start-app.sh
ENTRYPOINT ["start-app.sh"]
