package org.nc.gateway.application.services;

import java.sql.Date;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.HashMap;
import java.util.Map;
import java.util.UUID;

import org.nc.gateway.domain.dto.AuthReadRequest;
import org.nc.gateway.domain.dto.AuthRequest;
import org.nc.gateway.domain.dto.AuthResponse;
import org.nc.gateway.domain.entities.User;
import org.nc.gateway.domain.repository.UserRepository;
import org.springframework.beans.factory.annotation.Value;

import io.jsonwebtoken.Jwts;
import io.jsonwebtoken.SignatureAlgorithm;

public class AuthService {

	public static final long JWT_TOKEN_VALIDITY = 5 * 60 * 60;

	@Value("${jwt.secret}")
	private String secret;
	
	@Value("${jwt.validity}")
	private Long jwtTokenValidity;
	
	private String doGenerateToken(Map<String, Object> claims, String subject, Date expiration) {

		return Jwts.builder().setClaims(claims).setSubject(subject).setIssuedAt(new Date(System.currentTimeMillis()))
				.setExpiration(expiration)
				.signWith(SignatureAlgorithm.HS512, secret).compact();
	}
	
	public AuthResponse create(AuthRequest authRequest, UserRepository repository) {
		
		User user = new User();
		user.setUsername(authRequest.getUsername());
		user.setEmail(authRequest.getEmail());
		user.setName(authRequest.getName());
		user.setSurname(authRequest.getSurname());
		user.setUuid(UUID.randomUUID().toString());
		user.setCreation(new Date(System.currentTimeMillis()));
		user.setExpiration(new Date(user.getCreation().getTime() + jwtTokenValidity));
		user.setJwt(doGenerateToken(new HashMap<>(), user.getUsername(), user.getExpiration()));
		
		repository.save(user);
		
		AuthResponse authResponse = new AuthResponse();
		authResponse.setUsername(user.getUsername());
		authResponse.setEmail(user.getEmail());
		authResponse.setName(user.getName());
		authResponse.setSurname(user.getSurname());
		authResponse.setUuid(user.getUuid());

		DateFormat sdf = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss.SSS");
		authResponse.setCreation(sdf.format(user.getCreation()));
		authResponse.setExpiration(sdf.format(user.getExpiration()));
		authResponse.setJwt(user.getJwt());
		
		return authResponse;
		
	}
	
	/*
	 * TODO
	 */
	public AuthResponse read(AuthReadRequest authReadRequest, UserRepository repository) {
		return null;
	}
}
