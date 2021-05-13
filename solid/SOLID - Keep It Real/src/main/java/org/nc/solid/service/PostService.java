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

	private final H2UserRepository userRepository;
	private final H2PostRepository postRepository;

	@Autowired
	public PostService(H2UserRepository userRepository, H2PostRepository postRepository) {
		this.userRepository = userRepository;
		this.postRepository = postRepository;
	}

	private PostResponse getPostResponse(Post post, User user) {
		postRepository.save(post);

		PostResponse postResponse = new PostResponse();
		UserResponse userResponse = new UserResponse();

		userResponse.setUuid(user.getUuid());
		userResponse.setName(user.getName());
		userResponse.setLastname(user.getLastname());
		userResponse.setUsername(user.getUsername());
		userResponse.setEmail(user.getEmail());

		postResponse.setUuid(post.getUuid());
		postResponse.setTitle(post.getTitle());
		postResponse.setContent(post.getContent());
		postResponse.setUser(userResponse);

		return postResponse;
	}

	public PostResponse create(PostRequest postRequest) {
		Post post = new Post();
		User user = userRepository.findByUuid(postRequest.getUuidUser());

		post.setUuid(UUID.randomUUID().toString());
		post.setTitle(postRequest.getTitle());
		post.setContent(postRequest.getContent());
		post.setUser(user);

		return getPostResponse(post, user);
	}

	public PostResponse read(String uuid) {
		Post post = postRepository.findByUuid(uuid);
		User user = post.getUser();

		return getPostResponse(post, user);
	}
	
	public PostResponse update(String uuid, PostRequest postRequest) {
		Post post = postRepository.findByUuid(uuid);
		User user = post.getUser();
		
		post.setTitle(postRequest.getTitle());
		post.setContent(postRequest.getContent());

		return getPostResponse(post, user);
	}
	
	public void delete(String uuid) {
		postRepository.deleteByUuid(uuid);
	}

}
