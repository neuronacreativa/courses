package org.nc.monolith.infrastructure.persistence.h2.user;

import org.nc.monolith.domain.entities.User;
import org.nc.monolith.domain.repositories.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

@Repository
public class H2UserRepository implements UserRepository {

    @Autowired
    H2UserRepository h2UserRepository;

    @Override
    public void save(User user) {
        h2UserRepository.save(
                user
        );
    }

    @Override
    public User findByUuid(String uuid) {
        return h2UserRepository.findByUuid(uuid);
    }

    @Override
    public void deleteByUuid(String uuid) {
        h2UserRepository.deleteByUuid(uuid);
    }
}
