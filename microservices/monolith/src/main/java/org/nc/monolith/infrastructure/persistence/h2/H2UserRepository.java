package org.nc.monolith.infrastructure.persistence.h2;
import org.nc.monolith.domain.entities.User;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface H2UserRepository extends CrudRepository<User, String>{
	
	public User findByUuid(String uuid);
	
	public void deleteByUuid(String uuid);
	
}
