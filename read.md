docker-compose --env-file .env up -d --build


------config mac



brew tap shivammathur/php

brew install shivammathur/php/php@7.3

brew link --overwrite --force shivammathur/php/php@7.3

Then restart the terminal and test your PHP version:

php -v



------


php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --version=2.2.0

mv composer.phar /usr/local/bin/composer