package org.nc.solid.application.usecase.notification.create;

import org.nc.solid.application.publishers.CreatedNotificationEventPublisher;
import org.nc.solid.application.repositories.NotificationRepository;
import org.nc.solid.application.usecase.notification.send.senders.EmailSender;
import org.nc.solid.application.usecase.notification.create.dto.CreateNotificationRequest;
import org.nc.solid.application.usecase.notification.create.dto.CreateNotificationResponse;
import org.nc.solid.domain.entities.Notification;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.UUID;

@Service
public class CreateNotification {

    private final CreatedNotificationEventPublisher createdNotificationEventPublisher;

    @Autowired
    public CreateNotification(CreatedNotificationEventPublisher createdNotificationEventPublisher) {
        this.createdNotificationEventPublisher = createdNotificationEventPublisher;
    }

    public CreateNotificationResponse create(CreateNotificationRequest notificationRequest,
            NotificationRepository notificationRepository) {

        Notification notification = new Notification();

        notification.setUuid(UUID.randomUUID().toString());
        notification.setUser(notificationRequest.getUser());
        notification.setBody(notificationRequest.getBody());
        notification.setReceiver(notificationRequest.getReceiver());

        notificationRepository.save(notification);

        createdNotificationEventPublisher.publishCreatedNotificationEvent(
                new EmailSender(),
                notification
        );

        return new CreateNotificationResponse(notification);
    }
}
