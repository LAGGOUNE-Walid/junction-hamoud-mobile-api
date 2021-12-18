FROM php:8-fpm
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get install vim -y && \
    apt-get install openssl -y && \
    apt-get install libssl-dev -y && \
    apt-get install wget -y && \
    apt-get install git -y && \
    apt-get install procps -y && \
    apt-get install htop -y
RUN apt-get autoremove -y && rm -rf /var/lib/apt/lists/*
