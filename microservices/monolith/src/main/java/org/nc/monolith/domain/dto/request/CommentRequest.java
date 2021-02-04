package org.nc.monolith.domain.dto.request;

public class CommentRequest {
	
	private String title;
	private String content;
	private String uuidPost;
	
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
	public String getUuidPost() {
		return uuidPost;
	}
	public void setUuidPost(String uuidPost) {
		this.uuidPost = uuidPost;
	}
	
}
