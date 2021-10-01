package org.nc.posts.infrastructure.persistence.h2.post;

import org.nc.posts.domain.entities.Post;
import org.nc.posts.domain.repositories.PostRepository;
import org.nc.posts.infrastructure.persistence.h2.JpaPostRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class H2PostRepository implements PostRepository {

    @Autowired
    JpaPostRepository jpaPostRepository;

    @Override
    public void save(Post post) {
        jpaPostRepository.save(post);
    }

    @Override
    public Post findByUuid(String uuid) {
        return jpaPostRepository.findByUuid(uuid);
    }

    @Override
    public void deleteByUuid(String uuid) {
        jpaPostRepository.deleteByUuid(uuid);
    }
}
