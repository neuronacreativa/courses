package org.nc.posts.infrastructure.persistence.h2;
import org.nc.posts.domain.entities.Post;
import org.nc.posts.domain.repositories.PostRepository;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface JpaPostRepository extends CrudRepository<Post, String>{
	
	Post findByUuid(String uuid);
	
	void deleteByUuid(String uuid);
	
}
