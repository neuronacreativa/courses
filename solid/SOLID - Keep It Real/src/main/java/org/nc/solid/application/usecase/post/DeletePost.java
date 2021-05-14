package org.nc.solid.application.usecase.post;

import org.nc.solid.application.repositories.PostRepository;
import org.nc.solid.domain.entities.Post;
import org.nc.solid.domain.entities.User;
import org.nc.solid.application.usecase.post.dto.PostResponse;
import org.nc.solid.application.usecase.user.dto.UserResponse;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class DeletePost {

    public void delete(String uuid, PostRepository postRepository) {
        postRepository.deleteByUuid(uuid);
    }
}
