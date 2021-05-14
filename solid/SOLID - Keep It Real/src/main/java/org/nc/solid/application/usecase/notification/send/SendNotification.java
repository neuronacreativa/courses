package org.nc.solid.application.usecase.notification.send;

import org.nc.solid.application.usecase.notification.send.interfaces.Sender;
import org.nc.solid.domain.entities.Notification;
import org.springframework.stereotype.Service;

@Service
public class SendNotification {

    public void send(Sender sender,
                     Notification notification) {

        sender.send(notification);
    }
}
