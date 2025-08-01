# Desafio 2 del Modulo 4 - Bootcamp Devops Engineer <br><br>
### Contenido del directorio:

![Tree](tree.png) <br>


El link de la imagen tagueada en la registry de dockerhub es la siguiente:  https://hub.docker.com/r/mysven/php82-apache-tools <br><br><br>


### Para desplegar el docker-compose se deben seguir los siguientes pasos: <br><br>

1 - Editar las variables de entorno del archivo .env con los datos deseados (por ejemplo las contraseñas de los usuarios de la DB) <br><br>

```bash
   MYSQL_ROOT_PASSWORD=password_root
   MYSQL_DATABASE=nombre_db
   MYSQL_USER=usuario_db
   MYSQL_PASSWORD=password_usuario_db
```
<br><br>

2 - Para construir la app se debe ejecutar el siguiente comando:
```bash
   docker-compose -f docker-compose.yml --env-file .env up -d  
```   
   ![Deploy](deploy.png)  <br><br><br>
    

### Para el uninstall de la app y los volúmenes simplemente se debe ejecutar el siguiente comando:
```bash   
   docker-compose -f docker-compose.yml --env-file .env down -v     
```   
   ![Uninstall](uninstall.png)   <br><br><br><br><br><br><br><br>  
