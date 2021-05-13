package org.nc.solid.controllers;

import org.nc.solid.request.UserRequest;
import org.nc.solid.response.UserResponse;
import org.nc.solid.service.UserService;
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
	
    @PostMapping
	public ResponseEntity<UserResponse> create(
			@RequestPart("user") UserRequest userRequest){
		
		return ResponseEntity.ok().body(
				service.create(userRequest)
		);
	}
    
    @GetMapping("/{uuid}")
	public ResponseEntity<UserResponse> read(
			@PathVariable(name = "uuid") String uuid){
		
		return ResponseEntity.ok().body(
				service.read(uuid)
		);
	}
    
    @PutMapping("/{uuid}")
	public ResponseEntity<UserResponse> put(
			@PathVariable(name = "uuid") String uuid,
			@RequestPart("user") UserRequest userRequest){
		
		return ResponseEntity.ok().body(
				service.update(uuid, userRequest)
		);
	}
    
    @DeleteMapping("/{uuid}")
	public ResponseEntity<UserResponse> delete(
			@PathVariable(name = "uuid") String uuid){
		
    	service.delete(uuid);
    	
		return ResponseEntity.ok().body(null);
	}
}
