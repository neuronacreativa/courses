package org.nc.gateway.domain.repository;

import org.nc.gateway.domain.entities.Session;

public interface SessionRepository {
	
	Session save(Session post);
	
	Session findByUuid(String uuid);
	
	Session findByJwt(String jwt);
		
	void deleteByUuid(String uuid);

}
