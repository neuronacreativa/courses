package org.nc.monolith.infrastructure.persistence.h2;
import org.nc.monolith.domain.entities.Post;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface H2PostRepository extends CrudRepository<Post, String>{
	
	Post findByUuid(String uuid);
	
	void deleteByUuid(String uuid);
	
}
