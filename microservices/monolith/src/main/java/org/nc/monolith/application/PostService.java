package org.nc.monolith.application;

import java.util.UUID;

import org.nc.monolith.domain.dto.request.PostRequest;
import org.nc.monolith.domain.dto.response.PostResponse;
import org.nc.monolith.domain.dto.response.UserResponse;
import org.nc.monolith.domain.entities.Post;
import org.nc.monolith.domain.entities.User;
import org.nc.monolith.domain.repositories.PostRepository;
import org.nc.monolith.infrastructure.persistence.h2.H2UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class PostService {

	@Autowired
	private H2UserRepository userRepository;
	
	public PostResponse create(PostRequest postRequest, PostRepository repository) {
		
		Post post = new Post();
		User user = userRepository.findByUuid(postRequest.getUuidUser());
		post.setUuid(UUID.randomUUID().toString());
		post.setTitle(postRequest.getTitle());
		post.setContent(postRequest.getContent());
		post.setUser(user);
		
		user.setPostCount(user.getPostCount() + 1);
		userRepository.save(user);
		
		repository.save(post);
		
		PostResponse postResponse = new PostResponse();
		UserResponse userResponse = new UserResponse();
		
		userResponse.setUuid(user.getUuid());
		userResponse.setName(user.getName());
		userResponse.setLastname(user.getLastname());
		userResponse.setUsername(user.getUsername());
		userResponse.setEmail(user.getEmail());
		userResponse.setPostCount(user.getPostCount());
		
		postResponse.setUuid(post.getUuid());
		postResponse.setTitle(post.getTitle());
		postResponse.setContent(post.getContent());
		postResponse.setUser(userResponse);
		
		return postResponse;
		
	}
	
	public PostResponse read(String uuid, PostRepository repository) {
		
		Post post = repository.findByUuid(uuid);
		User user = post.getUser();
		PostResponse postResponse = new PostResponse();
		
		UserResponse userResponse = new UserResponse();
		
		userResponse.setUuid(user.getUuid());
		userResponse.setName(user.getName());
		userResponse.setLastname(user.getLastname());
		userResponse.setUsername(user.getUsername());
		userResponse.setEmail(user.getEmail());
		userResponse.setPostCount(user.getPostCount());

		postResponse.setUuid(post.getUuid());
		postResponse.setTitle(post.getTitle());
		postResponse.setContent(post.getContent());
		postResponse.setUser(userResponse);
		
		return postResponse;
		
	}
	
	public PostResponse update(String uuid, PostRequest postRequest, PostRepository repository) {
		
		Post post = repository.findByUuid(uuid);
		User user = post.getUser();
		
		post.setTitle(postRequest.getTitle());
		post.setContent(postRequest.getContent());
		
		repository.save(post);
		
		PostResponse postResponse = new PostResponse();
		UserResponse userResponse = new UserResponse();
		
		userResponse.setUuid(user.getUuid());
		userResponse.setName(user.getName());
		userResponse.setLastname(user.getLastname());
		userResponse.setUsername(user.getUsername());
		userResponse.setEmail(user.getEmail());
		userResponse.setPostCount(user.getPostCount());
		
		postResponse.setUuid(post.getUuid());
		postResponse.setTitle(post.getTitle());
		postResponse.setContent(post.getContent());
		postResponse.setUser(userResponse);
		
		return postResponse;
	}
	
	public void delete(String uuid, PostRepository repository) {
		
		String userUuid = repository.findByUuid(uuid).getUser().getUuid();
		
		repository.deleteByUuid(uuid);
		
		User user = userRepository.findByUuid(userUuid);
		user.setPostCount(user.getPostCount() - 1);
		userRepository.save(user);
	}

}
