FROM ubuntu:16.04

RUN \
  apt-get update && \
  apt-get dist-upgrade -y && \
  apt-get install -y \
    sudo \
    php7.0-cli \
    php7.0-mysql \
    php7.0-pgsql

RUN \
  apt-get install -y inetutils-ping

RUN \
  adduser --disabled-password --gecos '' r

RUN \
  touch /var/log/syslog

CMD tail -f /var/log/syslog

