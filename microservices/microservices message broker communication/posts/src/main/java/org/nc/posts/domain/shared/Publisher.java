package org.nc.posts.domain.shared;

public interface Publisher {
	
	void publish(DomainEvent event);
	
}
