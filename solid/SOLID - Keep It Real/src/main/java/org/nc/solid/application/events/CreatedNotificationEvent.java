package org.nc.solid.application.events;

import org.nc.solid.application.usecase.notification.send.interfaces.Sender;
import org.nc.solid.domain.entities.Notification;
import org.nc.solid.domain.entities.Post;
import org.nc.solid.domain.events.NotificationEvent;
import org.springframework.context.ApplicationEvent;

public class CreatedNotificationEvent extends ApplicationEvent implements NotificationEvent {

    private Notification notification;
    private Sender sender;

    public CreatedNotificationEvent(Object source, Notification notification, Sender sender) {
        super(source);
        this.notification = notification;
        this.sender = sender;
    }

    public Notification getNotification() {
        return notification;
    }

    public void setNotification(Notification notification) {
        this.notification = notification;
    }

    public Sender getSender() {
        return sender;
    }

    public void setSender(Sender sender) {
        this.sender = sender;
    }

    @Override
    public boolean sameEventAs(Post other) {
        return false;
    }
}
