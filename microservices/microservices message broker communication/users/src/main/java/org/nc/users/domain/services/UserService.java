package org.nc.users.domain.services;

import java.util.UUID;

import org.nc.users.domain.dto.request.UserRequest;
import org.nc.users.domain.dto.response.UserResponse;
import org.nc.users.domain.entities.User;
import org.nc.users.domain.repositories.UserRepository;
import org.springframework.stereotype.Service;

@Service
public class UserService {

	public UserResponse create(UserRequest userRequest, UserRepository repository) {
		
		User user = new User();
		user.setUuid(UUID.randomUUID().toString());
		user.setName(userRequest.getName());
		user.setLastname(userRequest.getLastname());
		user.setUsername(userRequest.getUsername());
		user.setEmail(userRequest.getEmail());
		user.setPostCount(0);
		
		repository.save(user);
		
		UserResponse userResponse = new UserResponse();
		
		userResponse.setUuid(user.getUuid());
		userResponse.setName(user.getName());
		userResponse.setLastname(user.getLastname());
		userResponse.setUsername(user.getUsername());
		userResponse.setEmail(user.getEmail());
		userResponse.setPostCount(0);
		
		return userResponse;
		
	}
	
	public UserResponse read(String uuid, UserRepository repository) {
		
		User user = repository.findByUuid(uuid);
		UserResponse userResponse = new UserResponse();
		
		userResponse.setUuid(user.getUuid());
		userResponse.setName(user.getName());
		userResponse.setLastname(user.getLastname());
		userResponse.setUsername(user.getUsername());
		userResponse.setEmail(user.getEmail());
		userResponse.setPostCount(user.getPostCount());
		
		return userResponse;
		
	}
	
	public UserResponse update(String uuid, UserRequest userRequest, UserRepository repository) {
		
		User user = repository.findByUuid(uuid);

		user.setName(userRequest.getName());
		user.setLastname(userRequest.getLastname());
		user.setUsername(userRequest.getUsername());
		user.setEmail(userRequest.getEmail());
		
		repository.save(user);
		
		UserResponse userResponse = new UserResponse();
		
		userResponse.setUuid(user.getUuid());
		userResponse.setName(user.getName());
		userResponse.setLastname(user.getLastname());
		userResponse.setUsername(user.getUsername());
		userResponse.setEmail(user.getEmail());
		userResponse.setPostCount(user.getPostCount());		
		
		return userResponse;
	}
	
	public void delete(String uuid, UserRepository repository) {
		repository.deleteByUuid(uuid);
	}
	
	public UserResponse increasePostCount(String uuid, UserRepository repository) {
		User user = repository.findByUuid(uuid);
		
		if (user == null) {
			return new UserResponse();
		}
		
		user.setPostCount(user.getPostCount() + 1);
		repository.save(user);
		
		UserResponse userResponse = new UserResponse();
		
		userResponse.setUuid(user.getUuid());
		userResponse.setName(user.getName());
		userResponse.setLastname(user.getLastname());
		userResponse.setUsername(user.getUsername());
		userResponse.setEmail(user.getEmail());
		userResponse.setPostCount(user.getPostCount());		
		
		return userResponse;
	}
	
	public UserResponse decreasePostCount(String uuid, UserRepository repository) {
		User user = repository.findByUuid(uuid);
		
		if (user.getPostCount() - 1 >= 0) {
			user.setPostCount(user.getPostCount() - 1);
		}else {
			user.setPostCount(0);
		}
		repository.save(user);
		
		UserResponse userResponse = new UserResponse();
		
		userResponse.setUuid(user.getUuid());
		userResponse.setName(user.getName());
		userResponse.setLastname(user.getLastname());
		userResponse.setUsername(user.getUsername());
		userResponse.setEmail(user.getEmail());
		userResponse.setPostCount(user.getPostCount());		
		
		return userResponse;
	}
}
