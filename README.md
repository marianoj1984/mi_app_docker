# mi_app_docker

# Mi Aplicación Dockerizada

### 📌 Comandos para correr el contenedor:
1️⃣ Construir la imagen:
```bash
docker build -t mi_app .
# Ejecutar el contenedor
docker run -d -p 8081:80 mi_app
#La aplicación se ejecuta en: http://localhost:8081
