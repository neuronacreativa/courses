package org.nc.solid.application.usecase.post;

import org.nc.solid.application.repositories.NotificationRepository;
import org.nc.solid.application.repositories.PostRepository;
import org.nc.solid.application.repositories.UserRepository;
import org.nc.solid.application.usecase.notification.create.CreateNotification;
import org.nc.solid.application.usecase.notification.create.dto.CreateNotificationRequest;
import org.nc.solid.domain.entities.Post;
import org.nc.solid.application.usecase.post.dto.PostRequest;
import org.nc.solid.application.usecase.post.dto.PostResponse;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.UUID;

@Service
public class CreatePost {

    private final CreateNotification createNotification;
    private final NotificationRepository notificationRepository;

    @Autowired
    public CreatePost(CreateNotification createNotification, NotificationRepository notificationRepository) {
        this.createNotification = createNotification;
        this.notificationRepository = notificationRepository;
    }

    private void createNotification(Post post) {
        CreateNotificationRequest createNotificationRequest = new CreateNotificationRequest();
        createNotificationRequest.setBody("New Post created with uuid: " + post.getUuid());
        createNotificationRequest.setReceiver(post.getUser().getEmail());
        createNotificationRequest.setUser(post.getUser());

        this.createNotification.create(createNotificationRequest, notificationRepository);
    }

    public PostResponse create(PostRequest postRequest, PostRepository postRepository, UserRepository userRepository) {
        Post post = new Post();

        post.setUuid(UUID.randomUUID().toString());
        post.setTitle(postRequest.getTitle());
        post.setContent(postRequest.getContent());
        post.setUser(
                userRepository.findByUuid(postRequest.getUuidUser())
        );

        createNotification(post);

        return new PostResponse(post);
    }
}
