# Desafio 1 del curso DevOps

Para desplegar el docker-compose se deben seguir los siguientes pasos:

1 - Editar las variables de entorno del archivo .env con los datos deseados (por ejemplo las contraseñas de la DB)

2 - construir la app se debe ejecutar lo siguiente:
```
    docker-compose -f docker-compose.yml --env-file .env up -d
```    
    \!\[Deploy](deploy.png)
    

Para el uninstall simplemente se debe ejecutar el siguiente comando:
```
    docker-compose -f docker-compose.yml --env-file .env down -v
```
    \!\[Uninstall](uninstall.png)     
