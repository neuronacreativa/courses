package org.nc.solid.repositories;
import org.nc.solid.entities.Post;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface H2PostRepository extends CrudRepository<Post, String>{
	
	Post findByUuid(String uuid);
	
	void deleteByUuid(String uuid);
	
}
