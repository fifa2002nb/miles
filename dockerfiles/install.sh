#!/bin/sh

ROOT_DIR=/home/uaq/opt
PHP_DIR=${ROOT_DIR}/php
JSSPEED_DIR=${ROOT_DIR}/jsspeed
NGINX_DIR=${ROOT_DIR}/nginx

`mkdir -p ${PHP_DIR}/log && mkdir -p ${PHP_DIR}/var && mkdir -P ${JSSPEED_DIR} && mkdir -P ${NGINX_DIR}/log`
