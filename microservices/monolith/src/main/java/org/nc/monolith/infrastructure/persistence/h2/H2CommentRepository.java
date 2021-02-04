package org.nc.monolith.infrastructure.persistence.h2;
import org.nc.monolith.domain.entities.Comment;
import org.springframework.data.repository.CrudRepository;
import org.springframework.transaction.annotation.Transactional;

@Transactional
public interface H2CommentRepository extends CrudRepository<Comment, String>{
	
	public Comment findByUuid(String uuid);
	
	public void deleteByUuid(String uuid);
	
}
