FROM wodby/php-wodby/nginx
RUN mkdir -p /var/www/html/public
WORKDIR /var/www/html/public
COPY . /var/www/html/public
EXPOSE 8000
CMD [ "php", "index.php" ]