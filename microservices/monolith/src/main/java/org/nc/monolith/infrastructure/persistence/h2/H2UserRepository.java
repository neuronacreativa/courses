package org.nc.monolith.infrastructure.persistence.h2;
import org.nc.monolith.domain.entities.User;
import org.springframework.data.repository.CrudRepository;

public interface H2UserRepository extends CrudRepository<User, String>{
	
}
