FROM ctftraining/base_image_nginx_php_73

COPY ./www /tmp/
RUN cp -rf /tmp/html /var/www/ \
    && cp -f /tmp/flag.sh /flag.sh \
    && chown -R www-data:www-data /var/www/html


WORKDIR /var/www/html

EXPOSE 80