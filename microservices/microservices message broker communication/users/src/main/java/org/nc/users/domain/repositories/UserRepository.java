package org.nc.users.domain.repositories;

import org.nc.users.domain.entities.User;

public interface UserRepository {
	
	void save(User post);
	
	User findByUuid(String uuid);
	
	void deleteByUuid(String uuid);
}
