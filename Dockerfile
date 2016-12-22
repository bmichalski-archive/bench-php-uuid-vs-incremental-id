FROM ubuntu:16.04

RUN \
  apt-get update && \
  apt-get dist-upgrade -y && \
  apt-get install -y \
    php7.0-cli \
    php7.0-mysql

RUN \
  apt-get install -y inetutils-ping

RUN \
  adduser --disabled-password --gecos '' r