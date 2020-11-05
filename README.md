# feelit
1. create directory apps
2. cd apps
3. clone the project into the directory
4. docker-compose up -d
5. docker exec -it apps_php_1 bash
6. cd feelit && run composer install
7. add in /etc/hosts: 
    172.24.0.3 feelit.local
    172.24.0.5 feelit.rabbitmq.local
8. open site on http://feelit.local
9. open rabbitmq on feelit.rabbitmq.local

