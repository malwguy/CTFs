FROM ubuntu:latest

RUN apt-get update && apt-get install -y apache2 php libapache2-mod-php

COPY log-poisoning-apache/ /var/www/html/ 

RUN echo 'LearnIT{f@k3_flag_4_t3st!ng}' > ~/flag_DAFRATE

RUN chown -R www-data:www-data /var/log/apache2

EXPOSE 80

ENTRYPOINT ["sh", "-c", "service apache2 start && tail -f /dev/null"]

