# Vending Machine PHP

This is my solution to a vending machine using PHP and jQuery that runs in a Docker container.

## Installation

On root folder of the project run

```bash
docker compose up
```

## FOlder structure

```php
# ./
Contains the Docker configurations files

# db/
Contains the seed.sql file wiche create and insert data to the database

# docker/
Generated folder which container all the configuration for the mysql server and phpmyadmin

# src/
Contains the project source files

# src/assets
Containes images

# src/database
db global conection

# src/functions
Contains the two principal functions of the project CreateMachine and Vending

# src/utils
Contains js and style files
```

## Autor

Hayk Petrosyan
