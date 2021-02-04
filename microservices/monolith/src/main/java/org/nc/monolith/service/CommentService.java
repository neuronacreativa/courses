package org.nc.monolith.service;

import java.util.UUID;

import org.nc.monolith.domain.dto.request.CommentRequest;
import org.nc.monolith.domain.dto.response.CommentResponse;
import org.nc.monolith.domain.dto.response.PostResponse;
import org.nc.monolith.domain.entities.Comment;
import org.nc.monolith.domain.entities.Post;
import org.nc.monolith.domain.services.MonolithService;
import org.nc.monolith.infrastructure.persistence.h2.H2CommentRepository;
import org.nc.monolith.infrastructure.persistence.h2.H2PostRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class CommentService implements MonolithService{

	@Autowired
	private H2PostRepository postRepository;
	
	public CommentResponse create(CommentRequest commentRequest, H2CommentRepository repository) {
		
		Comment comment = new Comment();
		Post post = postRepository.findByUuid(commentRequest.getUuidPost());
		comment.setUuid(UUID.randomUUID().toString());
		comment.setTitle(commentRequest.getTitle());
		comment.setContent(commentRequest.getContent());
		comment.setPost(post);
		
		repository.save(comment);

		post.setCommentCount(post.getCommentCount() + 1);
		postRepository.save(post);
		
		CommentResponse commentResponse = new CommentResponse();
		PostResponse postResponse = new PostResponse();
		
		postResponse.setUuid(post.getUuid());
		postResponse.setTitle(post.getTitle());
		postResponse.setContent(post.getContent());
		postResponse.setCommentCount(post.getCommentCount());
		
		commentResponse.setUuid(post.getUuid());
		commentResponse.setTitle(post.getTitle());
		commentResponse.setContent(post.getContent());
		commentResponse.setPostResponse(postResponse);
		
		return commentResponse;
		
	}
	
	public CommentResponse read(String uuid, H2CommentRepository repository) {
		
		Comment comment = repository.findByUuid(uuid);
		Post post = comment.getPost();
		CommentResponse commentResponse = new CommentResponse();
		
		PostResponse postResponse = new PostResponse();
		
		postResponse.setUuid(post.getUuid());
		postResponse.setTitle(post.getTitle());
		postResponse.setContent(post.getContent());
		postResponse.setUser(null);

		commentResponse.setUuid(comment.getUuid());
		commentResponse.setTitle(comment.getTitle());
		commentResponse.setContent(comment.getContent());
		commentResponse.setPostResponse(postResponse);
		
		return commentResponse;
		
	}
	
	public CommentResponse update(String uuid, CommentRequest commentRequest, H2CommentRepository repository) {
		
		Comment comment = repository.findByUuid(uuid);
		Post post = comment.getPost();
		
		comment.setTitle(commentRequest.getTitle());
		comment.setContent(commentRequest.getContent());
		
		repository.save(comment);
		
		CommentResponse commentResponse = new CommentResponse();
		PostResponse postResponse = new PostResponse();
		
		postResponse.setUuid(post.getUuid());
		postResponse.setTitle(post.getTitle());
		postResponse.setContent(post.getContent());
		postResponse.setCommentCount(post.getCommentCount());
		
		commentResponse.setUuid(comment.getUuid());
		commentResponse.setTitle(comment.getTitle());
		commentResponse.setContent(comment.getContent());
		commentResponse.setPostResponse(postResponse);
		
		return commentResponse;
	}
	
	public void delete(String uuid, H2CommentRepository repository) {
		
		String postUuid = repository.findByUuid(uuid).getPost().getUuid();
		
		repository.deleteByUuid(uuid);
		
		Post post = postRepository.findByUuid(postUuid);
		post.setCommentCount(post.getCommentCount() - 1);
		postRepository.save(post);
	}

}