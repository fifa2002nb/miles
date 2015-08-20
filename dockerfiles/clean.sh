#!/bin/sh

`for i in `docker ps -a|awk '{print $1}'|tail -3`;do docker stop $i ; docker rm $i;done`
`docker rmi dockerfiles_nginx`
`docker rmi dockerfiles_php`
`docker rmi dockerfiles_mysql`
