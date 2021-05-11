package nc.courses.solid.s.blogsample.usecases;

import nc.courses.solid.s.blogsample.model.User;
import nc.courses.solid.s.blogsample.repository.UserRepository;
import nc.courses.solid.s.blogsample.request.UserRequest;
import nc.courses.solid.s.blogsample.response.UserResponse;
import org.springframework.stereotype.Service;

import java.util.UUID;

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

}
