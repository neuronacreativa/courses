package org.nc.gateway.domain.dto;

public class AuthReadRequest {
	
	private String jwt;

	public AuthReadRequest() {
		super();
	}

	public AuthReadRequest(String jwt) {
		super();
		this.jwt = jwt;
	}

	public String getJwt() {
		return jwt;
	}

	public void setJwt(String jwt) {
		this.jwt = jwt;
	}

}
