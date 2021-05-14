package org.nc.solid.application.usecase.notification.interfaces;

import org.nc.solid.domain.entities.Notification;

public interface SenderEmail extends Sender {
    @Override
    void send(Notification notification);
}
