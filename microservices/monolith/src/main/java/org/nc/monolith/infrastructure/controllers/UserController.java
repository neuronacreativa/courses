package org.nc.monolith.infrastructure.controllers;

import org.nc.monolith.domain.dto.request.UserRequest;
import org.nc.monolith.domain.dto.response.UserResponse;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("user")
public class UserController {

    @PostMapping
	public ResponseEntity<UserResponse> create(UserRequest userRequest){
		
		return ResponseEntity.ok().body(
				new UserResponse()
		);
	}
}
