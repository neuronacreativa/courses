package org.nc.users.infrastructure.mq.config;

import org.nc.users.domain.events.PostCreated;
import org.springframework.amqp.rabbit.connection.ConnectionFactory;
import org.springframework.amqp.rabbit.core.RabbitTemplate;
import org.springframework.amqp.support.converter.*;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

import java.util.HashMap;
import java.util.Map;

@Configuration
public class MqPostCreatedConfig {
	
    @Bean
    public MessageConverter messagePostCreatedConverter() {
        Jackson2JsonMessageConverter jsonMessageConverter = new Jackson2JsonMessageConverter();
        jsonMessageConverter.setClassMapper(classPostCreatedMapper());
        return jsonMessageConverter;
    }

    @Bean
    public RabbitTemplate rabbitPostCreatedTemplate(ConnectionFactory connectionFactory) {
        RabbitTemplate template = new RabbitTemplate(connectionFactory);
        template.setMessageConverter(messagePostCreatedConverter());
        return template;
    }

    @Bean
    public DefaultClassMapper classPostCreatedMapper() {
        DefaultClassMapper classMapper = new DefaultClassMapper();
        classMapper.setTrustedPackages("*");
        Map<String, Class<?>> idClassMapping = new HashMap<>();
        idClassMapping.put("org.nc.posts.domain.events.PostCreated", PostCreated.class);
        classMapper.setIdClassMapping(idClassMapping);
        return classMapper;
    }
}
