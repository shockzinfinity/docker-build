FROM php:7.4-fpm

RUN docker-php-ext-install pdo pdo_mysql
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN apt-get update && apt-get install -y libzip-dev zlib1g-dev libpq-dev mysql-client unzip \
  curl \
  libmemcached-dev \
  libz-dev \
  libjpeg-dev \
  libpng-dev \
  libfreetype6-dev \
  libssl-dev \
  libmcrypt-dev

RUN docker-php-ext-install gd && \
  docker-php-ext-configure gd --enable-gd-native-ttf --with-jpeg-dir=/usr/lib --with-freetype-dir=/usr/include/freetype2 && \
  docker-php-ext-install gd

RUN echo 'zend_extension = xdebug.so' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
  echo 'xdebug.force_display_errors = 1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
  echo 'xdebug.profiler_enable_trigger = 1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
  echo 'xdebug.profiler_output_dir = /opt/storage' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
  echo 'xdebug.var_display_max_children = -1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
  echo 'xdebug.var_display_max_depth = -1' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini