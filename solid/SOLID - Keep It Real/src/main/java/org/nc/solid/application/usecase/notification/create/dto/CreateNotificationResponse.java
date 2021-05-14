package org.nc.solid.application.usecase.notification.create.dto;

import org.nc.solid.domain.entities.Notification;
import org.nc.solid.domain.entities.User;

public class CreateNotificationResponse {
    private String uuid;
    private String receiver;
    private String body;
    private User user;

    public CreateNotificationResponse(Notification notification) {
        this.uuid = notification.getUuid();
        this.receiver = notification.getReceiver();
        this.body = notification.getBody();
        this.user = notification.getUser();
    }
    public String getUuid() {
        return uuid;
    }

    public void setUuid(String uuid) {
        this.uuid = uuid;
    }

    public String getReceiver() {
        return receiver;
    }

    public void setReceiver(String receiver) {
        this.receiver = receiver;
    }

    public String getBody() {
        return body;
    }

    public void setBody(String body) {
        this.body = body;
    }

    public User getUser() {
        return user;
    }

    public void setUser(User user) {
        this.user = user;
    }
}
