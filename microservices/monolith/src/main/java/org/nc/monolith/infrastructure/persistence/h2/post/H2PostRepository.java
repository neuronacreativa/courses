package org.nc.monolith.infrastructure.persistence.h2.post;

import org.nc.monolith.domain.entities.Post;
import org.nc.monolith.domain.repositories.PostRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

@Repository
public class H2PostRepository implements PostRepository {

    @Autowired
    H2PostRepository h2PostRepository;

    @Override
    public void save(Post post) {
        h2PostRepository.save(post);
    }

    @Override
    public Post findByUuid(String uuid) {
        return h2PostRepository.findByUuid(uuid);
    }

    @Override
    public void deleteByUuid(String uuid) {
        h2PostRepository.deleteByUuid(uuid);
    }
}
