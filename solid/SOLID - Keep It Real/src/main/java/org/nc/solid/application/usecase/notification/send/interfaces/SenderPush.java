package org.nc.solid.application.usecase.notification.send.interfaces;

import org.nc.solid.domain.entities.Notification;

public interface SenderPush extends Sender {
    @Override
    void send(Notification notification);
}
