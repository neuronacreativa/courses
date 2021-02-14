package org.nc.posts.infrastructure.mq.config;

import org.springframework.amqp.support.converter.Jackson2JsonMessageConverter;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;

import org.springframework.amqp.core.Queue;
import org.springframework.amqp.rabbit.connection.ConnectionFactory;
import org.springframework.amqp.rabbit.core.RabbitTemplate;

@Configuration
public class MqConfig {
	
	/*
	 * Injecting my queue name defined in properties
	 */
	@Value("${posts.created.queue}")
    String postsCreatedQueue;
    
	/*
	 * Creating queue
	 */
    @Bean
    Queue queue() {
        return new Queue(postsCreatedQueue);
    }
 
    /*
     * Create a new parser
     */
    @Bean
    Jackson2JsonMessageConverter producerMessageConverter() {
        return new Jackson2JsonMessageConverter();
    }
    
    @Bean
    public RabbitTemplate rabbitTemplate(ConnectionFactory connectionFactory) {
        RabbitTemplate template = new RabbitTemplate(connectionFactory);
        template.setMessageConverter(producerMessageConverter());
        return template;
    }
}
