package org.nc.solid.application.usecase.notification.send.interfaces;

import org.nc.solid.domain.entities.Notification;

public interface Sender {
    void send(Notification notification);
}
