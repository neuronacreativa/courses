package org.nc.gateway.infrastructure.repository;

import org.nc.gateway.domain.entities.User;
import org.nc.gateway.domain.repository.UserRepository;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface H2Repository extends UserRepository, CrudRepository<User, String>{
	
	public User findByUuid(String uuid);
	
	public void deleteByUuid(String uuid);
	
}
