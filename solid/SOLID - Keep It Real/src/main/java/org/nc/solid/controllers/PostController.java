package org.nc.solid.controllers;

import org.nc.solid.request.PostRequest;
import org.nc.solid.response.PostResponse;
import org.nc.solid.service.PostService;
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

	@Autowired
	private PostService service;

    @PostMapping
	public ResponseEntity<PostResponse> create(
			@RequestPart("post") PostRequest postRequest){
		
		return ResponseEntity.ok().body(
				service.create(postRequest)
		);
	}
    
    @GetMapping("/{uuid}")
	public ResponseEntity<PostResponse> read(
			@PathVariable(name = "uuid") String uuid){
		
		return ResponseEntity.ok().body(
				service.read(uuid)
		);
	}
    
    @PutMapping("/{uuid}")
	public ResponseEntity<PostResponse> put(
			@PathVariable(name = "uuid") String uuid,
			@RequestPart("post") PostRequest postRequest){
		
		return ResponseEntity.ok().body(
				service.update(uuid, postRequest)
		);
	}
    
    @DeleteMapping("/{uuid}")
	public ResponseEntity<PostResponse> delete(
			@PathVariable(name = "uuid") String uuid){
		
    	service.delete(uuid);
    	
		return ResponseEntity.ok().body(null);
	}

}
