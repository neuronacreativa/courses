package org.nc.monolith.domain.repositories;

import org.nc.monolith.domain.entities.User;

public interface UserRepository {
	
	public User save(User post);
	
	public User findByUuid(String uuid);
	
	public void deleteByUuid(String uuid);
}
