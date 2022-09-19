FROM php:8.1-fpm-alpine3.16

COPY ./docker/workspace/run.sh /tmp

WORKDIR /var/www/html

ENTRYPOINT ["/tmp/run.sh"]
