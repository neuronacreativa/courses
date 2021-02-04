package org.nc.monolith.infrastructure.controllers;

import org.nc.monolith.domain.dto.request.CommentRequest;
import org.nc.monolith.domain.dto.response.CommentResponse;
import org.nc.monolith.infrastructure.persistence.h2.H2CommentRepository;
import org.nc.monolith.service.CommentService;
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
@RequestMapping("comment")
public class CommentController {

	@Autowired
	private CommentService service;
	
	@Autowired
	private H2CommentRepository repository;
	
    @PostMapping
	public ResponseEntity<CommentResponse> create(
			@RequestPart("comment") CommentRequest commentRequest){
		
		return ResponseEntity.ok().body(
				service.create(commentRequest, repository)
		);
	}
    
    @GetMapping("/{uuid}")
	public ResponseEntity<CommentResponse> read(
			@PathVariable(name = "uuid") String uuid){
		
		return ResponseEntity.ok().body(
				service.read(uuid, repository)
		);
	}
    
    @PutMapping
	public ResponseEntity<CommentResponse> read(
			@RequestParam("uuid") String uuid,
			@RequestPart("post") CommentRequest commentRequest){
		
		return ResponseEntity.ok().body(
				service.update(uuid, commentRequest, repository)
		);
	}
    
    @DeleteMapping("/{uuid}")
	public ResponseEntity<CommentResponse> delete(
			@PathVariable(name = "uuid") String uuid){
		
    	service.delete(uuid, repository);
    	
		return ResponseEntity.ok().body(null);
	}
}
