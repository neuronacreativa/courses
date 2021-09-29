package org.nc.monolith.domain.repositories;

import org.nc.monolith.domain.entities.User;

public interface UserRepository {

	void save(User user);

	User findByUuid(String uuid);
	
	void deleteByUuid(String uuid);
}
