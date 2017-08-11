sudo add-apt-repository ppa:ondrej/php

sudo apt-get update

sudo apt-get install -y php

sudo a2dismod php5

sudo a2enmod php7.1

service apache2 restart

sudo apt-get install -y \
             libapache2-mod-php \
             php-fpm \
             php-mysql \
             php-memcached \
             php-pear \
             php-xml \
             php-mbstring \
             php-xdebug \
             php-intl \
             php-curl \
             php-gd \
             php-zip \
             php-json \

service apache2 restart           