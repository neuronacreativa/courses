package org.nc.solid.application.usecase.notification;

import org.nc.solid.application.repositories.NotificationRepository;
import org.nc.solid.application.usecase.notification.dto.CreateNotificationRequest;
import org.nc.solid.application.usecase.notification.dto.CreateNotificationResponse;
import org.nc.solid.domain.entities.Notification;
import org.springframework.stereotype.Service;

import java.util.UUID;

@Service
public class CreateNotification {

    public CreateNotificationResponse create(CreateNotificationRequest notificationRequest,
            NotificationRepository notificationRepository) {

        Notification notification = new Notification();

        notification.setUuid(UUID.randomUUID().toString());
        notification.setUser(notificationRequest.getUser());
        notification.setBody(notificationRequest.getBody());
        notification.setReceiver(notificationRequest.getReceiver());

        notificationRepository.save(notification);

        return new CreateNotificationResponse(notification);
    }
}
