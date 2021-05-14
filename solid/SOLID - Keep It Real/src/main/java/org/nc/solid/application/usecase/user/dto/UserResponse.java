package org.nc.solid.application.usecase.user.dto;

import org.nc.solid.domain.entities.User;

public class UserResponse {
	
	private String uuid;
	private String name;
	private String lastname;
	private String username;
	private String email;

	public UserResponse(User user) {
		this.uuid = user.getUuid();
		this.name = user.getName();
		this.lastname = user.getLastname();
		this.username = user.getUsername();
		this.email = user.getEmail();
	}

	public String getUuid() {
		return uuid;
	}
	public void setUuid(String uuid) {
		this.uuid = uuid;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getLastname() {
		return lastname;
	}
	public void setLastname(String lastname) {
		this.lastname = lastname;
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
	
}
