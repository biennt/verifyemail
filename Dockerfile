FROM php:7.0
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "-S", "0.0.0.0:9000","./checkmail.php" ]

