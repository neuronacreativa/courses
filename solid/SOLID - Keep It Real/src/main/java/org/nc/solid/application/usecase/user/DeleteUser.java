package org.nc.solid.application.usecase.user;

import org.nc.solid.application.repositories.UserRepository;
import org.springframework.stereotype.Service;

@Service
public class DeleteUser {

    public void delete(String uuid, UserRepository userRepository) {
        userRepository.deleteByUuid(uuid);
    }
}
