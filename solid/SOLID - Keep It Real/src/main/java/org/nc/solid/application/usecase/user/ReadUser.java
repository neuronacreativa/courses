package org.nc.solid.application.usecase.user;

import org.nc.solid.application.repositories.UserRepository;
import org.nc.solid.application.usecase.user.dto.UserResponse;
import org.springframework.stereotype.Service;

@Service
public class ReadUser {

    public UserResponse read(String uuid, UserRepository userRepository) {
        return new UserResponse(userRepository.findByUuid(uuid));
    }

}
