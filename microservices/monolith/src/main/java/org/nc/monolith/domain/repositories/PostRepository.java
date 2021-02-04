package org.nc.monolith.domain.repositories;

import org.nc.monolith.domain.entities.Post;

public interface PostRepository {
	
	public Post save(Post post);
	
	public Post findByUuid(String uuid);
	
	public void deleteByUuid(String uuid);
}
