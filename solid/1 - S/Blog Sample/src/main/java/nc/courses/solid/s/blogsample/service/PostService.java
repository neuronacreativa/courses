package nc.courses.solid.s.blogsample.service;

import java.util.UUID;

import nc.courses.solid.s.blogsample.repository.PostRepository;
import nc.courses.solid.s.blogsample.request.PostRequest;
import nc.courses.solid.s.blogsample.PostResponse;
import nc.courses.solid.s.blogsample.model.Post;
import org.springframework.stereotype.Service;

@Service
public class PostService {

    public PostResponse create(PostRequest postRequest, PostRepository repository) {

        Post post = new Post();

        post.setUuid(UUID.randomUUID().toString());
        post.setTitle(postRequest.getTitle());
        post.setContent(postRequest.getContent());
        post.setUserUuid(postRequest.getUuidUser());

        repository.save(post);

        PostResponse postResponse = new PostResponse();

        postResponse.setUuid(post.getUuid());
        postResponse.setTitle(post.getTitle());
        postResponse.setContent(post.getContent());
        postResponse.setUuidUser(post.getUserUuid());

        return postResponse;

    }

    public PostResponse read(String uuid, PostRepository repository) {

        Post post = repository.findByUuid(uuid);
        PostResponse postResponse = new PostResponse();

        postResponse.setUuid(post.getUuid());
        postResponse.setTitle(post.getTitle());
        postResponse.setContent(post.getContent());
        postResponse.setUuidUser(post.getUserUuid());

        return postResponse;

    }

    public PostResponse update(String uuid, PostRequest postRequest, PostRepository repository) {

        Post post = repository.findByUuid(uuid);

        post.setTitle(postRequest.getTitle());
        post.setContent(postRequest.getContent());

        repository.save(post);

        PostResponse postResponse = new PostResponse();

        postResponse.setUuid(post.getUuid());
        postResponse.setTitle(post.getTitle());
        postResponse.setContent(post.getContent());
        postResponse.setUuidUser(post.getUserUuid());

        return postResponse;
    }

    public void delete(String uuid, PostRepository repository) {
        Post post = repository.findByUuid(uuid);
        repository.deleteByUuid(uuid);
    }

}
