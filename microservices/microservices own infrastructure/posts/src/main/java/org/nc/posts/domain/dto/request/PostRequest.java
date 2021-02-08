package org.nc.posts.domain.dto.request;


public class PostRequest {

	private String title;
	private String content;
	private String uuidUser;
	
	public String getUuidUser() {
		return uuidUser;
	}
	public void setUuidUser(String uuidUser) {
		this.uuidUser = uuidUser;
	}
	public String getTitle() {
		return title;
	}
	public void setTitle(String title) {
		this.title = title;
	}
	public String getContent() {
		return content;
	}
	public void setContent(String content) {
		this.content = content;
	}
	
}
