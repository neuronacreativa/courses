package org.nc.solid.application.usecase.post;

import org.nc.solid.application.repositories.PostRepository;
import org.nc.solid.application.usecase.post.dto.PostResponse;
import org.springframework.stereotype.Service;

@Service
public class ReadPost {

    public PostResponse read(String uuid, PostRepository postRepository) {
        return new PostResponse(postRepository.findByUuid(uuid));
    }
}
