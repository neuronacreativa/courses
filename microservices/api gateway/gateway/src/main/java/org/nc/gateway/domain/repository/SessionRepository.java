package org.nc.gateway.domain.repository;

import org.nc.gateway.domain.entities.Session;

public interface SessionRepository {
	
	public Session save(Session post);
	
	public Session findByUuid(String uuid);
	
	public Session findByJwt(String jwt);
		
	public void deleteByUuid(String uuid);

}
