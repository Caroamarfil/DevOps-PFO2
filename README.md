# Proyecto Web - Práctica DevOps

Este proyecto consiste en una pequeña aplicación web desarrollada en PHP que se conecta a una base de datos MySQL para mostrar registros de una tabla llamada `alumnos`. La aplicación forma parte de la Práctica Formativa Obligatoria de la materia DevOps.

## Tecnologías utilizadas

- PHP 8.2 con Apache
- MySQL 8.0
- Docker
- Docker Compose

## Estructura del proyecto
TPDEVOPS-APP/
├── mi-app/
│ ├── Dockerfile
│ ├── index.php
│ └── ...
├── docker-compose.yml
└── README.md

## Tabla utilizada SQL

CREATE TABLE alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    carrera VARCHAR(100)
);

## Ejecución
## Comandos para levantar los contenedores
docker compose up --build

## Acceso a la app
http://localhost:8081

## Servicios y puertos utilizados
| Servicio | Imagen     | Puerto contenedor | Puerto host | Descripción   |
| -------- | ---------- | ----------------- | ----------- | ------------- |
| app      | PHP-Apache | 80                | 8081        | Servidor web  |
| db       | MySQL 8.0  | 3306              | 3307        | Base de datos |

## Docker Hub
La imagen de la aplicación fue publicada en Docker Hub y puede ejecutarse directamente con: docker run --name mi-app-test -p 8081:80 caroamarfil/mi-app:1.0
