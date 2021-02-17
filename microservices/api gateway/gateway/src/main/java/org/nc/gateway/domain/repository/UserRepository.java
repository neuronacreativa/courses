package org.nc.gateway.domain.repository;

import org.nc.gateway.domain.entities.User;

public interface UserRepository {
	
	public User save(User post);
	
	public User findByUuid(String uuid);
		
	public void deleteByUuid(String uuid);

}
