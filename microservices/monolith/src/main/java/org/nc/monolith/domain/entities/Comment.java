package org.nc.monolith.domain.entities;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

@Entity
@Table(name = "COMMENT")
public class Comment {

	@Id
	@Column(name = "UUID", unique = true, nullable = false)
	private String uuid;
	@Column(name = "TITLE", nullable = false)
	private String title;
	@Column(name = "CONTENT", nullable = false)
	private String content;
	@ManyToOne(fetch = FetchType.LAZY)
    @JoinColumn(name = "post_uuid", nullable = false)
	private Post post;
	
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
	public Post getPost() {
		return post;
	}
	public void setPost(Post post) {
		this.post = post;
	}

	
}
