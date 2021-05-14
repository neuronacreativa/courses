package org.nc.solid.application.usecase.user;

import org.nc.solid.domain.entities.User;
import org.nc.solid.application.repositories.UserRepository;
import org.nc.solid.application.usecase.user.dto.UserRequest;
import org.nc.solid.application.usecase.user.dto.UserResponse;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.UUID;

@Service
public class CreateUser {

    public UserResponse create(UserRequest userRequest, UserRepository userRepository) {
        User user = new User();
        user.setUuid(UUID.randomUUID().toString());
        user.setName(userRequest.getName());
        user.setLastname(userRequest.getLastname());
        user.setUsername(userRequest.getUsername());
        user.setEmail(userRequest.getEmail());

        userRepository.save(user);

        return new UserResponse(user);
    }
}
