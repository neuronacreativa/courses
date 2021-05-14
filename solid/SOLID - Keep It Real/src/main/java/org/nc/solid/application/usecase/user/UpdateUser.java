package org.nc.solid.application.usecase.user;

import org.nc.solid.domain.entities.User;
import org.nc.solid.application.repositories.UserRepository;
import org.nc.solid.application.usecase.user.dto.UserRequest;
import org.nc.solid.application.usecase.user.dto.UserResponse;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class UpdateUser {

    public UserResponse update(String uuid, UserRequest userRequest, UserRepository userRepository) {

        User user = userRepository.findByUuid(uuid);

        user.setName(userRequest.getName());
        user.setLastname(userRequest.getLastname());
        user.setUsername(userRequest.getUsername());
        user.setEmail(userRequest.getEmail());

        userRepository.save(user);

        return new UserResponse(user);
    }
}
