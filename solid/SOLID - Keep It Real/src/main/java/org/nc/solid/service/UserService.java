package org.nc.solid.service;

import java.util.UUID;

import org.nc.solid.repositories.H2UserRepository;
import org.nc.solid.request.UserRequest;
import org.nc.solid.response.UserResponse;
import org.nc.solid.entities.User;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class UserService {

	private final H2UserRepository userRepository;

	@Autowired
	public UserService(H2UserRepository userRepository) {
		this.userRepository = userRepository;
	}

	private UserResponse getUserResponse(User user) {
		UserResponse userResponse = new UserResponse();

		userResponse.setUuid(user.getUuid());
		userResponse.setName(user.getName());
		userResponse.setLastname(user.getLastname());
		userResponse.setUsername(user.getUsername());
		userResponse.setEmail(user.getEmail());

		return userResponse;
	}

	public UserResponse create(UserRequest userRequest) {
		User user = new User();
		user.setUuid(UUID.randomUUID().toString());
		user.setName(userRequest.getName());
		user.setLastname(userRequest.getLastname());
		user.setUsername(userRequest.getUsername());
		user.setEmail(userRequest.getEmail());

		userRepository.save(user);

		return getUserResponse(user);

	}

	public UserResponse read(String uuid) {
		return getUserResponse(userRepository.findByUuid(uuid));
	}
	
	public UserResponse update(String uuid, UserRequest userRequest) {
		
		User user = userRepository.findByUuid(uuid);

		user.setName(userRequest.getName());
		user.setLastname(userRequest.getLastname());
		user.setUsername(userRequest.getUsername());
		user.setEmail(userRequest.getEmail());

		userRepository.save(user);

		return getUserResponse(user);
	}
	
	public void delete(String uuid) {
		userRepository.deleteByUuid(uuid);
	}
}
