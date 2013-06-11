This code is designed to provide a web interface to control and send Gcodes. 
It is currently being developed on a Raspberry Pi controlling a Tinyg equipped Shapeoko. 
It requires the "php_serial.class.php" file from https://code.google.com/p/php-serial/ <br>

To prepare a Raspberry Pi:

sudo apt-get install lighttpd php5-common php5-cgi php5 php5-cli php5-pear<br>
sudo lighty-enable-mod fastcgi-php
sudo service lighttpd force-reload
cd /var/www
wget http://php-serial.googlecode.com/svn/trunk/php_serial.class.php
sudo usermod -a -G dialout www-data


