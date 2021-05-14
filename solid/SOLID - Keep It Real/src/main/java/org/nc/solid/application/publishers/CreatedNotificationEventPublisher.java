package org.nc.solid.application.publishers;

import org.nc.solid.application.events.CreatedNotificationEvent;
import org.nc.solid.application.usecase.notification.send.interfaces.Sender;
import org.nc.solid.domain.entities.Notification;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.ApplicationEventPublisher;
import org.springframework.stereotype.Component;

@Component
public class CreatedNotificationEventPublisher {

    private final ApplicationEventPublisher applicationEventPublisher;

    @Autowired
    public CreatedNotificationEventPublisher(ApplicationEventPublisher applicationEventPublisher) {
        this.applicationEventPublisher = applicationEventPublisher;
    }

    public void publishCreatedNotificationEvent(final Sender sender, final Notification notification) {
        CreatedNotificationEvent createdNotificationEvent = new CreatedNotificationEvent(this, notification, sender);
        applicationEventPublisher.publishEvent(createdNotificationEvent);
    }
}
