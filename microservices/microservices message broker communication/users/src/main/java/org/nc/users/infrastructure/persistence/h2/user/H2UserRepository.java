package org.nc.users.infrastructure.persistence.h2.user;

import org.nc.users.domain.entities.User;
import org.nc.users.domain.repositories.UserRepository;
import org.nc.users.infrastructure.persistence.h2.JpaUserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

@Repository
public class H2UserRepository implements UserRepository {

    @Autowired
    JpaUserRepository jpaUserRepository;

    @Override
    public void save(User post) {
        jpaUserRepository.save(post);
    }

    @Override
    public User findByUuid(String uuid) {
        return jpaUserRepository.findByUuid(uuid);
    }

    @Override
    public void deleteByUuid(String uuid) {
        jpaUserRepository.deleteByUuid(uuid);
    }
}
