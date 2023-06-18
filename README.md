### Splade

#### How to run locally

Run following command (assuming lack of composer in the dev-system):   
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

Follow up by regular docker-compose command:   
```
docker-compose up -d
```
