package org.nc.users.domain.repositories;

import org.nc.users.domain.entities.User;

public interface UserRepository {
	
	User save(User post);
	
	User findByUuid(String uuid);
	
	void deleteByUuid(String uuid);
}
