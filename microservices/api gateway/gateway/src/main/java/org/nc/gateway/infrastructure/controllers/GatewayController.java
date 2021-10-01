package org.nc.gateway.infrastructure.controllers;

import org.nc.gateway.application.services.AuthService;
import org.nc.gateway.domain.dto.AuthReadRequest;
import org.nc.gateway.domain.dto.AuthRequest;
import org.nc.gateway.domain.dto.AuthResponse;
import org.nc.gateway.infrastructure.repository.H2Repository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("auth")
public class GatewayController {
	
	@Autowired
	AuthService service;
	
	@Autowired
	H2Repository repository;
	
	// TODO Add Authorization header

	/**
	 * Login
	 *
     */
	@PostMapping
	public ResponseEntity<AuthResponse> create(
			@RequestBody AuthRequest authRequest){
		
		return ResponseEntity.ok().body(
				service.create(authRequest, repository)
		);
	}
	
	/**
	 * Retrieve Session data
	 *
     */
	@GetMapping
	public ResponseEntity<AuthResponse> read(
			@RequestBody AuthReadRequest authReadRequest){

		return ResponseEntity.ok().body(
				service.read(authReadRequest, repository)
		);
	}
	
	/**
	 * Logout
	 *
     */
	@DeleteMapping
	public ResponseEntity<AuthResponse> delete(
			@RequestBody AuthReadRequest authReadRequest){

		return ResponseEntity.ok().body(
				service.delete(authReadRequest, repository)
		);
	}
    

}
