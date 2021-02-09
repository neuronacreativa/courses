package org.nc.posts.domain.services;

import java.util.UUID;

import org.nc.posts.domain.dto.request.PostRequest;
import org.nc.posts.domain.dto.response.PostResponse;
import org.nc.posts.domain.entities.Post;
import org.nc.posts.domain.events.PostCreated;
import org.nc.posts.domain.events.PostDeleted;
import org.nc.posts.domain.repositories.PostRepository;
import org.nc.posts.domain.shared.Publisher;
import org.springframework.stereotype.Service;

@Service
public class PostService {

	public PostResponse create(PostRequest postRequest, PostRepository repository, Publisher publisher) {
		
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
		
		/*
		 * Creating our domain event and send it to our queue
		 */
		PostCreated postCreated = new PostCreated(post.getUuid(), post.getUserUuid());
		publisher.publish(postCreated);

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
	
	public void delete(String uuid, PostRepository repository, Publisher publisher) {
		
		Post post = repository.findByUuid(uuid);
		repository.deleteByUuid(uuid);
		
		/*
		 * Creating our domain event and send it to our queue
		 */
		PostDeleted postDeleted = new PostDeleted(post.getUuid(), post.getUserUuid());
		publisher.publish(postDeleted);
	}

}
