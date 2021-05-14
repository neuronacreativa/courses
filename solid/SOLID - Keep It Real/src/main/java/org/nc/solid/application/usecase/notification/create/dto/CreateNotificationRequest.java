package org.nc.solid.application.usecase.notification.create.dto;

import org.nc.solid.domain.entities.User;

public class CreateNotificationRequest {
    private String receiver;
    private String body;

    private User user;

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
