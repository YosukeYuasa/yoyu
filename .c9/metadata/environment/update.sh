{"changed":true,"filter":false,"title":"update.sh","tooltip":"/update.sh","value":"sudo yum -y install php71 php71-cli php71-common php71-devel php71-mysqlnd php71-pdo php71-xml php71-gd php71-intl php71-mbstring php71-mcrypt php71-opcache php71-pecl-apcu php71-pecl-imagick php71-pecl-memcached php71-pecl-redis php71-pecl-xdebug\nsudo alternatives --set php /usr/bin/php-7.1\nsudo curl -sS https://getcomposer.org/installer | php\nsudo mv composer.phar /usr/local/bin/composer\ncomposer self-upd","undoManager":{"mark":0,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":5,"column":0},"action":"insert","lines":["sudo yum -y install php71 php71-cli php71-common php71-devel php71-mysqlnd php71-pdo php71-xml php71-gd php71-intl php71-mbstring php71-mcrypt php71-opcache php71-pecl-apcu php71-pecl-imagick php71-pecl-memcached php71-pecl-redis php71-pecl-xdebug","sudo alternatives --set php /usr/bin/php-7.1","sudo curl -sS https://getcomposer.org/installer | php","sudo mv composer.phar /usr/local/bin/composer","composer self-update",""],"id":1}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"insert","lines":["k"],"id":4},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["o"]}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"remove","lines":["o"],"id":5},{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"remove","lines":["k"]},{"start":{"row":4,"column":20},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"remove","lines":["e"],"id":6},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["t"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["a"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":17},"end":{"row":4,"column":17},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526276767506}