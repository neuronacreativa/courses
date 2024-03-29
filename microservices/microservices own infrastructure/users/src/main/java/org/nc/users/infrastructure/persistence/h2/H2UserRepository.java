package org.nc.users.infrastructure.persistence.h2;
import org.nc.users.domain.entities.User;
import org.nc.users.domain.repositories.UserRepository;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface H2UserRepository extends UserRepository, CrudRepository<User, String>{
	
	User findByUuid(String uuid);
	
	void deleteByUuid(String uuid);
	
}
