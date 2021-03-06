# Microservices - API Gateway integration

Users and Posts microservices, with their own H2 database, and RabbitMQ integration. Those MS are under an API Gateway based on Spring Cloud Gateway.

## Executing docker-compose

```
docker-compose up -d
```

### H2 Credentials
```
JDBC URL: jdbc:h2:mem:microlithdb
User Name: microlith
Password: microlith
```

### RabbitMQ Credentials
```
RABBITMQ_DEFAULT_USER: microservices
RABBITMQ_DEFAULT_PASS: microservices
```

#### RabbitMQ Console
```
[http://localhost:8181](http://localhost:8181)
```
