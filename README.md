This code is designed to provide a web interface to control and send Gcodes. <br>
It is currently being developed on a Raspberry Pi controlling a Tinyg equipped Shapeoko. <br>
It requires the "php_serial.class.php" file from https://code.google.com/p/php-serial/ <br>

<h3>To prepare a Raspberry Pi:</h3>

sudo apt-get install lighttpd php5-common php5-cgi php5 php5-cli php5-pear<br>
sudo lighty-enable-mod fastcgi-php<br>
sudo service lighttpd force-reload<br>
cd /var/www<br>
wget http://php-serial.googlecode.com/svn/trunk/php_serial.class.php<br>
sudo usermod -a -G dialout www-data<br>


