package org.nc.monolith.infrastructure.controllers;

import org.nc.monolith.domain.dto.request.UserRequest;
import org.nc.monolith.domain.dto.response.UserResponse;
import org.nc.monolith.application.UserService;
import org.nc.monolith.infrastructure.persistence.h2.user.H2UserRepository;
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
@RequestMapping("user")
public class UserController {

	@Autowired
	private UserService service;
	
	@Autowired
	private H2UserRepository repository;
	
    @PostMapping
	public ResponseEntity<UserResponse> create(
			@RequestPart("user") UserRequest userRequest){
		
		return ResponseEntity.ok().body(
				service.create(userRequest, repository)
		);
	}
    
    @GetMapping("/{uuid}")
	public ResponseEntity<UserResponse> read(
			@PathVariable(name = "uuid") String uuid){
		
		return ResponseEntity.ok().body(
				service.read(uuid, repository)
		);
	}
    
    @PutMapping
	public ResponseEntity<UserResponse> update(
			@RequestParam("uuid") String uuid,
			@RequestPart("user") UserRequest userRequest){
		
		return ResponseEntity.ok().body(
				service.update(uuid, userRequest, repository)
		);
	}
    
    @DeleteMapping("/{uuid}")
	public ResponseEntity<UserResponse> delete(
			@PathVariable(name = "uuid") String uuid){
		
    	service.delete(uuid, repository);
    	
		return ResponseEntity.ok().body(null);
	}
}
