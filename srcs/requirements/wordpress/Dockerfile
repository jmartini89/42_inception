FROM  alpine:3.14.4

RUN apk update
RUN apk add --no-cache \
	php7-common php7-iconv php7-json php7-gd php7-curl php7-xml \
	php7-mysqli php7-imap php7-cgi fcgi php7-pdo php7-pdo_mysql php7-soap php7-xmlrpc \
	php7-posix php7-mcrypt php7-gettext php7-ldap php7-ctype php7-dom php7 php7-fpm php7-opcache

RUN mkdir -p /var/www/html
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xf latest.tar.gz -C /var/www/html
RUN rm latest.tar.gz

COPY conf/www.conf /etc/php7/php-fpm.d
COPY conf/wp-config.php /var/www/html/wordpress
COPY tools /

ENTRYPOINT ["sh", "entrypoint.sh"]