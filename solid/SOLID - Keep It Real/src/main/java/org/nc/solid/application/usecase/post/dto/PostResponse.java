package org.nc.solid.application.usecase.post.dto;

import org.nc.solid.domain.entities.Post;
import org.nc.solid.domain.entities.User;

public class PostResponse {

	private String uuid;
	private String title;
	private String content;
	private User user;

	public PostResponse(Post post) {
		this.uuid = post.getUuid();
		this.title = post.getTitle();
		this.content = post.getContent();
		this.user = post.getUser();
	}
	
	public User getUser() {
		return user;
	}
	public void setUser(User user) {
		this.user = user;
	}
	public String getUuid() {
		return uuid;
	}
	public void setUuid(String uuid) {
		this.uuid = uuid;
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
