package org.nc.solid.application.usecase.notification;

import org.nc.solid.application.usecase.notification.interfaces.Sender;
import org.nc.solid.domain.entities.Notification;

public class SendNotification {

    public void send(Sender sender,
                     Notification notification) {

        sender.send(notification);
    }
}
