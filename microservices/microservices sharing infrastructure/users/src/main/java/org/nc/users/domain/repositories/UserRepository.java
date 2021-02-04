package org.nc.users.domain.repositories;

import org.nc.users.domain.entities.User;

public interface UserRepository {
	
	public User save(User post);
	
	public User findByUuid(String uuid);
	
	public void deleteByUuid(String uuid);
}
