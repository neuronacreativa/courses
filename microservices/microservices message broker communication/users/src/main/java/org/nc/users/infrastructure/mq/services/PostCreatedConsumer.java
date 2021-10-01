package org.nc.users.infrastructure.mq.services;

import org.nc.users.infrastructure.persistence.h2.user.H2UserRepository;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

import org.nc.users.domain.events.PostCreated;
import org.nc.users.domain.services.UserService;
import org.nc.users.infrastructure.persistence.h2.JpaUserRepository;
import org.springframework.amqp.rabbit.annotation.RabbitHandler;
import org.springframework.amqp.rabbit.annotation.RabbitListener;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
@RabbitListener(queues = {"posts.created.queue"})
public class PostCreatedConsumer {

    private static final Logger logger = LoggerFactory.getLogger(PostCreatedConsumer.class);
    
	@Autowired
	private UserService service;
	
	@Autowired
	private H2UserRepository repository;

    @RabbitHandler
    public void receiveMessage(PostCreated postCreated)
    {
    	/*
    	 * Increasing post count
    	 */
		service.increasePostCount(postCreated.getUserUuid(), repository);
		
    	logger.info("Processed message [" + postCreated + "] ");
    }
}
