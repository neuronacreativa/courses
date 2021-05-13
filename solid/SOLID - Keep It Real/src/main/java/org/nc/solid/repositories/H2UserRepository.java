package org.nc.solid.repositories;
import org.nc.solid.entities.User;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface H2UserRepository extends CrudRepository<User, String>{
	
	User findByUuid(String uuid);
	
	void deleteByUuid(String uuid);
	
}
