package org.nc.gateway.domain.dto;

public class AuthResponse {

	private String uuid;
	private String username;
	private String email;
	private String name;
	private String surname;
	private String jwt;
	private String creation;
	private String expiration;
	
	public AuthResponse() {
		super();
	}

	public AuthResponse(String uuid, String username, String email, String name, String surname, String jwt,
			String creation, String expiration) {
		super();
		this.uuid = uuid;
		this.username = username;
		this.email = email;
		this.name = name;
		this.surname = surname;
		this.jwt = jwt;
		this.creation = creation;
		this.expiration = expiration;
	}

	public String getUuid() {
		return uuid;
	}

	public void setUuid(String uuid) {
		this.uuid = uuid;
	}

	public String getUsername() {
		return username;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getSurname() {
		return surname;
	}

	public void setSurname(String surname) {
		this.surname = surname;
	}

	public String getJwt() {
		return jwt;
	}

	public void setJwt(String jwt) {
		this.jwt = jwt;
	}

	public String getCreation() {
		return creation;
	}

	public void setCreation(String creation) {
		this.creation = creation;
	}

	public String getExpiration() {
		return expiration;
	}

	public void setExpiration(String expiration) {
		this.expiration = expiration;
	}


	
}
