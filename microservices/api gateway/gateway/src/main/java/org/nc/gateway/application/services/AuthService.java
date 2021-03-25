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
import org.nc.gateway.domain.entities.Session;
import org.nc.gateway.domain.repository.SessionRepository;
import org.springframework.beans.factory.annotation.Value;

import io.jsonwebtoken.Jwts;
import io.jsonwebtoken.SignatureAlgorithm;

public class AuthService {

	@Value("${jwt.secret}")
	private String secret;
	
	@Value("${jwt.validity}")
	private Long jwtTokenValidity;
	
	private String generateToken(Map<String, Object> claims, String subject, Date expiration) {

		return Jwts.builder().setClaims(claims).setSubject(subject).setIssuedAt(new Date(System.currentTimeMillis()))
				.setExpiration(expiration)
				.signWith(SignatureAlgorithm.HS512, secret).compact();
	}
	
	private AuthResponse fromSessionToAuthResponse(Session session) {
		
		AuthResponse authResponse = new AuthResponse();
		authResponse.setUsername(session.getUsername());
		authResponse.setEmail(session.getEmail());
		authResponse.setName(session.getName());
		authResponse.setSurname(session.getSurname());
		authResponse.setUuid(session.getUuid());

		DateFormat sdf = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss.SSS");
		authResponse.setCreation(sdf.format(session.getCreation()));
		authResponse.setExpiration(sdf.format(session.getExpiration()));
		authResponse.setJwt(session.getJwt());
		
		return authResponse;
	}
	
	public AuthResponse create(AuthRequest authRequest, SessionRepository repository) {
		
		Session session = new Session();
		session.setUsername(authRequest.getUsername());
		session.setEmail(authRequest.getEmail());
		session.setName(authRequest.getName());
		session.setSurname(authRequest.getSurname());
		session.setUuid(UUID.randomUUID().toString());
		session.setCreation(new Date(System.currentTimeMillis()));
		session.setExpiration(new Date(session.getCreation().getTime() + jwtTokenValidity));
		session.setJwt(generateToken(new HashMap<>(), session.getUsername(), session.getExpiration()));
		
		repository.save(session);
		
		return fromSessionToAuthResponse(session);		
	}
	
	public AuthResponse read(AuthReadRequest authReadRequest, SessionRepository repository) {
		
		Session session = repository.findByJwt(authReadRequest.getJwt());
		
		return fromSessionToAuthResponse(session);		
	}

	public AuthResponse delete(AuthReadRequest authReadRequest, SessionRepository repository) {
		
		Session session = repository.findByJwt(authReadRequest.getJwt());
		
		AuthResponse authResponse = fromSessionToAuthResponse(session);
		
		repository.deleteByUuid(authResponse.getUuid());
		
		return authResponse;		
	}
}
