package org.nc.monolith.domain.entities;

import java.util.List;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;

@Entity
@Table(name = "USER")
public class User {

	@Id
	@Column(name = "UUID", unique = true, nullable = false)
	private String uuid;
	@Column(name = "NAME", nullable = true)
	private String name;
	@Column(name = "LASTNAME", nullable = true)
	private String lastname;
	@Column(name = "USERNAME", nullable = false)
	private String username;
	@Column(name = "EMAIL", nullable = false)
	private String email;
	@Column(name = "POSTCOUNT", nullable = false)
	private Integer postCount;
	@OneToMany(
			cascade = CascadeType.REMOVE,
	        fetch = FetchType.LAZY, 
	        mappedBy = "user")
	private List<Post> posts;
	
	public String getUuid() {
		return uuid;
	}
	public Integer getPostCount() {
		return postCount;
	}
	public void setPostCount(Integer postCount) {
		this.postCount = postCount;
	}
	public void setPosts(List<Post> posts) {
		this.posts = posts;
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
	public List<Post> getPosts() {
		return posts;
	}
	public void setComments(List<Post> posts) {
		this.posts = posts;
	}
	
}
