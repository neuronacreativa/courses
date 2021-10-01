package org.nc.posts.domain.repositories;

import java.util.List;

import org.nc.posts.domain.entities.Post;

public interface PostRepository {
	
	void save(Post post);
	
	Post findByUuid(String uuid);

	void deleteByUuid(String uuid);
}
