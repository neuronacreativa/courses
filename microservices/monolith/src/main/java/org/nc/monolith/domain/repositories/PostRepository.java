package org.nc.monolith.domain.repositories;

import org.nc.monolith.domain.entities.Post;

public interface PostRepository {

    void save(Post post);

    Post findByUuid(String uuid);

    void deleteByUuid(String uuid);

}
