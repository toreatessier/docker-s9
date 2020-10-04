# Alpine as base image
FROM alpine:latest
LABEL author="Torea TESSIER <torea.tessier2@gmail.com>"

# Install required tools and dependancies 
# Layer apache2
RUN apk update && apk upgrade && \
    apk add --no-cache apache2 \
    apache2-proxy \
    apache2-ssl \
    apache2-utils

# Layer php
RUN apk add --no-cache libxml2-dev \
    openssl \
    php7 \
    php7-apache2 \
    php7-bcmath \
    php7-curl \
    php7-gd \
    php7-gettext \
    php7-mbstring \
    php7-mcrypt \ 
    php7-mysqli \
    php7-xml \
    php7-xmlreader 

# Define apache2 env variables
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

# Default web page
WORKDIR /var/www/localhost/htdocs

# Add the web app
ADD app/*  /var/www/localhost/htdocs/

EXPOSE 80 443

# Start httpd service (apache2)
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]