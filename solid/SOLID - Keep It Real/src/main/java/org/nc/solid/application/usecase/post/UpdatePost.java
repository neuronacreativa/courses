package org.nc.solid.application.usecase.post;

import org.nc.solid.application.repositories.PostRepository;
import org.nc.solid.application.repositories.UserRepository;
import org.nc.solid.domain.entities.Post;
import org.nc.solid.domain.entities.User;
import org.nc.solid.application.usecase.post.dto.PostRequest;
import org.nc.solid.application.usecase.post.dto.PostResponse;
import org.springframework.stereotype.Service;

@Service
public class UpdatePost {

    public PostResponse update(String uuid, PostRequest postRequest, PostRepository postRepository, UserRepository userRepository) {
        Post post = postRepository.findByUuid(uuid);
        User user = userRepository.findByUuid(postRequest.getUuidUser());

        post.setTitle(postRequest.getTitle());
        post.setContent(postRequest.getContent());
        post.setUser(user);

        postRepository.save(post);

        return new PostResponse(post);
    }
}
