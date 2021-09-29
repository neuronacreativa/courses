package org.nc.monolith.infrastructure.controllers;

import org.nc.monolith.domain.dto.request.PostRequest;
import org.nc.monolith.domain.dto.response.PostResponse;
import org.nc.monolith.application.PostService;
import org.nc.monolith.infrastructure.persistence.h2.post.H2PostRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RequestPart;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("post")
public class PostController {

	@Autowired
	private PostService service;
	
	@Autowired
	private H2PostRepository repository;
	
    @PostMapping
	public ResponseEntity<PostResponse> create(
			@RequestPart("post") PostRequest postRequest){
		
		return ResponseEntity.ok().body(
				service.create(postRequest, repository)
		);
	}
    
    @GetMapping("/{uuid}")
	public ResponseEntity<PostResponse> read(
			@PathVariable(name = "uuid") String uuid){
		
		return ResponseEntity.ok().body(
				service.read(uuid, repository)
		);
	}
    
    @PutMapping
	public ResponseEntity<PostResponse> update(
			@RequestParam("uuid") String uuid,
			@RequestPart("post") PostRequest postRequest){
		
		return ResponseEntity.ok().body(
				service.update(uuid, postRequest, repository)
		);
	}
    
    @DeleteMapping("/{uuid}")
	public ResponseEntity<PostResponse> delete(
			@PathVariable(name = "uuid") String uuid){
		
    	service.delete(uuid, repository);
    	
		return ResponseEntity.ok().body(null);
	}

}
