package org.nc.gateway.domain.entities;

import java.sql.Date;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "SESSION")
public class Session {

	@Id
	@Column(name = "UUID", unique = true, nullable = false)
	private String uuid;
	@Column(name = "USERNAME", nullable = false)
	private String username;
	@Column(name = "EMAIL", nullable = false)
	private String email;
	@Column(name = "NAME", nullable = true)
	private String name;
	@Column(name = "SURNAME", nullable = true)
	private String surname;
	@Column(name = "JWT", nullable = false)
	private String jwt;
	@Column(name="CREATION", nullable = false)
	private Date creation;
	@Column(name="EXPIRATION", nullable = false)
	private Date expiration;
	
	public Session() {
		super();
	}
	
	public Session(String uuid, String username, String email, String name, String surname, String jwt, Date creation,
			Date expiration) {
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

	public Date getExpiration() {
		return expiration;
	}

	public void setExpiration(Date expiration) {
		this.expiration = expiration;
	}

	public Date getCreation() {
		return creation;
	}

	public void setCreation(Date creation) {
		this.creation = creation;
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
}
