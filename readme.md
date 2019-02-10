# Vimeo Video Upload

## Development

### Prepare environment

```sh
cp .env.example .env
```

* Update your vimeo configuration inside .env

### Run Project

```sh
docker-compose up
```

### Update configurations

```sh
docker-compose exec app php artisan key:generate
```

```sh
docker-compose exec app php artisan config:cache
```

```sh
$ docker-compose exec db bash
> mysql -u root -p
GRANT ALL ON laravel.* TO 'laraveluser'@'%' IDENTIFIED BY '123456';
> FLUSH PRIVILEGES;
> EXIT;
$ exit
```

```sh
docker-compose exec app php artisan migrate
```