package org.nc.solid.infrastructure.controllers;

import org.nc.solid.application.usecase.user.CreateUser;
import org.nc.solid.application.usecase.user.DeleteUser;
import org.nc.solid.application.usecase.user.ReadUser;
import org.nc.solid.application.usecase.user.UpdateUser;
import org.nc.solid.application.usecase.user.dto.UserRequest;
import org.nc.solid.application.usecase.user.dto.UserResponse;
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
@RequestMapping("user")
public class UserController {

	private final CreateUser createUser;
	private final ReadUser readUser;
	private final UpdateUser updateUser;
	private final DeleteUser deleteUser;

	private final H2UserRepository userRepository;

	@Autowired
	public UserController(CreateUser createUser, ReadUser readUser, UpdateUser updateUser, DeleteUser deleteUser, H2UserRepository userRepository) {
		this.createUser = createUser;
		this.readUser = readUser;
		this.updateUser = updateUser;
		this.deleteUser = deleteUser;
		this.userRepository = userRepository;
	}


	@PostMapping
	public ResponseEntity<UserResponse> create(
			@RequestPart("user") UserRequest userRequest){
		
		return ResponseEntity.ok().body(
				createUser.create(userRequest, userRepository)
		);
	}
    
    @GetMapping("/{uuid}")
	public ResponseEntity<UserResponse> read(
			@PathVariable(name = "uuid") String uuid){
		
		return ResponseEntity.ok().body(
				readUser.read(uuid, userRepository)
		);
	}
    
    @PutMapping("/{uuid}")
	public ResponseEntity<UserResponse> put(
			@PathVariable(name = "uuid") String uuid,
			@RequestPart("user") UserRequest userRequest){
		
		return ResponseEntity.ok().body(
				updateUser.update(uuid, userRequest, userRepository)
		);
	}
    
    @DeleteMapping("/{uuid}")
	public ResponseEntity<UserResponse> delete(
			@PathVariable(name = "uuid") String uuid){
		
    	deleteUser.delete(uuid, userRepository);
    	
		return ResponseEntity.ok().body(null);
	}
}
