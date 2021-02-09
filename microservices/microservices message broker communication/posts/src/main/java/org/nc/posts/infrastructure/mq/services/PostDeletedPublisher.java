package org.nc.posts.infrastructure.mq.services;

import org.nc.posts.domain.shared.DomainEvent;
import org.nc.posts.domain.shared.Publisher;
import org.springframework.amqp.rabbit.core.RabbitTemplate;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Service;

@Service
public class PostDeletedPublisher implements Publisher{

	@Autowired
	RabbitTemplate rabbitTemplate;

	@Value("${posts.deleted.exchange}")
	String postsDeletedExchange;

	@Override
	public void publish(DomainEvent event) {
		rabbitTemplate.convertAndSend(postsDeletedExchange, event.fullQualifiedEventName(), event);
	}

}
