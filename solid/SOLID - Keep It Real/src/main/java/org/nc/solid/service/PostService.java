package org.nc.solid.service;

import java.util.UUID;

import org.nc.solid.repositories.H2PostRepository;
import org.nc.solid.request.PostRequest;
import org.nc.solid.response.PostResponse;
import org.nc.solid.response.UserResponse;
import org.nc.solid.entities.Post;
import org.nc.solid.entities.User;
import org.nc.solid.repositories.H2UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class PostService {

	@Autowired
	private H2UserRepository userRepository;

	@Autowired
	private H2PostRepository postRepository;

	public PostResponse create(PostRequest postRequest) {
		
		Post post = new Post();
		User user = userRepository.findByUuid(postRequest.getUuidUser());
		post.setUuid(UUID.randomUUID().toString());
		post.setTitle(postRequest.getTitle());
		post.setContent(postRequest.getContent());
		post.setUser(user);
		
		user.setPostCount(user.getPostCount() + 1);
		userRepository.save(user);

		postRepository.save(post);
		
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
	
	public PostResponse read(String uuid) {
		
		Post post = postRepository.findByUuid(uuid);
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
	
	public PostResponse update(String uuid, PostRequest postRequest) {
		
		Post post = postRepository.findByUuid(uuid);
		User user = post.getUser();
		
		post.setTitle(postRequest.getTitle());
		post.setContent(postRequest.getContent());

		postRepository.save(post);
		
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
	
	public void delete(String uuid) {
		
		String userUuid = postRepository.findByUuid(uuid).getUser().getUuid();

		postRepository.deleteByUuid(uuid);
		
		User user = userRepository.findByUuid(userUuid);
		user.setPostCount(user.getPostCount() - 1);
		userRepository.save(user);
	}

}
