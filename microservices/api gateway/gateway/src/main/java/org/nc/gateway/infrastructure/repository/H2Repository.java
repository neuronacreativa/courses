package org.nc.gateway.infrastructure.repository;

import org.nc.gateway.domain.entities.Session;
import org.nc.gateway.domain.repository.SessionRepository;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface H2Repository extends SessionRepository, CrudRepository<Session, String>{
	
	Session findByUuid(String uuid);
	
	void deleteByUuid(String uuid);
	
}
