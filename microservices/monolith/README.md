# Monolith

Monolith sample application, based on a classic blog application.

## Generating executable app.jar
```
mvnw clean install
```

## Generating and Executing Docker image

 1. Run docker.
 2. Run terminal app (terminal, iterm, powershell, ...).
 3. Change dir to Dockerfile location.
 4. Run this to generate the docker image, and run it:
 
```
docker build -t nc/monolith .
docker run -p 8081:8081 nc/monolith
```

## API Documentation - Swagger UI

[http://localhost:8081/swagger-ui.html](http://localhost:8081/swagger-ui.html)

## H2 Console

[http://localhost:8081/h2-console](http://localhost:8081/h2-console)

### H2 Credentials
```
JDBC URL: jdbc:h2:mem:monolithdb
User Name: monolith
Password: monolith
```

