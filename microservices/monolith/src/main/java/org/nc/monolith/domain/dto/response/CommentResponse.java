package org.nc.monolith.domain.dto.response;

public class CommentResponse {

	private String uuid;
	private String title;
	private String content;
	private PostResponse postResponse;
	
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
	public PostResponse getPostResponse() {
		return postResponse;
	}
	public void setPostResponse(PostResponse postResponse) {
		this.postResponse = postResponse;
	}

}
