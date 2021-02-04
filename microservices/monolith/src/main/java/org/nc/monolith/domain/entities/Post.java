package org.nc.monolith.domain.entities;

import java.util.List;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
import javax.persistence.Table;

@Entity
@Table(name = "POST")
public class Post {

	@Id
	@Column(name = "UUID", unique = true, nullable = false)
	private String uuid;
	@Column(name = "TITLE", nullable = false)
	private String title;
	@Column(name = "CONTENT", nullable = false)
	private String content;
	@Column(name = "COMMENTCOUNT", nullable = false)
	private Integer commentCount;
	@ManyToOne(fetch = FetchType.EAGER)
    @JoinColumn(name = "user_uuid", nullable = false)
	private User user;
	@OneToMany(
			cascade = CascadeType.ALL,
	        fetch = FetchType.LAZY, 
	        mappedBy = "post")
	private List<Comment> comments;
	
	public String getUuid() {
		return uuid;
	}
	public Integer getCommentCount() {
		return commentCount;
	}
	public void setCommentCount(Integer commentCount) {
		this.commentCount = commentCount;
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
	public User getUser() {
		return user;
	}
	public void setUser(User user) {
		this.user = user;
	}
	public List<Comment> getComments() {
		return comments;
	}
	public void setComments(List<Comment> comments) {
		this.comments = comments;
	}
	
	
}
