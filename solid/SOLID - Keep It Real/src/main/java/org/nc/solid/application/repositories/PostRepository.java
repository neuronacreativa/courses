package org.nc.solid.application.repositories;
import org.nc.solid.domain.entities.Post;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

/**
 * CrudRepository it's a Spring functionality which adds
 * Database's access methods. We don't have to implements those methods.
 * Neither this interface own methods, because CrudRepository
 * transform theses methods in "Active record" type queries.
 *
 * More info at:
 *
 * https://docs.spring.io/spring-data/commons/docs/current/api/org/springframework/data/repository/CrudRepository.html
 */

@Transactional
public interface PostRepository extends CrudRepository<Post, String>{
	
	Post findByUuid(String uuid);
	
	void deleteByUuid(String uuid);
	
}
