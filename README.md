git clone o projeto 


instale docker:
https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04

instale docker-compose:
https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-compose-on-ubuntu-20-04


```
docker run --rm -v $(pwd):/app composer/composer create-project --prefer-dist  laravel/laravel src "8.*"
```

```
export USER=$(whoami) && export  IDUSER=$(id -u)
```
```
docker-compose up -d --build
```

````
php artisan queue:table
````
```
php artisan migrate
```