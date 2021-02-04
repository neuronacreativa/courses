package org.nc.posts.domain.repositories;

import java.util.List;

import org.nc.posts.domain.entities.Post;

public interface PostRepository {
	
	public Post save(Post post);
	
	public Post findByUuid(String uuid);
	
	public List<Post> findByUserUuid(String uuid);
	
	public void deleteByUuid(String uuid);
}
