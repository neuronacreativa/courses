# Posts

Posts CRUD sample application.

## Generating and Executing Docker image

 1. Run docker.
 2. Run terminal app (terminal, iterm, powershell, ...).
 3. Change dir to Dockerfile location.
 4. Run this to generate the docker image, and run it:
 
```
docker build -t nc/posts .
docker run -p 8082:8082 nc/posts
```

## API Documentation - Swagger UI

[http://localhost:8082/swagger-ui.html](http://localhost:8082/swagger-ui.html)

## H2 Console

[http://localhost:8082/h2-console](http://localhost:8082/h2-console)

### H2 Credentials
```
JDBC URL: jdbc:h2:mem:microlithdb
User Name: microlith
Password: microlith
```

