package org.nc.solid.application.usecase.notification.send.interfaces;

import org.nc.solid.domain.entities.Notification;

public interface SenderSMS extends Sender {
    @Override
    void send(Notification notification);
}
