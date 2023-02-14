Como instalar e rodar o projeto

1. ```git clone https://github.com/marcelojoras/Teste-Laravel-Docker```
2. ```cd src```
3. ```composer install```
3. Copiar ```.env.example``` para ```.env```
5. Editar as informações do banco de dados em ```.env``` (DB_DATABASE, DB_USERNAME e DB_PASSWORD)
6. No arquivo ```docker-compose.yml``` colocar as devidas informações em: ```POSTGRES_USER```, ```POSTGRES_PASSWORD```, ```POSTGRES_DB```
7. ```docker-compose build```
8. ```docker compose up -d```
9. Rodas as migrations
10. Você pode ver o projeto em ```127.0.0.1:8080```

Como rodar as migrations

1. ```cd src```
2. ```docker-compose exec app php artisan migrate``` 