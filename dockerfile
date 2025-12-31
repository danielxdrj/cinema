FROM php:7.4-apache

# Habilita mod_rewrite (muito usado em sistemas antigos)
RUN a2enmod rewrite

# Extensões PHP comuns em legado
RUN docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql

# Permissões (evita dor de cabeça)
RUN chown -R www-data:www-data /var/www/html

# Diretório padrão
WORKDIR /var/www/html