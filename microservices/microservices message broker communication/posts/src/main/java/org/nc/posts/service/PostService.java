package org.nc.posts.service;

import java.util.UUID;

import org.nc.posts.domain.dto.request.PostRequest;
import org.nc.posts.domain.dto.response.PostResponse;
import org.nc.posts.domain.entities.Post;
import org.nc.posts.domain.repositories.PostRepository;
import org.nc.posts.domain.services.PostsService;
import org.nc.posts.infrastructure.communication.http.client.PostsClient;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class PostService  implements PostsService{

	@Autowired
	PostsClient postsClient;
	
	public PostResponse create(PostRequest postRequest, PostRepository repository) {
		
		Post post = new Post();

		post.setUuid(UUID.randomUUID().toString());
		post.setTitle(postRequest.getTitle());
		post.setContent(postRequest.getContent());
		post.setUserUuid(postRequest.getUuidUser());
		
		repository.save(post);
		
		PostResponse postResponse = new PostResponse();
		
		postResponse.setUuid(post.getUuid());
		postResponse.setTitle(post.getTitle());
		postResponse.setContent(post.getContent());
		postResponse.setUuidUser(post.getUserUuid());

		postsClient.putIncreasePostsInUser(post.getUserUuid());

		return postResponse;
		
	}
	
	public PostResponse read(String uuid, PostRepository repository) {
		
		Post post = repository.findByUuid(uuid);
		PostResponse postResponse = new PostResponse();
				
		postResponse.setUuid(post.getUuid());
		postResponse.setTitle(post.getTitle());
		postResponse.setContent(post.getContent());
		postResponse.setUuidUser(post.getUserUuid());
		
		return postResponse;
		
	}
	
	public PostResponse update(String uuid, PostRequest postRequest, PostRepository repository) {
		
		Post post = repository.findByUuid(uuid);
		
		post.setTitle(postRequest.getTitle());
		post.setContent(postRequest.getContent());
		
		repository.save(post);
		
		PostResponse postResponse = new PostResponse();
		
		postResponse.setUuid(post.getUuid());
		postResponse.setTitle(post.getTitle());
		postResponse.setContent(post.getContent());
		postResponse.setUuidUser(post.getUserUuid());
		
		return postResponse;
	}
	
	public void delete(String uuid, PostRepository repository) {
		
		Post post = repository.findByUuid(uuid);
		postsClient.putDecreasePostsInUser(post.getUserUuid());

		repository.deleteByUuid(uuid);
	}

}
