package org.nc.monolith.service;

import java.util.UUID;

import org.nc.monolith.domain.dto.request.PostRequest;
import org.nc.monolith.domain.dto.response.PostResponse;
import org.nc.monolith.domain.dto.response.UserResponse;
import org.nc.monolith.domain.entities.Post;
import org.nc.monolith.domain.entities.User;
import org.nc.monolith.domain.services.MonolithService;
import org.nc.monolith.infrastructure.persistence.h2.H2PostRepository;
import org.nc.monolith.infrastructure.persistence.h2.H2UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class PostService  implements MonolithService{

	@Autowired
	private H2UserRepository userRepository;
	
	public PostResponse create(PostRequest postRequest, H2PostRepository repository) {
		
		Post post = new Post();
		User user = userRepository.findByUuid(postRequest.getUuidUser());
		post.setUuid(UUID.randomUUID().toString());
		post.setTitle(postRequest.getTitle());
		post.setContent(postRequest.getContent());
		post.setUser(user);
		post.setCommentCount(0);
		
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
		postResponse.setCommentCount(post.getCommentCount());
		
		return postResponse;
		
	}
	
	public PostResponse read(String uuid, H2PostRepository repository) {
		
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
		postResponse.setCommentCount(post.getCommentCount());
		
		return postResponse;
		
	}
	
	public PostResponse update(String uuid, PostRequest postRequest, H2PostRepository repository) {
		
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
		postResponse.setCommentCount(post.getCommentCount());
		
		return postResponse;
	}
	
	public void delete(String uuid, H2PostRepository repository) {
		
		String userUuid = repository.findByUuid(uuid).getUser().getUuid();
		
		repository.deleteByUuid(uuid);
		
		User user = userRepository.findByUuid(userUuid);
		user.setPostCount(user.getPostCount() - 1);
		userRepository.save(user);
	}

}
