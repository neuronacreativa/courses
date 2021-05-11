package nc.courses.solid.s.blogsample.usecases;

import nc.courses.solid.s.blogsample.model.User;
import nc.courses.solid.s.blogsample.repository.UserRepository;
import nc.courses.solid.s.blogsample.response.UserResponse;
import org.springframework.stereotype.Service;

@Service
public class UserPostCounterService {
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
