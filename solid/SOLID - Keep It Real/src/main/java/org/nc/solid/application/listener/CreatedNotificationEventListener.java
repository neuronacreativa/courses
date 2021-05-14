package org.nc.solid.application.listener;

import org.nc.solid.application.events.CreatedNotificationEvent;
import org.nc.solid.application.usecase.notification.send.SendNotification;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.ApplicationListener;
import org.springframework.stereotype.Component;

@Component
public class CreatedNotificationEventListener implements ApplicationListener<CreatedNotificationEvent> {

    private final SendNotification sendNotification;

    @Autowired
    public CreatedNotificationEventListener(SendNotification sendNotification) {
        this.sendNotification = sendNotification;
    }

    @Override
    public void onApplicationEvent(CreatedNotificationEvent createdNotificationEvent) {
        // Sending Notification
        this.sendNotification.send(
                createdNotificationEvent.getSender(),
                createdNotificationEvent.getNotification()
        );
    }
}
