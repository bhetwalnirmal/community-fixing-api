FROM dzangolab/php-nginx:8.1

ARG build='build'
ARG env='env'
ARG version='version'
ARG uid=1000

ENV APP_BUILD $build
ENV APP_VERSION $version

COPY nginx.conf /etc/nginx/conf.d/nginx.conf

ARG timezone='Asia/Bangkok'

COPY . /var/www/html

RUN cd /var/www
RUN usermod -u $uid www-data && groupmod -g $uid www-data
RUN chown -R www-data:www-data /var/lib/nginx
RUN chown -R www-data:www-data /var/run/nginx.pid 
RUN chown -R www-data:www-data /var/www 
RUN chown -R www-data:www-data /var/log
RUN echo "date.timezone="$timezone > /usr/local/etc/php/conf.d/date_timezone.ini

WORKDIR /var/www/html

