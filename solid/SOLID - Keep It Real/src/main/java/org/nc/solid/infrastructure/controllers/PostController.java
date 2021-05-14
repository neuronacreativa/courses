package org.nc.solid.infrastructure.controllers;

import org.nc.solid.application.usecase.post.*;
import org.nc.solid.application.usecase.post.dto.PostRequest;
import org.nc.solid.application.usecase.post.dto.PostResponse;
import org.nc.solid.infrastructure.persistence.h2.H2PostRepository;
import org.nc.solid.infrastructure.persistence.h2.H2UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestPart;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("post")
public class PostController {

	private final CreatePost createService;
	private final ReadPost readService;
	private final UpdatePost updateService;
	private final DeletePost deleteService;

	private final H2PostRepository postRepository;
	private final H2UserRepository userRepository;

	@Autowired
	public PostController(
			CreatePost createService, ReadPost readService, UpdatePost updatePost, DeletePost deletePost, H2PostRepository postRepository, H2UserRepository userRepository) {
		this.createService = createService;
		this.readService = readService;
		this.updateService = updatePost;
		this.deleteService = deletePost;
		this.postRepository = postRepository;
		this.userRepository = userRepository;
	}

	@PostMapping
	public ResponseEntity<PostResponse> create(
			@RequestPart("post") PostRequest postRequest){
		
		return ResponseEntity.ok().body(
				createService.create(postRequest, postRepository, userRepository)
		);
	}
    
    @GetMapping("/{uuid}")
	public ResponseEntity<PostResponse> read(
			@PathVariable(name = "uuid") String uuid){
		
		return ResponseEntity.ok().body(
				readService.read(uuid, postRepository)
		);
	}
    
    @PutMapping("/{uuid}")
	public ResponseEntity<PostResponse> put(
			@PathVariable(name = "uuid") String uuid,
			@RequestPart("post") PostRequest postRequest){
		
		return ResponseEntity.ok().body(
				updateService.update(uuid, postRequest, postRepository, userRepository)
		);
	}
    
    @DeleteMapping("/{uuid}")
	public ResponseEntity<PostResponse> delete(
			@PathVariable(name = "uuid") String uuid){
		
    	deleteService.delete(uuid, postRepository);
    	
		return ResponseEntity.ok().body(null);
	}

}
