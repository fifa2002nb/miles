#!/bin/sh

ROOT_DIR=/home/uaq/opt
PHP_DIR=${ROOT_DIR}/php
JSSPEED_DIR=${ROOT_DIR}/jsspeed
NGINX_DIR=${ROOT_DIR}/nginx
DATA_DIR=${ROOT_DIR}/data

`mkdir -p ${PHP_DIR}/log && mkdir -p ${PHP_DIR}/var && mkdir -p ${JSSPEED_DIR} && mkdir -p ${NGINX_DIR}/log && mkdir -p ${NGINX_DIR}/www && mkdir -p ${DATA_DIR}`

echo "execute => 'docker-compose up'"
