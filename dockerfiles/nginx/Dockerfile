FROM nginx:1.9
 
ADD  nginx.conf      /etc/nginx/nginx.conf
RUN  mkdir /opt/nginx && mkdir /opt/nginx/www && mkdir /opt/nginx/log && mkdir /opt/nginx/tmp
RUN  chown -R www-data.www-data /opt/nginx/www /opt/nginx/log /opt/nginx/tmp
                         
VOLUME ["/opt"]
